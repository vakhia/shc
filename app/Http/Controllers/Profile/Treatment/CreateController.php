<?php

namespace App\Http\Controllers\Profile\Treatment;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\MedicalExamination;
use App\Models\Medicine;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke($id)
    {
        $examination = MedicalExamination::where('id',$id)->get();
        $users =  User::where('role',1)->get();
        $hospitals = Hospital::all();
        $doctors = User::where('role',2)->get();
        $medicines = Medicine::all();
        return view('profile.treatment.create',compact('users','doctors','hospitals','medicines','examination'));
    }
}
