<?php

namespace App\Http\Controllers\Profile\Treatment;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Treatment $treatment)
    {
        return view('profile.treatment.show',compact('treatment'));

    }
}
