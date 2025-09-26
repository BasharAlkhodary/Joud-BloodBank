<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('donation_requests', function (Blueprint $table) {
        $table->id();
        $table->string('blood_type');
        $table->unsignedBigInteger('blood_bank_id');
        $table->timestamps();

        $table->foreign('blood_bank_id')->references('id')->on('blood_banks')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_requests');
    }
};
