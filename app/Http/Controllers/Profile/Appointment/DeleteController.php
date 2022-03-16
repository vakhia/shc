<?php

namespace App\Http\Controllers\Profile\Appointment;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Appointment $appointment)
    {
        $appointment->delete();
        toast('Deleted!','success')->position('top-end');
        return ('profile.appointment.index');
    }
}
