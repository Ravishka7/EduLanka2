<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Livewire\EventCalendar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/admin_home', [AdminController::class, 'admin_home']);

Route::get('/view_section',[AdminController::class, 'view_section']);
Route::get('/view_class',[AdminController::class, 'view_class']);
Route::post('/add_section',[AdminController::class, 'add_section']);
Route::post('/add_class',[AdminController::class, 'add_class']);
Route::get('view_subject',[AdminController::class, 'view_subject']);
Route::get('/view_student',[AdminController::class, 'view_student']);
Route::get('/view_teacher',[AdminController::class, 'view_teacher']);
Route::post('/add_subject',[AdminController::class, 'add_subject']);
Route::get('/view_subject',[AdminController::class, 'view_subject']);
Route::get('delete_subject/{id}',[AdminController::class, 'delete_subject']);
Route::post('/add_student',[AdminController::class, 'add_student']);
Route::post('/add_teacher',[AdminController::class, 'add_teacher']);
Route::get('/show_student',[AdminController::class, 'show_student']);
Route::get('/show_teacher',[AdminController::class, 'show_teacher']);
Route::get('/delete_student/{id}',[AdminController::class, 'delete_student']);
Route::get('/delete_teacher/{id}',[AdminController::class, 'delete_teacher']);
Route::get('/edit_student/{id}',[AdminController::class, 'edit_student']);
Route::get('/edit_teacher/{id}',[AdminController::class, 'edit_teacher']);
Route::post('/edit_student_confirm/{id}',[AdminController::class, 'edit_student_confirm']);
Route::post('/edit_teacher_confirm/{id}',[AdminController::class, 'edit_teacher_confirm']);
Route::post('/add_event',[AdminController::class, 'add_event']);
Route::get('/delete_event/{id}',[AdminController::class, 'delete_event']);



Route::get('/study_materials',[HomeController::class, 'study_materials']);
Route::post('/upload_lesson',[HomeController::class, 'upload_lesson']);
Route::get('/uploaded_materials',[HomeController::class, 'uploaded_materials']);
Route::get('download/{filename}', [HomeController::class, 'download'])->name('download');
Route::get('/edit_uploaded_materials/{id}',[HomeController::class, 'edit_uploaded_materials']);
Route::get('/delete_uploaded_materials/{id}',[HomeController::class, 'delete_uploaded_materials']);
Route::post('/edit_uploaded_materials_confirm/{id}',[HomeController::class, 'edit_uploaded_materials_confirm']);
Route::get('student_work_upload',[HomeController::class, 'student_work_upload']);
Route::get('/teacher_home',[HomeController::class, 'teacher_home']);
Route::middleware(['auth'])->group(function () {
    Route::get('/event-calendar', [EventCalendar::class, 'render'])->name('event.calendar');
});

Route::get('/view_calendar', [HomeController::class, 'view_calendar']);



Route::get('student_study_materials',[HomeController::class, 'student_study_materials']);
Route::get('student_view_subject',[HomeController::class, 'student_view_subject']);
Route::get('show_study_materials',[HomeController::class, 'show_study_materials']);
Route::get('student_upload_work',[HomeController::class, 'student_upload_work']);
Route::post('/add_work',[HomeController::class, 'add_work']);
Route::get('/student_home',[HomeController::class, 'student_home']);
Route::get('view_news',[HomeController::class, 'view_news']);