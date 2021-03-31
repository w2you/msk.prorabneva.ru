<?php

namespace App\Http\Controllers\Voyager;

use App\Models\Post;
use App\Models\PostContent;
use App\Models\PostContentFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as InterventionImage;
use TCG\Voyager\Events\FileDeleted;

class BlogPostContentController extends VoyagerBaseController
{
    public function content($id)
    {
        $post = Post::query()->findOrFail($id);
        $types = PostContent::$content_types;

        return view('vendor.voyager.posts.content', compact('post', 'types'));
    }

    private function saveSort($contents,$sorts, $id)
    {
        Log::info($sorts);
        $sorts = explode(',', $sorts);
        $sorts = array_flip($sorts);
        $sort = 0;
        foreach ($contents as $key => $content) {
            $content_id = $content['id'];
            $type = $this->getType($key);
            if (is_numeric($type)) {
                $sort = $sort + 1;
                $post_content = null;
                if ($content_id) {
                    $post_content = PostContent::query()->where('type', $type)->where('post_id', $id)->find($content_id);
                }

                if (!$post_content) {
                    $post_content = new PostContent();
                    $post_content->post_id = $id;
                    $post_content->type = $type;
                }

                $post_content->sort = $sorts[$key];
                $post_content->save();
                $contents[$key]['id'] = $post_content['id'];
            }
        }
        return $contents;
    }

    public function contentStore(Request $request, $id)
    {
        $contents = $request['contents'] ?? [];
        $sorts = $request['sorts'] ?? [];

        $contents = $this->saveSort($contents,$sorts, $id);

        foreach ($contents as $key => $content) {
            $content_id = $content['id'];
            $type = $this->getType($key);
            if (is_numeric($type)) {
                $post_content = null;
                if ($content_id) {
                    $post_content = PostContent::query()->where('post_id', $id)->where('type', $type)->find($content_id);
                }

                if (!$post_content) {
                    $post_content = new PostContent();
                    $post_content->post_id = $id;
                    $post_content->type = $type;
                }


                if (in_array($type, [1, 3, 4, 5, 6, 7, 16])) {
                    $post_content->title = $content['title'] ?? '';
                    $post_content->subtitle = $content['subtitle'] ?? '';
                    $post_content->text = $content['text'] ?? '';
                    $post_content->texts = $content['texts'] ?? [];
                }


                if ($type == 0) {
                    $texts = [];
                    foreach (array_chunk($content['texts'] ?? [], 2) as $curta) {
                        $texts[] = ['text' => $curta[0]['text'], 'link' => $curta[1]['link']];
                    }
                    $post_content->texts = $texts;
                }

                if ($type == 2) {
                    $texts = [];
                    foreach (array_chunk($content['texts'] ?? [], 2) as $curta) {
                        $texts[] = ['title' => $curta[0]['title'], 'text' => $curta[1]['text']];
                    }
                    $post_content->texts = $texts;
                }

                if ($type == 8) {
                    $texts = [];
                    foreach (array_chunk($content['texts'] ?? [], 3) as $curta) {
                        $texts[] = ['title' => $curta[0]['title'], 'parameter' => $curta[1]['parameter'], 'subtitle' => $curta[2]['subtitle']];
                    }
                    $post_content->texts = $texts;
                }

                $post_content->save();

                if ($type == 13) {
                    if (isset($content['file']) && $content['file']) {
                        $filepath = $this->generateFile($content['file']);
                        if ($filepath) {
                            foreach (PostContentFile::query()->where('post_content_id', $post_content['id'])->get() as $item) {
                                $this->deleteFileIfExists($item['file']);
                                $item->delete();
                            }
                            PostContentFile::query()->create(['post_content_id' => $post_content['id'], 'file' => $filepath]);
                        }
                    }
                }

                if ($type == 14) {
                    if (isset($content['file'][0]) && $content['file'][0]) {
                        $filepath = $this->generateFile($content['file'][0]);
                        if ($filepath) {
                            foreach (PostContentFile::query()->where('post_content_id', $post_content['id'])->where('sort_img', 0)->get() as $item) {
                                $this->deleteFileIfExists($item['file']);
                                $item->delete();
                            }
                            PostContentFile::query()->create(['post_content_id' => $post_content['id'], 'file' => $filepath, 'sort_img' => 0]);
                        }
                    }
                    if (isset($content['file'][1]) && $content['file'][1]) {
                        $filepath = $this->generateFile($content['file'][1]);
                        if ($filepath) {
                            foreach (PostContentFile::query()->where('post_content_id', $post_content['id'])->where('sort_img', 1)->get() as $item) {
                                $this->deleteFileIfExists($item['file']);
                                $item->delete();
                            }
                            PostContentFile::query()->create(['post_content_id' => $post_content['id'], 'file' => $filepath, 'sort_img' => 1]);
                        }
                    }
                }

                if ($type == 15) {
                    foreach ($content['files'] ?? [] as $file) {
                        $filepath = $this->generateFile($file);
                        if ($filepath) {
                            PostContentFile::query()->create(['post_content_id' => $post_content['id'], 'file' => $filepath]);
                        }
                    }
                }


            }
        }

        session(['content_item_keys' => []]);

        return redirect()->route('posts.content', $id);
    }

