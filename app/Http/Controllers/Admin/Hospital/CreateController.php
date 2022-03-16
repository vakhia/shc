<?php

namespace App\Http\Controllers\Admin\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Staff;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $staff = Staff::all();
        $departments = Department::all();
        return view('admin.hospital.create',compact('departments','staff'));
    }
}
