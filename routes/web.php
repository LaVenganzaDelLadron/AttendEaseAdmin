<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

// Authentication Routes - Guest
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return Inertia::render('Auth/Login');
    })->name('auth.login');
    
    Route::get('/signup', function () {
        return Inertia::render('Auth/Signup');
    })->name('auth.signup');
    
    Route::post('/signin', [AuthController::class, 'signin'])->name('auth.signin');
    Route::post('/signup', [AuthController::class, 'signup'])->name('auth.signup.store');
});

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // Dashboard management pages
    Route::get('/courses', function () {
        return Inertia::render('Dashboard/Management/Courses');
    })->name('dashboard.management.courses');

    Route::get('users', function () {
        return Inertia::render('Dashboard/Management/UserManagement');
    })->name('dashboard.management.users');

    // Dashboard monitoring pages
    Route::get('/attendance', function () {
        return Inertia::render('Dashboard/Monitoring/AttendaceMonitoring');
    })->name('dashboard.monitoring.attendance');

    Route::get('/rooms', function () {
        return Inertia::render('Dashboard/Monitoring/Room');
    })->name('dashboard.monitoring.rooms');

    Route::get('/sessions', function () {
        return Inertia::render('Dashboard/Monitoring/ActiveSession');
    })->name('dashboard.monitoring.sessions');

    // Dashboard academic pages
    Route::get('/subjects', function () {
        return Inertia::render('Dashboard/Academic/Subjects');
    })->name('dashboard.academic.subjects');

    Route::get('/students', function () {
        return Inertia::render('Dashboard/Academic/Students');
    })->name('dashboard.academic.students');

    Route::get('/teachers', function () {
        return Inertia::render('Dashboard/Academic/Teachers');
    })->name('dashboard.academic.teachers');
});