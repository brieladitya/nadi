<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Patient Lookup
     */
    public function index(Request $request)
    {
        $patient = null;

        if ($request->search) {

            $patient = Patient::where(
                'nik',
                $request->search
            )->first();
        }

        return view('patients.index', compact('patient'));
    }

    /**
     * Show add patient form
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store new patient
     */
    public function store(Request $request)
{
    $existingPatient = Patient::where(
        'nik',
        $request->nik
    )->first();

    /*
    |--------------------------------------------------------------------------
    | If Patient Already Exists
    |--------------------------------------------------------------------------
    */

    if ($existingPatient) {

        return redirect()
            ->route(
                'patients.show',
                $existingPatient->id
            );
    }

    /*
    |--------------------------------------------------------------------------
    | Create New Patient
    |--------------------------------------------------------------------------
    */

    $patient = Patient::create([
        'nik' => $request->nik,
        'name' => $request->name,
        'phone' => $request->phone,
    ]);

    /*
    |--------------------------------------------------------------------------
    | Redirect to Patient Detail
    |--------------------------------------------------------------------------
    */

    return redirect()
        ->route(
            'patients.show',
            $patient->id
        );
}

    /**
     * Show patient detail
     */
    public function show(string $id)
    {
        $patient = Patient::with(
            'medicalRecords.hospital'
        )->findOrFail($id);

        return view('patients.show', compact('patient'));
    }

    /**
     * All patients
     */
    public function allPatients()
    {
        $patients = Patient::latest()
            ->paginate(10);

        return view('patients.all', compact('patients'));
    }

    /**
     * Delete patient
     */
    public function destroy(string $id)
    {
        Patient::findOrFail($id)->delete();

        return redirect()
            ->route('patients.all');
    }
}