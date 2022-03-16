<?php

namespace App\Http\Controllers\Profile\MedicalExamination;

use App\Http\Controllers\Controller;
use App\Models\MedicalExamination;

class DeleteController extends Controller
{
    public function __invoke(MedicalExamination $examination)
    {
        $examination->delete();
        toast('Deleted!','success')->position('top-end');
        return redirect()->route('profile.examination.index');
    }
}
