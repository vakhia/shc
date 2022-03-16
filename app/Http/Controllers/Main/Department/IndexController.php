<?php

namespace App\Http\Controllers\Main\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $departments = Department::inRandomOrder()->limit(6)->get();
        return view('main.department.index', compact('departments'));
    }
}
