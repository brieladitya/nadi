<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicalRecordController extends Controller
{
    public function store(Request $request, $patientId)
    {
        MedicalRecord::create([
            'patient_id' => $patientId,

            'hospital_id' => Auth::user()->hospital_id,

            'diagnosis' => $request->diagnosis,
            'treatment' => $request->treatment,
            'notes' => $request->notes,
            'visit_date' => $request->visit_date,
        ]);

        return back();
    }
}