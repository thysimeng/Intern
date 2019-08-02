<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('Productid');
            $table->bigInteger('user_id')->unsigned();
//            $table->unsignedInteger('category_id')->nullable();
            $table->integer('category_id')->unsigned();
            $table->string('ProductSize');
            $table->string('ProductName');
            $table->float('ProductPrice');
            $table->float('ProductWeight');
            $table->string('ProductCartDesc');
            $table->string('ProductShortDesc');
            $table->string('ProductLongDesc');
            $table->string('ProductImage');
            $table->string('ProductImagePhoto');
            $table->float('ProductStock');
            $table->timestamps();
            $table->string('productColor');
            $table->foreign('user_id', 'category_id')->references('id', 'categoryID')->on('users', 'category')->onDelete('cascade');
//            $table->foreign('category_id')->references('categoryID')->on('category')->onDelete('cascade');
//            $table->foreign('category_id')
//                ->references('categoryID')
//                ->on('category')
//                ->onUpdate('cascade')
//                ->onDelete('some action');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
