<?php

namespace App\Http\Controllers\Profile\Information;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        return view('profile.information.edit',compact('user'));
    }
}
