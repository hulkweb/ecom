<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float("price")->default(0);
            $table->float("qty")->default(0);
            $table->float("weight")->default(0);
            $table->float("status")->default(1);
            $table->boolean("featured")->default(0);
            $table->text('details')->nullable()->default(null);
            $table->string('tags')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);

            $table->bigInteger("category_id")->unsigned();
            $table->index("category_id");
            $table->foreign("category_id")->references("id")->on("categories")->onDelete(null);

            $table->bigInteger("sub_category_id")->unsigned()->nullable()->default(null);
            $table->index("sub_category_id");
            $table->foreign("sub_category_id")->references("id")->on("sub_categories")->onDelete(null);

            $table->bigInteger("vendor_id")->unsigned()->default(null)->nullable();
            $table->index("vendor_id");
            $table->foreign("vendor_id")->references("id")->on("users")->onDelete(null);

            $table->timestamp("deleted_at")->default(null)->nullable();
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
        Schema::dropIfExists('products');
    }
}
