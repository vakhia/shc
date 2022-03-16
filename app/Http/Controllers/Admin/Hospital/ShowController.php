<?php

namespace App\Http\Controllers\Admin\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Hospital $hospital)
    {
        return view('admin.hospital.show',compact('hospital'));
    }
}
