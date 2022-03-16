<?php

namespace App\Http\Controllers\Main\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('main.service.index');
    }
}
