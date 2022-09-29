<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrNoToTblProcurement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_procurement', function (Blueprint $table) {
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_procurement', function (Blueprint $table) {
            $table->dropColumn('pr_no');
            $table->dropColumn('office');
            $table->dropColumn('user_id');
            $table->dropColumn('admin_id');
            $table->dropColumn('action_date')->default(now());
            $table->dropColumn('pr_date')->default(now());
            $table->dropColumn('target_date')->default(now());
            $table->dropColumn('submitted_date')->default(now());
            $table->dropColumn('received_date')->default(now());
            $table->dropColumn('received_by');
            $table->dropColumn('status');
            $table->dropColumn('availability_code');
        });
    }
}
