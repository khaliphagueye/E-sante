<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LitController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\VoitureController;

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

// Route::get('/', function () {
//     return view('welcome'); 
// });
Route::get('/', [ServiceController::class,'index'])->name('accueil');
Route::get('/services/index', function () {
    return view('/services/index'); 
});

Route::get('/template', function () {
    return view('template'); 
});
Route::get('/services/create', function () {
    return view('services/create'); 
});
Route::get('/patients/create', function () {
    return view('patients/create'); 
});
Route::get('/chambres/create', function () {
    return view('chambres/create'); 
});
Route::get('/voitures/create', function () {
    return view('voitures/create'); 
});
Route::get('lister/{id}', [LitController::class,'lister']);
Route::get('/search', [PatientController::class, 'search']);
Route::resource('services', ServiceController::class);
Route::resource('chambres', ChambreController::class);
Route::resource('lits', LitController::class);
Route::resource('plannings', PlanningsController::class);
Route::resource('voitures', VoitureController::class);
Route::resource('rendezvouses', RendezvousController::class);
Route::resource('patients', PatientController::class);
Route::resource('contacts', ContactController::class);
Route::resource('patient_services', Patient_serviceController::class);
Route::resource('personnels', PersonnelController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
