<?php

namespace App\Http\Controllers\Profile\Appointment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Appointment\UpdateRequest;
use App\Models\Appointment;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Appointment $appointment)
    {
        $data = $request->validated();
        if(isset($data['approved']))
        {
            if($data['approved']==2) {
                $appointment->update([
                    'done' => 0,
                    'status_id'=>'1'
                ]);
                return redirect()->back();
            } elseif ($data['approved'] == 1) {
                $appointment->update([
                    'status_id' => 4
                ]);
                return redirect()->back();
            }
        }
        $appointment->update($data);
        return view('profile.appointment.show',compact('appointment'));



    }
}
