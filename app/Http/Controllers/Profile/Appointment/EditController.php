<?php

namespace App\Http\Controllers\Profile\Appointment;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Appointment $appointment)
    {
        return view('profile.appointment.edit',compact('appointment'));
    }
}
