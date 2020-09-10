<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('website');
            $table->string('ico_date');
            $table->string('ico_price');
            $table->string('triker');
            $table->string('suplay');
            $table->string('whitepaper');
            $table->string('link');
            $table->string('est_value');
            $table->string('platfrom');
            $table->string('end_date');
            $table->longText('description');
            $table->string('images');
            $table->longText('step_1')->nullable();
            $table->longText('step_2')->nullable();
            $table->longText('step_3')->nullable();
            $table->longText('step_4')->nullable();
            $table->longText('step_5')->nullable();
            $table->longText('step_6')->nullable();
            $table->longText('step_7')->nullable();
            $table->longText('step_8')->nullable();
            $table->longText('step_9')->nullable();
            $table->longText('step_10')->nullable();
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('tg')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('kyc')->nullable();
            $table->string('medium')->nullable();
            $table->string('reddit')->nullable();
            $table->string('discord')->nullable();
            $table->string('youtube')->nullable();
            $table->string('status')->nullable()->default(1);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
