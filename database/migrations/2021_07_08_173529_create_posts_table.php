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
    public function up() //function to add to database
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); //creates 2 columns
            $table->string('title');
            $table->text('content'); //text is slowest chartype
            //$table->integer('user_id')->index()->nullable(); //index creates fast/easily searchable

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //function to remove from database
    {
        Schema::dropIfExists('posts');
    }
}
