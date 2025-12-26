<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
    public function print_result($id)
    {
        if ($id) {
            try {
                $result = DB::table("results")
                    ->join("students", "results.student_id", "=", "students.id")
                    ->join("subjects", "results.subject_id", "=", "subjects.id")
                    ->select("students.student_name", "students.student_id", "students.dob", "students.address", "students.city", "students.guardian_name", "subjects.subject_name", "results.subject_id", "results.marks_obtained", "results.exam_year", "results.grade", "results.status")->where("students.student_id", $id)
                    ->get();
                if ($result)
                    return view('pages.result_print', ["print_data" => $result]);
                else
                    return back()->withErrors(["msg" => "No record found"]);
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        return back();
    }
}
