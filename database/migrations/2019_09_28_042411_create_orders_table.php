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
            $table->bigIncrements('id');
            $table->integer('orderer_id');
            $table->integer('contractor_id')->unsigned()->nullable();
            $table->integer('apple');
            $table->integer('onion');
            $table->integer('rice');
            $table->integer('tomato');
            $table->integer('beaf');
            $table->integer('fish');
            $table->integer('status'); // 1 -> 受注ずみ / 2-> 宅配完了
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
