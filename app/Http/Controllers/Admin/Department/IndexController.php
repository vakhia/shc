<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $departments = Department::paginate(10);
        return view('admin.department.index',compact('departments'));
    }
}
