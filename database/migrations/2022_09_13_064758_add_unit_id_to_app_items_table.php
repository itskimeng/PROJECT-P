<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUnitIdToAppItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('app_items', function (Blueprint $table) {
            // $table->string('serial_no');

            // $table->integer('unit_id');
            // $table->integer('category_id');
            // $table->integer('pmo_id');
            // $table->decimal('app_price',6,2);
            // $table->integer('remarks');
            // $table->dateTime('year')->default(now());

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_items', function (Blueprint $table) {
            // $table->dropColumn('serial_no');
            // $table->dropColumn('unit_id');
            // $table->dropColumn('category_id');
            // $table->dropColumn('pmo_id');
            // $table->dropColumn('app_price');
            // $table->dropColumn('remarks');
            // $table->dropColumn('year');
        });
    }
}
