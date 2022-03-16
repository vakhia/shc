<?php

namespace App\Http\Controllers\Profile\MedicalExamination;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke($id)
    {
        $appointment = Appointment::where(['id' =>$id,'status_id' => '4'])->get();
        $users =  User::where('role',1)->get();
        $appointments = Appointment::where('staff_id',auth()->user()->id)->get();
        $hospitals = Hospital::all();
        $doctors = User::where('role',2)->get();
        return view('profile.examination.create',compact('users','doctors','hospitals','appointments','appointment'));
    }
}
