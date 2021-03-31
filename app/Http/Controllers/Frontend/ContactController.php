<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\FileHelper;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Mail\LetterDirector;
use App\Models\CategoryWorker;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Region;
use App\Models\Review;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Meta;

class ContactController extends Controller
{
    public function __construct()
    {
        parent::__construct(null, null, Page::CONTACT);
    }

    public function index()
    {
        $page = $this->page;
        $mainContact = Contact::where('is_main', true)->first();
        /*$managers = CategoryWorker
            ::where(['slug' => CategoryWorker::MANAGERS])
            ->with('workers')
            ->first()
            ->workers;*/

        $category = CategoryWorker::where(['slug' => CategoryWorker::MANAGERS])->first();

        $managers = Worker
            ::with('category')
            ->where('region_id',$this->selectRegion->id)
            ->where('category_id',$category->id)
            ->get();

        
        $this->setBreadCrumbs([
            $page->title
        ]);
        $city = Region::where('id',$this->selectRegion->id)->first();
        return $this->renderView($this->viewPath . '.contact.index', [
            'page' => $page,
            'mainContact' => $mainContact,
            'managers' => $managers,
            'city'=>$city,
        ]);

    }


    public function letterDirector()
    {
        $this->setBreadCrumbs([
            'Письмо директору'
        ]);

        Meta::set('title', 'Письмо директору | Прораб НЕВА');
        Meta::set('description', 'Письмо директору');
        Meta::set('keywords', 'Письмо директору');

        return $this->renderView($this->viewPath . '.letter_director.index', [

        ]);
    }

    public function letterDirectorPost(Request $request)
    {
        $niceNames = array(
            'name' => '"Ваше имя"',
            'email' => '"Email"',
            'type' => '"Tип обращения"',
            'content' => '"Ваше сообщение или вопрос…"',
            'g-recaptcha-response' => '"Я не робот"',
        );

        Validator::make($request->all(), [
            'g-recaptcha-response' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
            'type' => 'required',
        ])->setAttributeNames($niceNames)->validate();

        $request->session()->flash('successLetter', true);
        Mail::to('lavrova@prorabneva.ru')->cc('prorabneva@mail.ru')->send(new LetterDirector($request->all()));

        return back();

    }

}
