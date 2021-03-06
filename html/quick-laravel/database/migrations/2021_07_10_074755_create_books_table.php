<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //a.マイグレーション実行でbooksテーブルを作成
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isbn');
            $table->string('title');
            $table->integer('price');
            $table->string('publisher');
            $table->date('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //b.ロールバック時にはbooksテーブルを削除
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
