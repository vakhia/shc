<?php

namespace App\Http\Controllers\Main\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Department $department)
    {
        return view('main.department.show',compact('department'));
    }
}
