<?php

namespace App\Http\Controllers\Profile\Treatment;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        if (auth()->user()->role == 2) {
            $treatments = Treatment::where('staff_id', auth()->user()->id)->get();
        } else if (auth()->user()->role == 1) {
            $treatments = Treatment::where('user_id', auth()->user()->id)->get();
        } else {
            $treatments = Treatment::all();
        }
        return view('profile.treatment.index', compact('treatments'));
    }
}
