<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_forms', function (Blueprint $table) {
            $table->id('case_no')->unique()->nullable();
            $table->string('case_status')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('gender')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('nric')->nullable();
            $table->string('dept')->nullable();
            $table->date('ref_date')->nullable();
            $table->string('doc_expertise')->nullable();
            $table->string('pt_diagnosis')->nullable();
            $table->string('case_type')->nullable();
            $table->string('purpose')->nullable();
            $table->string('details')->nullable();
            $table->integer('doc_id')->nullable();
            $table->date('report_date')->nullable();  
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
        Schema::dropIfExists('referral_forms');
    }
}
