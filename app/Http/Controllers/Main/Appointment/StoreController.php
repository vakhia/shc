<?php

namespace App\Http\Controllers\Main\Appointment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Appointment\StoreRequest;
use App\Models\Appointment;
use Livewire\Component;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $appointment = Appointment::firstOrCreate($data);
        return redirect()->route('main.home.index')->with('success', 'Your appointment created succesfully!');
    }
}
