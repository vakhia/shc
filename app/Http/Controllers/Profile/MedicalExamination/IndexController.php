<?php

namespace App\Http\Controllers\Profile\MedicalExamination;

use App\Http\Controllers\Controller;
use App\Models\MedicalExamination;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        if (auth()->user()->role == 2) {
            $medical_examinations = MedicalExamination::where('staff_id', auth()->user()->id)->get();
        } else if (auth()->user()->role == 1) {
            $medical_examinations = MedicalExamination::where('user_id', auth()->user()->id)->get();
        } else {
            $medical_examinations = MedicalExamination::all();
        }
        return view('profile.examination.index',compact('medical_examinations'));
    }
}
