<?php

namespace App\Http\Controllers\Admin\Hospital;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Hospital\UpdateRequest;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Hospital $hospital)
    {
        $data = $request->validated();
        if(isset($data['department_ids'])){
            $department_ids = $data['department_ids'];
            unset($data['department_ids']);
        }
        if(isset($data['preview_image_path'])){
            $data['preview_image_path'] = Storage::disk('public')->put('/images',$data['preview_image_path']);
        }
        if(isset($data['main_image_path'])){
            $data['main_image_path'] = Storage::disk('public')->put('/images',$data['main_image_path']);
        }
        $hospital->update($data);
        if(isset($department_ids)){
            $hospital->departments()->sync($department_ids);
        }
        return redirect()->route('admin.hospital.show',$hospital->id);
    }
}
