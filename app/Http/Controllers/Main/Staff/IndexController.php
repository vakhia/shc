<?php

namespace App\Http\Controllers\Main\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $staff = Staff::paginate(1);
        return view('main.staff.index', compact('staff'));
    }
}
