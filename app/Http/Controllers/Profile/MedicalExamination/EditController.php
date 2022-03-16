<?php

namespace App\Http\Controllers\Profile\MedicalExamination;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Hospital;
use App\Models\MedicalExamination;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(MedicalExamination $examination)
    {
        $users = User::all();
        $appointments = Appointment::where('staff_id', auth()->user()->id)->get();
        $hospitals = Hospital::all();
        $doctors = User::where('role', 2)->get();
        return view('profile.examination.edit', compact('examination','users','doctors','hospitals','appointments'));
    }
}
