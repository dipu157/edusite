<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Institute\InstituteController;
use App\Http\Controllers\Members\BoardMemberController;
use App\Http\Controllers\Members\TeacherController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('auth.login'); });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // User Registration Route
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    // User Profile Route
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['namespace' => 'Institute', 'middleware' => ['auth']], function () {

    //  Institute Manage Route
    Route::get('/index',[InstituteController::class, 'index'])->name('manageInstitute');
    Route::get('/institutedata', [InstituteController::class, 'getAllInstitute'])->name('institutedata');
    Route::post('/saveInstitute', [InstituteController::class, 'create'])->name('save');
    Route::get('/editInstitute', [InstituteController::class, 'edit'])->name('edit');
    Route::post('/InstituteUpdate', [InstituteController::class, 'update'])->name('update');


});

Route::group(['namespace' => 'Members', 'middleware' => ['auth']], function () {

    //  Members Manage Route
    Route::get('/boardMemberIndex',[BoardMemberController::class, 'index'])->name('boardMembers');
    Route::get('/boardMemberdata', [BoardMemberController::class, 'getAllMemebers'])->name('boardMemberdata');
    Route::post('/saveBMember', [BoardMemberController::class, 'create'])->name('save');
    Route::get('/editMember', [BoardMemberController::class, 'edit'])->name('edit');
    Route::post('/memberUpdate', [BoardMemberController::class, 'update'])->name('update');
    Route::delete('/deleteMember', [BoardMemberController::class, 'delete'])->name('delete');

    // Teacher Manage Route
    Route::get('/teacherIndex',[TeacherController::class, 'index'])->name('teacherIndex');
    Route::get('/teacherData', [TeacherController::class, 'getAllTeacher'])->name('teacherData');
    Route::post('/saveTeacher', [TeacherController::class, 'create'])->name('saveTeacher');
    Route::get('/editTeacher', [TeacherController::class, 'edit'])->name('editTeacher');
    Route::post('/updateTeacher', [TeacherController::class, 'update'])->name('updateTeacher');
    Route::delete('/deleteTeacher', [TeacherController::class, 'delete'])->name('deleteTeacher');


});

require __DIR__.'/auth.php';
