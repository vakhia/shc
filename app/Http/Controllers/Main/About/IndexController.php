<?php

namespace App\Http\Controllers\Main\About;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $staff = Staff::inRandomOrder()->limit(4)->get();
        return view('main.about.index',compact('staff'));
    }
}
