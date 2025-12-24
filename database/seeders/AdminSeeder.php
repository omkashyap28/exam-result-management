<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collection = collect([
            [
                "unique_id" => 2000,
                "name" => "Hariom Kashyap",
                "father_name" => "Gajraj",
                "email" => env("ADMIN_EMAIL"),
                "contact" => env("ADMIN_CONTACT"),
                "admin" => true,
                "address" => "Delhi, India",
                "password" => Hash::make(env("ADMIN_PASSWORD")),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "unique_id" => 2001,
                "name" => "Narayan Kashyap",
                "father_name" => "Gajraj Kashyap",
                "email" => "narayan.kashyap@example.com",
                "contact" => "9876543210",
                "admin" => false,
                "address" => "Delhi, India",
                "password" => Hash::make("password"),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "unique_id" => 2002,
                "name" => "Amit Sharma",
                "father_name" => "Ramesh Sharma",
                "email" => "amit.sharma@example.com",
                "contact" => "9876543211",
                "admin" => false,
                "address" => "Jaipur, Rajasthan",
                "password" => Hash::make("password"),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "unique_id" => 2003,
                "name" => "Rahul Verma",
                "father_name" => "Suresh Verma",
                "email" => "rahul.verma@example.com",
                "contact" => "9876543212",
                "admin" => false,
                "address" => "Lucknow, Uttar Pradesh",
                "password" => Hash::make("password"),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "unique_id" => 2004,
                "name" => "Vikas Gupta",
                "father_name" => "Mahesh Gupta",
                "email" => "vikas.gupta@example.com",
                "contact" => "9876543213",
                "admin" => false,
                "address" => "Kanpur, Uttar Pradesh",
                "password" => Hash::make("password"),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "unique_id" => 2005,
                "name" => "Rohit Singh",
                "father_name" => "Rajendra Singh",
                "email" => "rohit.singh@example.com",
                "contact" => "9876543214",
                "admin" => false,
                "address" => "Patna, Bihar",
                "password" => Hash::make("password"),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "unique_id" => 2006,
                "name" => "Ankit Mishra",
                "father_name" => "Dinesh Mishra",
                "email" => "ankit.mishra@example.com",
                "contact" => "9876543215",
                "admin" => false,
                "address" => "Prayagraj, Uttar Pradesh",
                "password" => Hash::make("password"),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "unique_id" => 2007,
                "name" => "Sandeep Yadav",
                "father_name" => "Ram Yadav",
                "email" => "sandeep.yadav@example.com",
                "contact" => "9876543216",
                "admin" => false,
                "address" => "Gurgaon, Haryana",
                "password" => Hash::make("password"),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "unique_id" => 2008,
                "name" => "Manoj Kumar",
                "father_name" => "Shiv Kumar",
                "email" => "manoj.kumar@example.com",
                "contact" => "9876543217",
                "admin" => false,
                "address" => "Varanasi, Uttar Pradesh",
                "password" => Hash::make("password"),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "unique_id" => 2009,
                "name" => "Deepak Patel",
                "father_name" => "Kailash Patel",
                "email" => "deepak.patel@example.com",
                "contact" => "9876543218",
                "admin" => false,
                "address" => "Ahmedabad, Gujarat",
                "password" => Hash::make("password"),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "unique_id" => 2010,
                "name" => "Pankaj Jain",
                "father_name" => "Sunil Jain",
                "email" => "pankaj.jain@example.com",
                "contact" => "9876543219",
                "admin" => false,
                "address" => "Indore, Madhya Pradesh",
                "password" => Hash::make("password"),
                "created_at" => now(),
                "updated_at" => now()
            ],

        ]);
        foreach ($collection as $collect) {
            DB::table("users")->insert($collect);
        }
    }
}
