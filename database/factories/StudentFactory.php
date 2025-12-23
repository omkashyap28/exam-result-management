<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake("en_IN");
        return [
            "roll_number" => $faker->numerify("########"),
            "student_name" => $faker->name(),
            "dob" => $faker->date("Y-m-d", "2007"),
            "gender" => $faker->randomElement(["Male", "Female", "Other"]),
            "student_email" => $faker->unique()->safeEmail(),
            "student_contact" => $faker->unique()->numberBetween(9000000000, 9999999999),
            "student_photo" => $faker->imageUrl(640, 480, "students", true),
            "guardian_name" => $faker->name(),
            "relation" => $faker->randomElement(["father", "grand_father", "mother", "grand_mother"]),
            "guardian_email" => $faker->unique()->safeEmail(),
            "guardian_contact" => $faker->unique()->numberBetween(9000000000, 9999999999),
            "address" => $faker->address(),
            "city" => $faker->city(),
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}
