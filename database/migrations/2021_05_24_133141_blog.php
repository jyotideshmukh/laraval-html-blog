<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('category_id');
            //$table->foreignId('user_id');
            $table->foreignIdFor(\App\Models\Category::class,'category_id');
            $table->foreignIdFor(\App\Models\User::class,'user_id');
            $table->string('title');
            $table->text('excerpt')->nullable();
            $table->text('body');
            $table->string('slug')->unique();
            $table->timestamp('published_at')->nullable();
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
        //
    }
}
