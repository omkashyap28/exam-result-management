<?php

use App\Http\Controllers\RouteController;
use App\Http\Middleware\RouteMiddleware;
use Illuminate\Support\Facades\Route;

Route::controller(RouteController::class)->group(function () {
    Route::get("/", "home_route")->name("home");
    Route::get("/result", "result_route")->name("result");
    Route::get("/student-updates", "updates_route")->name("updates");
    Route::get("/login", "login_route")->name("login")->middleware(RouteMiddleware::class);

    // admin
    Route::prefix("admin")->group(function () {
        Route::get("/", "login_route")->name("admin");
        Route::get("/dashboard", "admin_dashboard_route")->name("dashboard");
        Route::get("/teachers", "teachers_route")->name("teachers");
        Route::get("/student", "students_route")->name("student");
        Route::get("/admission", "admission_route")->name("admission");
    });

    // teachers
    Route::prefix("teacher")->group(function () {
        Route::get("dashboard", "teacher_dashboard_route")->name("dashboard");
        Route::get("marks-form", "teacher_upload_marks_route")->name("marks-form");
    });
});
