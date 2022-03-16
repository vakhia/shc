<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $staff = Staff::paginate(10);
        return view('admin.staff.index',compact('staff'));
    }
}
