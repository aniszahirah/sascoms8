<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_monitorings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('organizer');
            $table->string('pic');
            $table->string('scu_representative');
            $table->string('program_details');
            $table->string('briefing_before_prog');
            $table->date('briefing_date')->nullable();
            $table->time('briefing_time')->nullable();
            $table->string('briefing_person')->nullable();
            $table->string('advice_before_prog');
            $table->date('advise_date')->nullable();
            $table->time('advise_time')->nullable();
            $table->string('advise_details')->nullable();
            $table->string('officer_during_program');
            $table->string('during_prog_report');
            $table->string('corrective_action')->nullable();
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
        Schema::dropIfExists('program_monitorings');
    }
}
