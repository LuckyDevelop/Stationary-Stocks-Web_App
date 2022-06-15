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
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('supp_id');
            $table->unsignedInteger('qty_id');
            $table->unsignedInteger('type_id');
            $table->string('stock_name', 45);
            $table->integer('qty');
            $table->timestamps();

            $table->foreign('supp_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->foreign('qty_id')->references('id')->on('qtys')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
};
