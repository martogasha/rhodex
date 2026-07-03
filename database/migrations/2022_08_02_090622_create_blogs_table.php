<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('detail');
            $table->string('link')->nullable();
            $table->string('linkName')->nullable();
            $table->longText('detailOne')->nullable();
            $table->string('linkNameOne')->nullable();
            $table->string('linkOne')->nullable();
            $table->longText('quote')->nullable();
            $table->string('quoteAuthor')->nullable();
            $table->longText('detailTwo')->nullable();
            $table->string('linkNameTwo')->nullable();
            $table->string('linkTwo')->nullable();
            $table->string('detailThree')->nullable();
            $table->mediumText('image')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
