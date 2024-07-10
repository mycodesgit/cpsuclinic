<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\FileController;

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

Route::group(['middleware'=>['guest']],function(){
    Route::get('/', function () {
        return view('login');
    });

    Route::get('/login',[LoginController::class,'loginView'])->name('getLogin');
    Route::post('/login/auth',[LoginController::class,'loginAuthenticate'])->name('postLogin');
});

Route::group(['middleware'=>['login_auth']],function(){
    Route::get('/home',[DashboardController::class,'dash'])->name('dash');
    
    Route::prefix('/patient')->group(function () {
        Route::get('/add', [PatientController::class,'patientAdd'])->name('patientAdd');
        Route::get('/list/{id}', [PatientController::class,'patientRead'])->name('patientRead');
        Route::post('/create',[PatientController::class,'patientCreate'])->name('patientCreate');
        Route::post('/update', [PatientController::class, 'patientUpdate'])->name('patientUpdate');
        Route::post('/mh-update', [PatientController::class, 'patientHistory'])->name('patientHistory');

        Route::get('/moreinfo/{id}/{mid}', [PatientController::class,'moreInfo'])->name('moreInfo');
        Route::get('/get-college', [PatientController::class, 'getCollege'])->name('getCollege');
        Route::get('/get-course', [PatientController::class, 'getCourse'])->name('getCourse');

        Route::get('list/delete/{id}', [PatientController::class, 'patientDelete'])->name('patientDelete');
    }); 

    Route::prefix('/reports')->group(function () {
        Route::get('/', [ReportController::class,'reportsSrch'])->name('reportsSrch');
        Route::get('/{id}', [ReportController::class,'reportsRead'])->name('reportsRead');
        Route::get('/pehe-report/{id}', [ReportController::class,'peheReport'])->name('peheReport');
    });

    //Users
    Route::prefix('/users')->group(function () {
        Route::get('/list',[UserController::class,'userRead'])->name('userRead');
        Route::post('/list', [UserController::class, 'userCreate'])->name('userCreate');
        Route::get('list/edit/{id}', [UserController::class, 'userEdit'])->name('userEdit');
        Route::post('list/update', [UserController::class, 'userUpdate'])->name('userUpdate');
        Route::get('list/delete/{id}', [UserController::class, 'userDelete'])->name('userDelete');
    });

    //Files
    Route::prefix('/file')->group(function() {
        Route::get('/{cat}/{id}', [FileController::class, 'fileRead'])->name('fileRead');
        Route::post('/file-create/{id}', [FileController::class, 'fileCreate'])->name('fileCreate');
        Route::get('/deleteFile/{id}', [FileController::class, 'deleteFile'])->name('deleteFile');
    });
    
    Route::prefix('/settings')->group(function () {
        Route::get('/list/patient', [SettingsController::class,'accountRead'])->name('accountRead');
    });
    
    Route::get('/logout',[DashboardController::class,'logout'])->name('logout');
});
