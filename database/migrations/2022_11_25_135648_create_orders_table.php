<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("order_id");
            $table->string("payment_id")->nullable()->default(null);
            $table->string("status")->default("pending");
            $table->float("amount")->unsigned();
            
            $table->bigInteger("user_id")->unsigned();
            $table->index("user_id");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");

            $table->bigInteger("billing_id")->unsigned();
            $table->index("billing_id");
            $table->foreign("billing_id")->references("id")->on("billings")->onDelete(null);


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
        Schema::dropIfExists('orders');
    }
}
