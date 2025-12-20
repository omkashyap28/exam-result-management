<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function addmission_form_save(Request $request)
    {
        $addmission_form_data = $request->validate([
            "student_name" => "required",
            "dob" => "required",
            "gender" => "required",
            "email" => "required | email",
            "phone" => "required",
            "guardian_name" => "required",
            "relation" => "required",
            "guardian_email" => "required | email",
            "address" => "required",
            "city" => "required",

        ]);
        $addmission_response = DB::table("")->insert($addmission_form_data);
        if ($addmission_response) {
            return redirect()->route("admin/dashboard");
        } else {
            return redirect()->back()->withErrors($addmission_response);
        }
    }
}
