<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use App\Traits\Tour3dRelation;

class PostContent extends Model
{
    const CONTENT_TYPE_TITLE_TEXTS = 0;
    const CONTENT_TYPE_TEXT = 1;
    const TEXT_H4TEXTS = 2;
    const CONTENT_TYPE_H3TITLE_TEXTS = 3;
    const CONTENT_TYPE_H2TITLE_TEXT_TEXTSPOINT = 4;
    const CONTENT_TYPE_H2TITLE_TEXTS = 5;
    const CONTENT_TYPE_H2TITLE_TEXT = 6;
    const CONTENT_TYPE_TEXT_TEXTSPOINT = 7;
    const CONTENT_BOXES = 8;
    const CONTENT_TYPE_BLOG_PRICE = 9;
    const CONTENT_TYPE_BLOG_DIZINE = 10;
    const CONTENT_TYPE_BLOG_KOMPLEKSNAYA_PRIEMKA = 11;
    const CONTENT_TYPE_BLOG_GOTOVI = 12;
    const CONTENT_TYPE_1_BIG_PICTURE = 13;
    const CONTENT_TYPE_2_BIG_PICTURE = 14;
    const CONTENT_TYPE_GALLERY = 15;
	const CONTENT_TYPE_STA = 16;

    public static $content_types = [
        self::CONTENT_TYPE_TITLE_TEXTS => 'Содержание статьи', // +
        self::CONTENT_TYPE_TEXT => 'Текст редактор', // +
        self::TEXT_H4TEXTS => 'Заголовок (strong) + текст', // +
//        self::CONTENT_TYPE_H3TITLE_TEXTS => 'h3 Заголовок + Динамик текст редактор', // ----
//        self::CONTENT_TYPE_H2TITLE_TEXT_TEXTSPOINT => 'h2 Заголовок  + Текст редактор + Динамик тексты с точками',
//        self::CONTENT_TYPE_H2TITLE_TEXTS => 'h2 Заголовок + Динамик тексты',
//        self::CONTENT_TYPE_H2TITLE_TEXT => 'h2 Заголовок + Текст редактор',
        self::CONTENT_TYPE_TEXT_TEXTSPOINT => 'Текст + список', // +
        self::CONTENT_BOXES => 'Блоки с ценой',  // +
        self::CONTENT_TYPE_BLOG_PRICE => 'Блок “Узнайте стоимость вашего ремонта”',  // +
        self::CONTENT_TYPE_BLOG_DIZINE => 'Блок “Технический дизайн-проект интерьера в подарок!”',  // +
        self::CONTENT_TYPE_BLOG_KOMPLEKSNAYA_PRIEMKA => 'Блок “Комплексная приемка”',  // +
        self::CONTENT_TYPE_BLOG_GOTOVI => 'Блок “Готовые решения по отделке новостройки под ключ”',  // +
        self::CONTENT_TYPE_1_BIG_PICTURE => '1 Большая картинка',  // +
        self::CONTENT_TYPE_2_BIG_PICTURE => '2 Большая картинка',  // +
        self::CONTENT_TYPE_GALLERY => 'Галерия',  // +
		self::CONTENT_TYPE_STA => 'СТА ФОРМА',  // +
    ];

    protected $table = 'posts_contents';

    protected $fillable = ['post_id','type','sort', 'title', 'subtitle', 'text', 'texts'];

    protected $casts = [
        'texts' => 'array',
    ];

    public function files()
    {
        return $this->hasMany(PostContentFile::class, 'post_content_id')->orderBy('sort_img','ASC');
    }
}
