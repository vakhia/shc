<?php

namespace App\Http\Controllers\Profile\MedicalExamination;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\MedicalExamination\StoreRequest;
use App\Models\MedicalExamination;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        MedicalExamination::firstOrCreate($data);
        return redirect()->route('profile.examination.index');
    }
}
