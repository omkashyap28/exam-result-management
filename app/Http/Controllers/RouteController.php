<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    public function home_route()
    {
        return view("pages.home");
    }
    public function result_route()
    {
        return view("forms.result_form");
    }
    public function updates_route()
    {
        return view("pages.updates");
    }
    public function login_route()
    {
        return vieW("forms.login_form");
    }

    // admin
    public function admin_dashboard_route()
    {
        return view("dashboards.admin");
    }
    public function teachers_route()
    {
        $all_users = DB::table("users")->get();
        return view("pages.teachers", ["users" => $all_users]);
    }
    public function students_route()
    {
        return view("pages.students");
    }
    public function admission_route()
    {
        return view("forms.addmission_form");
    }

    // teachers
    public function teacher_dashboard_route()
    {
        return view("dashboards.teacher");
    }
    public function teacher_upload_marks_route(){
        return view("forms.marks_form");
    }
}
