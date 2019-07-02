<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('item_no');
            $table->text('unit');
            $table->text('serial_no');
            $table->text('barcode');
            $table->integer('width');
            $table->integer('rm');
            $table->text('hub_art');
            $table->text('kombi_nr');
            $table->text('maschine');
            $table->text('fremd_hub');
            $table->text('use');
            $table->text('kommission')->nullable();
            $table->text('kunde')->nullable();
            $table->text('we_datum')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('goods');
    }
}
