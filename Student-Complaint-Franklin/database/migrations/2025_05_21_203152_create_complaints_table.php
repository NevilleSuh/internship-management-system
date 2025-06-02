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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->string('academic_year');
            $table->longText('description');
            $table->longText('comment')->nullable();
            $table->enum('status', ['pending', 'resolved', 'declined'])->default('pending');
            $table->enum('category', ['ca', 'exam', 'other']);
            $table->foreignId('course_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
