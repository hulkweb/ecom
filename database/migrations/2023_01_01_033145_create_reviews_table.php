<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->float('rating')->nullable()->default(0);
            $table->string("title")->nullable()->default(null);
            $table->text("details")->nullable()->default(null);
            $table->string("media")->nullable()->default(null);
            $table->string("type")->nullable()->default(null);
            $table->integer("helpful")->nullable()->default(0);
            $table->integer("no_helpful")->nullable()->default(0);

            $table->bigInteger("product_id")->unsigned();
            $table->index("product_id");
            $table->foreign("product_id")->references("id")->on("products")->onDelete(null);
           
            $table->bigInteger("order_id")->unsigned();
            $table->index("order_id");
            $table->foreign("order_id")->references("id")->on("orders")->onDelete(null);
          
            $table->bigInteger("user_id")->unsigned();
            $table->index("user_id");
            $table->foreign("user_id")->references("id")->on("users")->onDelete(null);
          

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
