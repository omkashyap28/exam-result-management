<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model"s default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $marks = $this->faker->numberBetween(0, 100);
        if ($marks >= 90) {
            $grade = "A";
            $status = "pass";
        } elseif ($marks >= 80) {
            $grade = "B";
            $status = "pass";
        } elseif ($marks >= 70) {
            $grade = "C";
            $status = "pass";
        } elseif ($marks >= 60) {
            $grade = "D";
            $status = "pass";
        } elseif ($marks >= 50) {
            $grade = "E";
            $status = "pass";
        } else {
            $grade = "F";
            $status = "fail";
        }
        return [
            "student_id" => Student::distinct()->inRandomOrder()->first()->id,
            "subject_id" => Subject::inRandomOrder()->first()->id,
            "marks_obtained" => $marks,
            "grade" => $grade,
            "status" => $status,
            "exam_year" => 2025,
        ];
    }
}
