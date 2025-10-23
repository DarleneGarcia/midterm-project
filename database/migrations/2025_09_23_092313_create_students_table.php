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
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('studentNumber', 20)->unique();
        $table->string('lname', 150);
        $table->string('fname', 150);
        $table->string('mi', 5)->nullable();
        $table->string('email', 150)->unique();
        $table->string('contactNumber', 20);
        $table->foreignId('section_id')->constrained('sections')->onDelete('cascade');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
