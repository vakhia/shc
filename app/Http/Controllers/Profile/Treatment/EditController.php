<?php

namespace App\Http\Controllers\Profile\Treatment;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\Medicine;
use App\Models\Status;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Treatment $treatment)
    {
        $users =  User::where('role',1)->get();
        $hospitals = Hospital::all();
        $doctors = User::where('role',2)->get();
        $medicines = Medicine::all();
        $statuses = Status::all();
        return view('profile.treatment.edit',compact('treatment','users','hospitals','doctors','medicines','statuses'));
    }
}
