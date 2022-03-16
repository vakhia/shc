<?php

namespace App\Http\Controllers\Profile\Appointment;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Appointment $appointment)
    {
        if ($appointment->revised == 1) {
            $appointment->update([
                'revised' => 0
            ]);
        }
        return view('profile.appointment.show', compact('appointment'));
    }
}
