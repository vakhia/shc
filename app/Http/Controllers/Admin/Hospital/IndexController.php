<?php

namespace App\Http\Controllers\Admin\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $hospitals = Hospital::paginate(10);
        return view('admin.hospital.index', compact('hospitals'));
    }
}
