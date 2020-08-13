<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUploadFileToImportantBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('important_books', function (Blueprint $table) {
            $table->string('uploadFile')->after('bookImage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('important_books', function (Blueprint $table) {
            $table->dropColumn('uploadFile');
        });
    }
}
