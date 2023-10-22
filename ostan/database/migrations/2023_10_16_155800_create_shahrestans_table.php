<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shahrestans', function (Blueprint $table) {
            $table->id();
            $table->string('shahrestan');
            $table->unsignedBigInteger('ostan_id');
            $table->timestamps();

            $table->foreign('ostan_id')->references('id')->on('ostans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shahrestans');
    }
};
