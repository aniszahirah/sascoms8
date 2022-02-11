<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaint_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('complainant_id')->nullable();
            $table->string('complainant_name')->nullable();
            $table->date('complaint_date')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('department')->nullable();
            $table->string('complaint_type')->nullable();
            $table->string('details')->nullable();
            $table->integer('scu_id')->nullable();
            $table->string('received_by')->nullable();
            $table->date('received_date')->nullable();
            $table->string('investigation')->nullable();
            $table->string('immediate_action')->nullable();
            $table->date('immediate_completion')->nullable();
            $table->string('longterm_action')->nullable();
            $table->date('longterm_completion')->nullable();
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
        Schema::dropIfExists('complaint_forms');
    }
}
