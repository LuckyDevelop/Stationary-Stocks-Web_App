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
        Schema::create('buyings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('supp_id');
            $table->unsignedInteger('stock_id');
            $table->date('transaction_date');
            $table->integer('qty');
            $table->integer('price');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('supp_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyings');
    }
};
