<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\Staff;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Staff $staff)
    {
        $hospitals = Hospital::all();
        return view('admin.staff.edit',compact('staff','hospitals'));
    }
}
