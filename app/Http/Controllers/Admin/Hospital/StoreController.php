<?php

namespace App\Http\Controllers\Admin\Hospital;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Hospital\StoreRequest;
use App\Models\Department;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if(isset($data['department_ids'])){
            $department_ids = $data['department_ids'];
            unset($data['department_ids']);
        }
        $data['preview_image_path'] = Storage::disk('public')->put('/images',$data['preview_image_path']);
        $data['main_image_path'] = Storage::disk('public')->put('/images',$data['main_image_path']);
        $hospital = Hospital::firstOrCreate($data);
        if(isset($department_ids)){
            $hospital->departments()->attach($department_ids);
        }
        return redirect()->route('admin.hospital.index');
    }
}
