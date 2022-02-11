<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('document_name')->nullable();
            $table->string('document_file')->nullable();
            $table->string('pic')->nullable();
            $table->date('received_date')->nullable();
            $table->date('review_date')->nullable();
            $table->string('comments')->nullable();
            $table->string('followup')->nullable();
            $table->string('remarks')->nullable();
            $table->string('checked_by')->nullable();
            $table->date('checked_date')->nullable();
            $table->string('verified_by')->nullable();
            $table->date('verified_date')->nullable();
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
        Schema::dropIfExists('document_reviews');
    }
}
