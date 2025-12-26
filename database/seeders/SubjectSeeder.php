<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collection = collect([
            [
                "subject_name" => "Mathematics",
                "subject_code" => "MATH-101",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "subject_name" => "English",
                "subject_code" => "ENG-102",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "subject_name" => "Hindi",
                "subject_code" => "HIN-103",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "subject_name" => "Science",
                "subject_code" => "SCI-104",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "subject_name" => "Social Science",
                "subject_code" => "SST-105",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "subject_name" => "Physics",
                "subject_code" => "PHY-201",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "subject_name" => "Chemistry",
                "subject_code" => "CHE-202",
                "created_at" => now(),
                "updated_at" => now()
            ]
            ,
            [
                "subject_name" => "Biology",
                "subject_code" => "BIO-203",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "subject_name" => "Computer Science",
                "subject_code" => "CS-204",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "subject_name" => "Physical Education",
                "subject_code" => "PE-501",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);

        foreach ($collection as $subject) {
            DB::table("subjects")->insert($subject);
        }
    }
}
