<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSloReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slo_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('slo_id')->nullable();
            $table->string('slo_name')->nullable();
            $table->string('dept')->nullable();
            $table->date('report_date')->nullable();
            $table->string('report_details')->nullable();
            $table->string('slo_action')->nullable();
            $table->integer('scu_id')->nullable();
            $table->string('scu_comments')->nullable();
            $table->string('followup')->nullable();
            $table->date('review_date')->nullable();
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
        Schema::dropIfExists('slo_reports');
    }
}
