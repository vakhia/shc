<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Department\StoreRequest;
use App\Models\Department;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::put('/images',$data['image']);
        Department::firstOrCreate($data);
        return redirect()->route('admin.department.index');
    }
}
