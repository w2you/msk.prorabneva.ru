<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCookieConsentsTable extends Migration
{
    /**
     * Создать таблицу журнала согласий с cookie.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('cookie_consents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('consented_at')->comment('Дата и время согласия (юридический факт)');
            $table->string('form')->default('cookie-banner')->comment('Идентификатор формы/баннера');
            // page_url и referer — TEXT: реальные URL с query-строкой бывают длиннее 255 символов.
            $table->text('page_url')->nullable()->comment('Страница, на которой дано согласие');
            $table->string('ip', 45)->nullable()->comment('IP-адрес посетителя (IPv4/IPv6)');
            $table->text('user_agent')->nullable()->comment('User-Agent браузера');
            $table->text('referer')->nullable()->comment('Referer-страница');
            $table->string('policy_version')->nullable()->comment('Версия текста политики');
            $table->unsignedInteger('region_id')->nullable()->comment('Регион (мультирегиональность)');
            $table->timestamps();

            $table->index('consented_at');
        });
    }

    /**
     * Откатить миграцию.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('cookie_consents');
    }
}
