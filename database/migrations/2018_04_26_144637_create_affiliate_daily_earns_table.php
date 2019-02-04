<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliateDailyEarnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('affiliate_daily_earns', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('user_id');
        //     $table->string('daily_earns');
        //     $table->string('today_date');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affiliate_daily_earns');
    }
}
