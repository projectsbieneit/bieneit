<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->text('name');
            $table->text('item_no');
            $table->text('unit');
            $table->text('menge');
            $table->integer('width');
            $table->integer('rm');
            $table->text('hub_art');
            $table->text('kombi_nr');
            $table->text('maschine');
            $table->text('fremd_hub');
            $table->text('use');
            $table->text('kommission')->nullable();
            $table->text('technisch_notwendig');
            $table->text('bemerkung')->null;
            $table->integer('status');
            $table->integer('user_id');


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
