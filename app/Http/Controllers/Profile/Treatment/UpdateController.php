<?php

namespace App\Http\Controllers\Profile\Treatment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Treatment\UpdateRequest;
use App\Models\Treatment;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Treatment $treatment)
    {
        $data = $request->validated();
        if (isset($data['medicine_ids'])) {
            $medicine_ids = $data['medicine_ids'];
            unset($data['medicine_ids']);
        }
        $treatment->update($data);
        if(isset($medicine_ids)){
            $treatment->medicines()->attach($medicine_ids);
        }
        return view('profile.treatment.show',compact('treatment'));
    }
}
