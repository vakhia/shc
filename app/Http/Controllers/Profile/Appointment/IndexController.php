<?php

namespace App\Http\Controllers\Profile\Appointment;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        if (auth()->user()->role == 2) {
            $appointments = Appointment::where('staff_id', auth()->user()->id)->get();
        } else if (auth()->user()->role == 1) {
            $appointments = Appointment::where('user_id', auth()->user()->id)->get();
        } else {
            $appointments = Appointment::all();
        }
        return view('profile.appointment.index',compact('appointments'));
    }
}
