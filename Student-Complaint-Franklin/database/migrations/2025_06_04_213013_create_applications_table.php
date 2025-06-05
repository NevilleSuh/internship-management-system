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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('education');
            $table->string('field')->nullable();
            $table->string('cv')->nullable();
            $table->string('letter')->nullable();
            $table->string('id_card')->nullable();
            $table->string('additional')->nullable();
            $table->string('reason');
            $table->string('skill')->nullable();
            $table->enum('status', ['selected', 'pending', 'declined'])->default('pending');
            $table->longText('message')->nullable();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
