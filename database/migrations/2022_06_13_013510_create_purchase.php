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
        Schema::create('purchase', function (Blueprint $table) {
            table->id();
            $table->datetime("date");
            $table->decimal("total", 18, 2);
            $table->integer("EmployeeID");
            $table->integer("ClientID");
            $table->foreign('EmployeeID')->references('id')->on('employee');
            $table->foreign('ClientID')->references('id')->on('client');
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
        Schema::dropIfExists('purchase');
    }
};
