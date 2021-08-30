<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\Doctors\DoctorsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailClientController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\Schedule\ScheduleController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\SendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors.index');
Route::get('/doctors/vacant', [DoctorsController::class, 'vacant'])->name('doctors.vacant');
Route::get('/doctors/{specialist}', [DoctorsController::class, 'show'])->name('doctors.show');
Route::get('/doctors/{specialist}/schedule', [ScheduleController::class, 'index'])->name('schedule.index');
Route::get('/doctors/{specialist}/schedule/week/get', [ScheduleController::class, 'getWeek'])->name('schedule.week.get');
Route::get('/doctors/{specialist}/book_info', [ScheduleController::class, 'personalInfo'])->name('schedule.info');

Route::resource('books', BookController::class);
Route::get('/book/update/{book}', [BookController::class, 'isOverUpdate'])->name('book.isOverUpdate');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/patient', [PatientController::class, 'index'])->middleware(['auth'])->name('patient.index');
Route::get('/book/{book}/patient/get', [BookController::class, 'getPatient'])->middleware(['auth'])->name('book.patient.get');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/send/{book}',[SendController::class, 'send'])->name('send');
Route::get('/mailclient', [MailClientController::class, 'index'])->name('mail.index');
Route::get('/profile', [ProfileUserController::class, 'index'])->middleware(['auth'])->name('profile.index');
require __DIR__.'/auth.php';

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
