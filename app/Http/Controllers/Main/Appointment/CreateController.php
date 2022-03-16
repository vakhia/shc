<?php

namespace App\Http\Controllers\Main\Appointment;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $hospitals = Hospital::all();
        $users = User::where('role', 2)->get();
        return view('main.appointment.create', compact('hospitals', 'users'));
    }
}
