<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("qty");
            $table->bigInteger("product_id")->unsigned();
            $table->index("product_id");
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
            $table->bigInteger("order_id")->unsigned();
            $table->index("order_id");
            $table->foreign("order_id")->references("id")->on("orders")->onDelete("cascade");

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
        Schema::dropIfExists('order_items');
    }
}
