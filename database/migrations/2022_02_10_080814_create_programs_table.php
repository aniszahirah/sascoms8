<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->integer('programid')->nullable();
            $table->string('name')->nullable();
            $table->date('date')->nullable();
            $table->string('organizer')->nullable();
            $table->string('pic')->nullable();
            $table->string('program_details')->nullable();
            $table->string('attachment')->nullable();
            $table->integer('scu_id')->nullable();
            $table->string('received_by')->nullable();
            $table->date('received_date')->nullable();
            $table->date('briefing_date')->nullable();
            $table->time('briefing_time')->nullable();
            $table->string('briefing_person')->nullable();
            $table->date('advise_date')->nullable();
            $table->time('advise_time')->nullable();
            $table->string('advise_details')->nullable();
            $table->string('during_prog_report')->nullable();
            $table->string('corrective_action')->nullable();
            $table->string('verified_by')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('programs');
    }
}
