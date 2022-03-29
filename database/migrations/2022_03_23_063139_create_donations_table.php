<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('program_id');
            $table->string('transaction_id')->unique();
            $table->string('donor_name')->nullable();
            $table->string('donor_email')->nullable();
            $table->string('donor_number')->nullable();
            $table->string('donation_type')->nullable();
            $table->integer('amount')->default(0);
            $table->string('note')->nullable();
            // $table->integer('target')->default(0);
            // $table->integer('total_amount')->default(0);
            $table->string('status')->default('pending');
            $table->string('snap_token')->nullable();
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
        Schema::dropIfExists('donations');
    }
}