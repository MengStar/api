<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnapInviteStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snap_invite_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cs_id')->default("");
            $table->string('site_id')->default("");
            $table->string('style_id')->default("");
            $table->boolean('is_mobile')->default(false);
            $table->json('statistic_info')->default("");
            $table->timestamp('statistic_time')->default('1992-01-27 00:00:00');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
