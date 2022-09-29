<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProcurementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_procurement', function (Blueprint $table) {
            $table->id();
            $table->string('pr_no');
            $table->string('office');
            $table->integer('user_id');
            $table->integer('admin_id');
            $table->dateTime('action_date')->default(now());
            $table->dateTime('pr_date')->default(now());
            $table->dateTime('target_date')->default(now());
            $table->dateTime('submitted_date')->default(now());
            $table->dateTime('received_date')->default(now());
            $table->integer('received_by');
            $table->integer('status');
            $table->string('availability_code');

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
        Schema::dropIfExists('tbl_procurement');
    }
}
