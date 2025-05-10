<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MainResultLottery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_result_lottery', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('time_slot');
            $table->string('chetak');
            $table->string('super');
            $table->string('sangam');
            $table->string('mp_delux');
            $table->string('bhagya_rekha');
            $table->string('diamond');
            $table->timestamps();

            $table->unique(['date', 'time_slot']); // prevent duplicates
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_result_lottery', function (Blueprint $table) {

        });
    }
}
