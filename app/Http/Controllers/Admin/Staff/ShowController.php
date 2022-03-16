<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Staff $staff)
    {
        return view('admin.staff.show',compact('staff'));
    }
}
