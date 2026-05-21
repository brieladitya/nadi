<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicalRecordController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Patient Lookup
    |--------------------------------------------------------------------------
    */

    Route::get('/patients',
        [PatientController::class, 'index']
    )->name('patients.index');

    /*
    |--------------------------------------------------------------------------
    | All Patients
    |--------------------------------------------------------------------------
    */

    Route::get('/all-patients',
        [PatientController::class, 'allPatients']
    )->name('patients.all');

    /*
    |--------------------------------------------------------------------------
    | Add Patient
    |--------------------------------------------------------------------------
    */

    Route::get('/patients/create',
        [PatientController::class, 'create']
    )->name('patients.create');

    Route::post('/patients',
        [PatientController::class, 'store']
    )->name('patients.store');

    /*
    |--------------------------------------------------------------------------
    | Patient Detail
    |--------------------------------------------------------------------------
    */

    Route::get('/patients/{id}',
        [PatientController::class, 'show']
    )->name('patients.show');

    /*
    |--------------------------------------------------------------------------
    | Delete Patient
    |--------------------------------------------------------------------------
    */

    Route::delete('/patients/{id}',
        [PatientController::class, 'destroy']
    )->name('patients.destroy');

    /*
    |--------------------------------------------------------------------------
    | Medical Records
    |--------------------------------------------------------------------------
    */

    Route::post(
        '/patients/{patient}/medical-records',
        [MedicalRecordController::class, 'store']
    )->name('medical-records.store');

    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */

    Route::get('/profile',
        [ProfileController::class, 'edit']
    )->name('profile.edit');

    Route::patch('/profile',
        [ProfileController::class, 'update']
    )->name('profile.update');

    Route::delete('/profile',
        [ProfileController::class, 'destroy']
    )->name('profile.destroy');
});

require __DIR__.'/auth.php';