<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned()->unique();
            $table->string('student_name', 50);
            $table->date('dob');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('student_email', 100)->unique();
            $table->string('student_contact', 15)->unique();
            $table->string("student_photo")->nullable();
            $table->string('guardian_name', 50);
            $table->enum('relation', ['Father', 'Grand father', 'Mother', 'Grand mother']);
            $table->string('guardian_email', 100)->unique();
            $table->string('guardian_contact', 15)->unique();
            $table->string('Address');
            $table->string('city', 50);
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
