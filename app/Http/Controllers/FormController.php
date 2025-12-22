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
            "roll_number" => "required",
            "student_name" => "required",
            "dob" => "required",
            "gender" => "required",
            "student_email" => "required | email",
            "student_contact" => "required",
            "student_photo" => "required",
            "guardian_name" => "required",
            "relation" => "required",
            "guardian_email" => "required | email",
            "guardian_contact" => "required",
            "address" => "required",
            "city" => "required",
        ]);
        if ($addmission_form_data) {
            $addmission_response = DB::table("students")->insert($addmission_form_data);

            try {
                if ($addmission_response) {
                    return redirect()->route("admin_dashboard");
                }
            } catch (\Throwable $th) {
                throw $th;
            }
        } else {
            return back()->withErrors($addmission_form_data);
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
        if ($res) {
            try {
                $ans = DB::table("students")->where("roll_number", $res["roll_number"])->first();
                if ($ans)
                    return view("pages.result", ["user" => $ans]);
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("home");
    }
}
