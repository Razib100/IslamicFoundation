<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entryType');
            $table->string('bookName');
            $table->string('authorName');
            $table->integer('categoryId');
            $table->string('isbnNumber');
            $table->string('edition');
            $table->string('volume');
            $table->string('publisherName');
            $table->string('bookShortDescription');
            $table->string('uploadFile')->nullable();
            $table->tinyInteger('publicationStatus');
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
        Schema::dropIfExists('book_lists');
    }
}
