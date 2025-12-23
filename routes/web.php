<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\RouteController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\ResultMiddleware;
use App\Http\Middleware\RouteMiddleware;
use App\Http\Middleware\TeacherMiddleware;
use Illuminate\Support\Facades\Route;

Route::controller(RouteController::class)->group(function () {
    Route::get("/", "home_route")->name("home");
    Route::get("/result", "result_from_route")->name("result");
    Route::get("/results/student/result", "result_route")->name("result_route");
    Route::get("/student-updates", "updates_route")->name("updates");
    Route::get("/login", "login_route")->name("login")->middleware(RouteMiddleware::class);

    Route::get("/teacher", "login_route");

    Route::middleware(AuthMiddleware::class)->group(function () {
        // admin
        Route::prefix("admin")->middleware(AdminMiddleware::class)->group(function () {
            Route::get("/", "login_route");
            Route::get("/dashboard", "admin_dashboard_route")->name("admin_dashboard");
            Route::get("/teachers", "teachers_route")->name("teachers");
            Route::get("/student", "students_route")->name("student");
            Route::get("/admission", "admission_route")->name("admission");
        });

        // teachers
        Route::prefix("teacher")->middleware(TeacherMiddleware::class)->group(function () {
            Route::get("/", "login_route");
            Route::get("dashboard", "teacher_dashboard_route")->name("teacher_dashboard");
            Route::get("marks-form", "teacher_upload_marks_route")->name("marks_form");
        });
    });
});


Route::controller(FormController::class)->group(function () {
    Route::any("/result/student", "result_form_show")->name("result_show");
    Route::post("/login/user", "login_form_route")->name("login_user");
    // logout
    Route::any("/logout", "logout")->name("logout");

    // admmission
    Route::any('/addmission-save', "addmission_form_save")->name("addmission_save");
});

Route::any("/result/print/{id}", [PrintController::class, "print_result"])->name("print_result")->middleware(ResultMiddleware::class);
