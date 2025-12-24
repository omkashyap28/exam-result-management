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
        DB::table('subjects')->insert([
            ['subject_name' => 'Mathematics', 'subject_code' => 'MATH-101'],
            ['subject_name' => 'English', 'subject_code' => 'ENG-102'],
            ['subject_name' => 'Hindi', 'subject_code' => 'HIN-103'],
            ['subject_name' => 'Science', 'subject_code' => 'SCI-104'],
            ['subject_name' => 'Social Science', 'subject_code' => 'SST-105'],
            ['subject_name' => 'Physics', 'subject_code' => 'PHY-201'],
            ['subject_name' => 'Chemistry', 'subject_code' => 'CHE-202'],
            ['subject_name' => 'Biology', 'subject_code' => 'BIO-203'],
            ['subject_name' => 'Computer Science', 'subject_code' => 'CS-204'],
            ['subject_name' => 'Physical Education', 'subject_code' => 'PE-501'],
        ]);

    }
}
