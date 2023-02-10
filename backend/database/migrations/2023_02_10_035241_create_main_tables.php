<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 64)->unique();
            $table->string('password');
            $table->string('email', 64)->unique();
            $table->string('phone', 64)->unique()->nullable();
            $table->text('image')->nullable();
            $table->string('name', 64)->index();
            $table->string('position', 64)->index();
            $table->Integer('sort')->default(0)->index();
            $table->tinyInteger('is_guest')->default(0)->index();
            $table->tinyInteger('is_published')->default(0)->index();
            $table->rememberToken();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('newsletter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ip_address', 45)->nullable()->index();
            $table->string('email')->nullable()->index();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('faqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question', 255)->index();
            $table->text('answer')->nullable();
            $table->tinyInteger('is_published')->default(0)->index();
            $table->Integer('sort')->default(0)->index();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key_name', 191)->unique()->index();
            $table->longtext('key_value');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });



        Schema::create('features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icon')->nullable();
            $table->string('title', 64)->index();
            $table->text('description')->nullable();
            $table->tinyInteger('is_published')->default(0)->index();
            $table->Integer('sort')->default(0)->index();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name', 191)->index();
            $table->string('email', 191)->index();
            $table->string('phone', 191)->index();
            $table->string('message');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('pricings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 191)->index();
            $table->string('unit', 191)->index();
            $table->decimal('price', 18, 4)->default(0)->index();
            $table->text('description')->nullable();
            $table->tinyInteger('is_recomended')->default(0)->index();
            $table->tinyInteger('is_published')->default(0)->index();
            $table->Integer('sort')->default(0)->index();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('stories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image')->nullable();
            $table->string('title', 191)->index();
            $table->text('description')->nullable();
            $table->tinyInteger('is_published')->default(0)->index();
            $table->Integer('sort')->default(0)->index();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('images')->nullable();
            $table->string('title', 191)->index();
            $table->text('description')->nullable();
            $table->Integer('sort')->default(0)->index();
            $table->tinyInteger('is_published')->default(0)->index();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index();
            $table->text('image')->nullable();
            $table->string('title', 191)->unique();
            $table->string('slug', 191)->unique();
            $table->longText('content');
            $table->longText('categories')->nullable();
            $table->tinyInteger('is_published')->default(0)->index();
            $table->Integer('sort')->default(0)->index();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable()->index();
            $table->unsignedBigInteger('article_id')->index();
            $table->string('name', 191)->index();
            $table->longText('content');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('articles_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('article_id')->index();
            $table->string('category_name', 191)->unique();
            $table->string('category_slug', 191)->unique();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('newsletter');
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('contents');
        Schema::dropIfExists('features');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('pricings');
        Schema::dropIfExists('stories');
        Schema::dropIfExists('portfolios');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('articles_categories');
    }
}
