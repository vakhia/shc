<?php

namespace App\Http\Controllers\Profile\Treatment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Treatment\StoreRequest;
use App\Models\Treatment;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if (isset($data['medicine_ids'])) {
            $medicine_ids = $data['medicine_ids'];
            unset($data['medicine_ids']);
        }
        $treatment = Treatment::firstOrCreate($data);
        if(isset($medicine_ids)){
            $treatment->medicines()->attach($medicine_ids);
        }
        return redirect()->route('profile.treatment.index');
    }
}
