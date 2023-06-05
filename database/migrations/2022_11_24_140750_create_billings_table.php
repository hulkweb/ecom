<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string("name")->default(null)->nullable();
            $table->bigInteger("phone")->nullable()->default(null);
            $table->bigInteger("phone2")->nullable()->default(null);
            $table->string("email")->nullable()->default(null);
            $table->string("address")->default(null)->nullable();
            $table->string("city")->default(null)->nullable();
            $table->integer("pincode")->default(null)->nullable();

            $table->date("date_of_delivery")->default(null)->nullable();
            $table->time("time_of_delivery")->default(null)->nullable();

            $table->bigInteger('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");

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
        Schema::dropIfExists('billings');
    }
}
