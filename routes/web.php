<?php

use Illuminate\Support\Facades\Route;
//Dashboard
use App\Http\Controllers\Dashboard\Dashboard;
//Auth
use App\Http\Controllers\Auth\LoginController;
//User Management
use App\Http\Controllers\Uses\UsesController;
use App\Http\Controllers\Uses\StudentController;
use App\Http\Controllers\Uses\ProfessorController;
use App\Http\Controllers\Uses\StaffController;
use App\Http\Controllers\Uses\AlumniController;
use App\Http\Controllers\Uses\AdminController;
//Calendar Management
use App\Http\Controllers\Calendar\TimetableController;
use App\Http\Controllers\Calendar\ActivityController;
use App\Http\Controllers\GroupChat\GroupChatController;
//Basic data management
use App\Http\Controllers\Faculty\FacultyController;
use App\Http\Controllers\Prefix\PrefixController;
use App\Http\Controllers\Major\MajorController;
use App\Http\Controllers\Subject\SubjectController;
use App\Http\Controllers\Room\RoomController;
//Content management
use App\Http\Controllers\Content\ContentController;
use App\Http\Controllers\Content\CategoryController;
//BugreporController
use App\Http\Controllers\Bugreport\BugreporController;


use App\Http\Controllers\Firebase\FirebaseStorageController;


Route::get('/upload', [FirebaseStorageController::class, 'index'])->name('index');
Route::post('/upload', [FirebaseStorageController::class, 'upload']);
Route::get('/display/{path}', [FirebaseStorageController::class, 'display']);



//Auth
    Route::get('/', function () {
        return view('index');
    })->name('login');

    Route::get('login', [LoginController::class, 'index'])->name('login');

    Route::post('login', [LoginController::class, 'login'])->name('login');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard-index');

//User Management
    Route::middleware(['auth', 'checkUsersManagement'])->group(function () {
        Route::resource('user', UsesController::class)->names('user');

    });

    Route::middleware(['auth', 'checkStudentManagement'])->group(function () {

        Route::resource('student', StudentController::class)->names('student');

    });

    Route::middleware(['auth', 'checkProfessorManagement'])->group(function () {

        Route::resource('professor', ProfessorController::class)->names('professor');

    });

    Route::middleware(['auth', 'checkStaffManagement'])->group(function () {

        Route::resource('staff', StaffController::class)->names('staff');

    });

    Route::middleware(['auth', 'checkAlumniManagement'])->group(function () {

        Route::resource('alumn', AlumniController::class)->names('alumn');

    });


    Route::middleware(['auth', 'checkAdminManagement'])->group(function () {

        Route::resource('admin', AdminController::class)->names('admin');

    });

//Calendar Management
    Route::middleware(['auth', 'checkActivityManagement'])->group(function () {

        Route::resource('activity', ActivityController::class)->names('activity');

    });

    Route::middleware(['auth', 'checkTimetableManagement'])->group(function () {

        Route::resource('calendar', TimetableController::class)->names('calendar');

    });

    Route::middleware(['auth', 'checkGroupChatManagement'])->group(function () {

        Route::resource('groupchat', GroupChatController::class)->names('groupchat');

    });
//Content management
    Route::middleware(['auth', 'checkContentManagement'])->group(function () {

        Route::resource('content', ContentController::class)->names('content');

    });

    Route::delete('content/{id}', [ContentController::class, 'destroy'])->name('content.destroy');

    Route::resource('category', CategoryController::class)->names('category');


//Basic data management
    Route::middleware(['auth', 'checkPrefixManagement'])->group(function () {

        Route::resource('prefix', PrefixController::class)->names('prefix');

    });

    Route::middleware(['auth', 'checkFacultyManagement'])->group(function () {

        Route::resource('faculty', FacultyController::class)->names('faculty');
        Route::resource('major', MajorController::class)->names('major');

    });

    Route::middleware(['auth', 'checkSubjectManagement'])->group(function () {

        Route::resource('subject', SubjectController::class)->names('subject');

    });

    Route::middleware(['auth', 'checkRoomManagement'])->group(function () {

        Route::resource('room', RoomController::class)->names('room');
        Route::resource('bugrepor', BugreporController::class)->names('bugrepor');


    });
});

