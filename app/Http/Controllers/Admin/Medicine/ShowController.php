<?php

namespace App\Http\Controllers\Admin\Medicine;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Medicine $medicine)
    {
        return view('admin.medicine.show',compact('medicine'));
    }
}
