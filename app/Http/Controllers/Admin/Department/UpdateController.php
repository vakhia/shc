<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Department\UpdateRequest;
use App\Models\Department;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Department $department,UpdateRequest $request)
    {
        $data = $request->validated();
        $department->update($data);
        return view('admin.department.show',compact('department'));
    }
}
