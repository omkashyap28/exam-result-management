<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function addmission_form_save(Request $request)
    {
        $addmission_form_data = $request->validate([
            "student_id" => "required",
            "student_name" => "required",
            "dob" => "required",
            "gender" => "required",
            "student_email" => "required | email",
            "student_contact" => "required",
            "student_photo" => "nullable | image",
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
                } else {
                    return back()
                        ->withInput()
                        ->withErrors($addmission_form_data);
                }
            } catch (\Throwable $th) {
                throw $th;
            }
        } else {
            return back()
                ->withInput()
                ->withErrors($addmission_form_data);
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
            "student_id" => "required",
        ]);

        if ($res) {
            try {
                $result = DB::table("results")
                    ->join("students", "results.student_id", "=", "students.id")

                    ->join("subjects", "results.subject_id", "=", "subjects.id")

                    ->select("students.student_name", "students.student_id", "students.dob", "students.address", "students.city", "students.guardian_name", "subjects.subject_name", "results.subject_id", "results.marks_obtained", "results.exam_year", "results.grade", "results.status")

                    ->where("students.student_id", $res["student_id"])
                    ->get();
                if ($result)
                    return view("pages.result", ["result" => $result]);
                else
                    return back()->withErrors(["msg" => "No record found"]);
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
