<?php

namespace App\Http\Controllers\Admin\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Hospital;
use App\Models\Staff;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Hospital $hospital)
    {

        $staff = Staff::all();
        $departments = Department::all();
        return view('admin.hospital.edit', compact('hospital', 'staff', 'departments'));
    }
}
