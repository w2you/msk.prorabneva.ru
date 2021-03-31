<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\FileHelper;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Mail\ReviewSend;
use App\Models\Page;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Meta;

class ReviewController extends Controller
{
    public function __construct()
    {
        parent::__construct(null, null, Page::REVIEWS);
    }

    public function index()
    {
//        $pageNumber = 1;
//        if ($page == 'first') {
//            $pageNumber = 1;
//        } elseif ($page == 'page1') {
//            return Redirect::to('/otzivi', 301);
//        } elseif (preg_match('/^page[\d]+$/', $page) ){
//            $pageNumber = str_replace('page', '', $page);
//        } else{
//            abort(404);
//        }

//
//        Paginator::currentPageResolver(function () use ($pageNumber) {
//            return $pageNumber;
//        });

//        $reviews = Review::visible()->orderBy('created_at', 'desc')->paginate(20);

        $avgRating = round(Review::where('status', 1)->where('region_id',$this->selectRegion->id)->avg('rating'), 1);
        $reviews_mob = Review::visible()->where('region_id',$this->selectRegion->id)->orderBy('order_show', 'desc')->orderBy('created_at', 'desc');
        
        $all_count = $reviews_mob->count();
        $reviews = $reviews_mob->take(15)->get();

        $page = $this->page;

        $this->setBreadCrumbs([
            $page->title
        ]);

        return $this->renderView($this->viewPath . '.reviews.index', [
            'avgRating' => $avgRating,
            'reviews' => $reviews,
//            'reviews_mob' => $reviews_mob,
            'all_count' => $all_count,
            'page' => $page
        ]);
    }

    public function showMore(Request $request)
    {
        $step = $request['step'];
        $hasCount = false;

        $reviews_mob = Review::visible()->orderBy('created_at', 'desc');
        $all_count = $reviews_mob->count();
        $reviews_mob = $reviews_mob->offset(($step + 1) * 15)->take(15)->get();

        if ($all_count > ($step + 2) * 15) {
            $hasCount = true;
        }

        $returnHTML = view('frontend.reviews.partials.comments')->with(['reviews_mob' => $reviews_mob])->render();

        return response()->json(['html' => $returnHTML, 'hasCount' => $hasCount]);
    }

    public function create(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:191',
                'body' => 'required',
                'images' => 'nullable|array',
                'images.*' => 'image|max:8192',
                'author' => 'required|max:191',
                'author_image' => 'required|image|max:8192',
                'deal_number' => 'required',
                'rating' => 'required|integer|min:1|max:5',
            ]);

            $niceNames = array(
                'title' => '"Название"',
                'body' => '"Текст"',
                'author' => '"Автор" (имя)',
                'author_image' => '"Фото автора"',
                'deal_number' => '"Номер договора"',
            );

            $validator->setAttributeNames($niceNames);
            if ($validator->fails()) {
                throw new \Exception(serialize($validator->errors()->getMessages()));
            }

            return response()->json(['message' => 'ok']);
        } catch (\Exception $e) {
            $messages = Helper::convertKeysDotToBracket($e->getMessage());
            return response()->json(['messages' => $messages], 400);
        }
    }

    public function createStore(Request $request)
    {
        $review = new Review();
        $review->title = $request->title;
        $review->body = $request->body;
        $review->author = $request->author;
        $review->deal_number = $request->deal_number;
        $review->rating = $request->rating;

        $images = [];
        foreach ($request->images ?? [] as $image) {
            $fileInfo = FileHelper::uploadFile('reviews', $image);
            $images[] = $fileInfo['download_link'];
        }
        $review->images = json_encode($images);

        $fileInfo = FileHelper::uploadFile('reviews', $request->author_image);
        $review->author_image = $fileInfo['download_link'];

        $review->save();

        Mail::to('lavrova@prorabneva.ru')->cc('prorabneva@mail.ru')->send(new ReviewSend($review));

        return response()->json(['message' => 'ok']);
    }
}
