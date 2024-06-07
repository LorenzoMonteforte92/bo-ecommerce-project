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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ordine_id');
            $table->string('stato_spedizione');
            $table->string('numero');
            $table->date('spedito_il'); 
            $table->date('arriva'); 
            $table->timestamps();

            $table->foreign('id')
            ->references('id')
            ->on('orders')
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
        Schema::dropIfExists('shipments', function (Blueprint $table){

            $table->dropForeign('shipments_orders_id_foreign');
                
            $table->dropColumn('id');
        });

    }
};
