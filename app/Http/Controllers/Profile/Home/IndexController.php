<?php

namespace App\Http\Controllers\Profile\Home;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\MedicalExamination;
use App\Models\Treatment;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        if(auth()->user()->role==1){
            $appointments = Appointment::where('user_id',auth()->user()->id)->where('status_id',4)->get();
            $treatments = Treatment::where('user_id',auth()->user()->id)->where('status_id',2)->get();
            $examinations = MedicalExamination::where('user_id',auth()->user()->id)->get();
            return view('profile.home.index',compact('treatments','appointments','examinations'));
        } elseif(auth()->user()->role==2){
            $appointments = Appointment::where('staff_id',auth()->user()->id)->where('status_id',4)->get();
            $treatments = Treatment::where('user_id',auth()->user()->id)->where('status_id',2)->get();
            return view('profile.home.index',compact('treatments','appointments'));
        }



    }
}
