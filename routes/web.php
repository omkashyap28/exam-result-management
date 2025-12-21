<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\RouteController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\RouteMiddleware;
 use App\Http\Middleware\TeacherMiddleware;
use Illuminate\Support\Facades\Route;

Route::controller(RouteController::class)->group(function () {
    Route::get("/", "home_route")->name("home");
    Route::get("/result", "result_route")->name("result");
    Route::get("/student-updates", "updates_route")->name("updates");
    Route::get("/login", "login_route")->name("login")->middleware(RouteMiddleware::class);

    Route::middleware(AuthMiddleware::class)->group(function () {
        // admin
        Route::prefix("admin")->middleware(AdminMiddleware::class)->group(function () {
            Route::get("/dashboard", "admin_dashboard_route")->name("admin_dashboard");
            Route::get("/teachers", "teachers_route")->name("teachers");
            Route::get("/student", "students_route")->name("student");
            Route::get("/admission", "admission_route")->name("admission");
        });

        // teachers
        Route::prefix("teacher")->middleware(TeacherMiddleware::class)->group(function () {
            Route::get("dashboard", "teacher_dashboard_route")->name("teacher_dashboard");
            Route::get("marks-form", "teacher_upload_marks_route")->name("marks_form");
        });
    });
});

Route::any("/logout", [FormController::class, "logout"])->name("logout");

Route::controller(FormController::class)->group(function () {
    Route::post("/login/user", "login_form_route")->name("login_user");
});
