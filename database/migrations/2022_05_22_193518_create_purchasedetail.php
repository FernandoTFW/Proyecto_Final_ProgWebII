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
        Schema::create('purchasedetail', function (Blueprint $table) {
            $table->foreign('id')->references('id')->on('Purcharse');
            $table->foreign('id')->references('id')->on('Product');
            $table->tinyint("queantity");
            $table->decimal("unitPrice", 10, 2);
            $table->smallint("status");
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
        Schema::dropIfExists('purchasedetail');
    }
};
