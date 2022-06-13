<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_detail', function (Blueprint $table) {
            $table->integer("PurchaseID");
            $table->integer("ProductID");
            $table->foreign('PurchaseID')->references('id')->on('purcharse');
            $table->foreign('ProductID')->references('id')->on('product');
            $table->integer("queantity");
            $table->decimal("unitPrice", 10, 2);
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
        Schema::dropIfExists('purchase_detail');
    }
};
