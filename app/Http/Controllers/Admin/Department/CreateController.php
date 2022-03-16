<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $staff = Staff::all();
        return view('admin.department.create',compact('staff'));
    }
}
