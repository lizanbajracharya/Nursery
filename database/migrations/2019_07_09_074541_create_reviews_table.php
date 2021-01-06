<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Reviewdetails');
            $table->integer('Userid')->unsigned();
            $table->foreign('Userid')->references('id')->on('users')
            ->onDelete('cascade');
            $table->Biginteger('Flowerid')->unsigned();
            $table->foreign('Flowerid')->references('id')->on('flowers')
            ->onDelete('cascade');
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
        Schema::dropIfExists('reviews');
    }
}
