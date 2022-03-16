<?php

namespace App\Http\Controllers\Profile\MedicalExamination;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\MedicalExamination\UpdateRequest;
use App\Models\MedicalExamination;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,MedicalExamination $examination)
    {
        $data = $request->validated();
        $examination->update($data);
        return redirect()->route('profile.examination.index');
    }
}
