<?php

namespace App\Http\Controllers\Profile\MedicalExamination;

use App\Http\Controllers\Controller;
use App\Models\MedicalExamination;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(MedicalExamination $examination)
    {
        return view('profile.examination.show',compact('examination'));
    }
}