    private function getType($key)
    {
        $arr = explode('_', $key);
        return $arr[0] ?? null;
    }

    public function getNewContent(Request $request)
    {
        $key = $request['key'];
        if (is_numeric($key))
            return view('vendor.voyager.posts.content_types.type_' . $key)->render();
    }

    public function deleteContent(Request $request)
    {
        $id = $request['id'];

        if (is_numeric($id)) {
            $content = PostContent::query()->findOrFail($id);
            if (in_array($content['type'], [13, 14, 15])) {
                foreach ($content->files ?? [] as $file)
                    $this->deleteFileIfExists($file['file']);
            }
            $content->delete();
        }

        return response()->json(['success' => true]);
    }

    // REMOVE FILE
    public function removeImage(Request $request)
    {
        try {
            $id = $request->get('id');
            $contentFile = PostContentFile::where('id', $id)->first();
            $this->deleteFileIfExists($contentFile['file']);
            $contentFile->delete();

            return response()->json([
                'data' => [
                    'status' => 200,
                    'message' => __('voyager::media.image_removed'),
                ],
            ]);
        } catch (\Exception $e) {
            $code = 500;
            $message = __('voyager::generic.internal_error');

            if ($e->getCode()) {
                $code = $e->getCode();
            }

            if ($e->getMessage()) {
                $message = $e->getMessage();
            }

            return response()->json([
                'data' => [
                    'status' => $code,
                    'message' => $message,
                ],
            ], $code);
        }
    }

    //Update Sorting Images
    public function updateImage(Request $request)
    {
        $images = $request->images;

        foreach ($images as $key => $img) {
            if ($i = PostContentFile::where('id', $img)->first()) {
                $i['sort_img'] = $key;
                $i->save();
            }
        }
        return response()->json('success');
    }

    public function generateFile($file)
    {
        $path = 'post_content' . DIRECTORY_SEPARATOR . date('FY') . DIRECTORY_SEPARATOR;

        $filename = $this->generateFileName($file, $path);

        $image = InterventionImage::make($file);

        $fullPath = $path . $filename . '.' . $file->getClientOriginalExtension();

        $image = $image->encode($file->getClientOriginalExtension(), 90);

        Storage::disk(config('voyager.storage.disk'))->put($fullPath, (string)$image, 'public');

        return $fullPath;
    }

    /**
     * @param \Illuminate\Http\UploadedFile $file
     * @param $path
     *
     * @return string
     */
    protected function generateFileName($file, $path)
    {
        $filename = Str::random(20);

        // Make sure the filename does not exist, if it does, just regenerate
        while (Storage::disk(config('voyager.storage.disk'))->exists($path . $filename . '.' . $file->getClientOriginalExtension())) {
            $filename = Str::random(20);
        }

        return $filename;
    }

    public function deleteFileIfExists($path)
    {
        if (Storage::disk(config('voyager.storage.disk'))->exists($path)) {
            Storage::disk(config('voyager.storage.disk'))->delete($path);
            event(new FileDeleted($path));
        }
    }

}
