<?php

namespace App\Http\Controllers\Admin\Medicine;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $medicines = Medicine::paginate(10);
        return view('admin.medicine.index',compact('medicines'));
    }
}
