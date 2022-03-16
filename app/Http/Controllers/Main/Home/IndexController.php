<?php

namespace App\Http\Controllers\Main\Home;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::where('role',1)->count();
        $doctors = User::where('role',2)->count();
        $treatments = Treatment::where('status_id',1)->count();
        $hospitals = Hospital::count();
        return view('main.home.index',compact('users','doctors','treatments','hospitals'));
    }
}
