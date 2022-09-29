<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_items', function (Blueprint $table) {
            $table->id();
            // $table->string('serial_no');
            // $table->string('procurement');
            // $table->string('details');
            // $table->integer('unit_id');
            // $table->integer('category_id');
            // $table->integer('pmo_id');
            // $table->decimal('app_price',6,2);
            // $table->integer('remarks');
            // $table->dateTime('year');
            // $table->text('details');
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
        Schema::dropIfExists('app_items');
    }
}
