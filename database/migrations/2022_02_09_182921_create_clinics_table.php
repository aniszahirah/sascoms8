<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string('issue')->nullable();
            $table->integer('scu_id')->nullable();
            $table->string('received_by')->nullable();
            $table->date('received_date')->nullable();
            $table->string('comment')->nullable();
            $table->string('correctiveaction')->nullable();
            $table->string('followup')->nullable();
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
        Schema::dropIfExists('clinics');
    }
}
