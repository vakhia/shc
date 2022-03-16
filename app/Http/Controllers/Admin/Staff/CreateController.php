<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $hospitals = Hospital::all();
        return view('admin.staff.create',compact('hospitals'));
    }
}
