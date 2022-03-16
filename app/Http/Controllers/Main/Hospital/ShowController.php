<?php

namespace App\Http\Controllers\Main\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Hospital $hospital)
    {
        $staff = $hospital->staff;
        return view('main.hospital.show',compact('hospital','staff'));
    }
}
