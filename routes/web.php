<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SettingsController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/login',[LoginController::class,'loginView'])->name('getLogin');
Route::post('/login/auth',[LoginController::class,'loginAuthenticate'])->name('postLogin');

Route::group(['middleware'=>['login_auth']],function(){
    Route::get('/home',[DashboardController::class,'dash'])->name('dash');
    
    Route::prefix('/patient')->group(function () {
        Route::get('/add', [PatientController::class,'patientAdd'])->name('patientAdd');
        Route::get('/list/{id}', [PatientController::class,'patientRead'])->name('patientRead');
        Route::post('/create',[PatientController::class,'patientCreate'])->name('patientCreate');
        Route::post('/update/{id}',[PatientController::class,'patientUpdate'])->name('patientUpdate');

        Route::get('/moreinfo/{id}/{mid}', [PatientController::class,'moreInfo'])->name('moreInfo');
        Route::get('/pehe-report/{id}', [PatientController::class,'peheReport'])->name('peheReport');
    });

    Route::prefix('/settings')->group(function () {
        Route::get('/list/patient', [SettingsController::class,'accountRead'])->name('accountRead');
    });
    
    Route::get('/logout',[DashboardController::class,'logout'])->name('logout');
});
