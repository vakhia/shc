<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Staff\UpdateRequest;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(Staff $staff, UpdateRequest $request)
    {
        $data = $request->validated();
        if (isset($data['hospital_ids'])) {
            $hospital_ids = $data['hospital_ids'];
            unset($data['hospital_ids']);
        }
        if(isset($data['avatar_path'])){
            $data['avatar_path'] = Storage::disk('public')->put('/images',$data['avatar_path']);
        }
        unset($data['staff_id']);
        $staff->update($data);
        if(isset($hospital_ids)){
            $staff->hospitals()->sync($hospital_ids);
        }
        return view('admin.staff.show', compact('staff'));
    }
}
