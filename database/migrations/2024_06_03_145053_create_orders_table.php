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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('totali');
            $table->string('stato');
            $table->string('metodo_pagamento');
            $table->string('stato_pagamento');
            $table->timestamps();

            $table->foreign('id')
            ->references('id')
            ->on('clients')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders', function (Blueprint $table){

            $table->dropForeign('orders_user_id_foreign');
            
            $table->dropColumn('user_id');
        });
    }
};
