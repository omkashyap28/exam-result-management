<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\alert;

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

    public function login_form_route(Request $request)
    {
        $credentials = $request->validate([
            "unique_id" => "required",
            "password" => "required",
        ]);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->admin == true)
                return redirect()->route("admin_dashboard");

            if (Auth::user()->admin == false)
                return redirect()->route("teacher_dashboard");
        }
    }
    public function result_form_show(Request $request)
    {
        $res = $request->validate([
            "roll_number" => "required",
            "student_email" => "required | email",
        ]);
        print_r($res);
        $ans = DB::table("students")->where("roll_number", $res["roll_number"])->first();
        if ($ans)
            return redirect()->route("result_route");
        else
            return (
                "<script>alert('Data not founded')</script>".back()
            );
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("home");
    }
}
