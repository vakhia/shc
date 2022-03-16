<?php

namespace App\Http\Controllers\Main\Locale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UpdateController extends Controller
{
    public function __invoke($locale)
    {
        session(['locale'=> $locale]);
        App::setLocale($locale);
        return  redirect()->back();
    }
}
