<?php

namespace App\Http\Controllers\Main\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $hospitals =  Hospital::paginate(1);
        return view('main.hospital.index',compact('hospitals'));
    }
}
