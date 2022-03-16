<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Staff;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Department $department)
    {
        $staff= Staff::all();
        return view('admin.department.edit',compact('department','staff'));
    }
}
