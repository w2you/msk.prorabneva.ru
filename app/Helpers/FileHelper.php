<?php

namespace App\Helpers;



use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use TCG\Voyager\Events\FileDeleted;

class FileHelper
{
    public static function uploadFile(string $slug, UploadedFile $file)
    {
        $filename = self::generateFileName();
        $path = self::generatePath($slug);
        $file->storeAs(
            $path,
            $filename.'.'.$file->getClientOriginalExtension(),
            config('voyager.storage.disk', 'public')
        );

        return  [
            'download_link' => $path.$filename.'.'.$file->getClientOriginalExtension(),
            'original_name' => $file->getClientOriginalName(),
        ];
    }

    /**
     * @param string $slug
     * @return string
     */
    protected static function generatePath(string $slug)
    {
        return $slug . DIRECTORY_SEPARATOR . date('FY') . DIRECTORY_SEPARATOR;
    }

    /**
     * @return string
     */
    protected static function generateFileName()
    {
        return Str::random(20);
    }

    /**
     * @param $path
     */
    public static function deleteFileIfExists($path)
    {
//        dd($path);
        if (Storage::disk(config('voyager.storage.disk'))->exists($path)) {
            Storage::disk(config('voyager.storage.disk'))->delete($path);
            event(new FileDeleted($path));
        }
    }

}