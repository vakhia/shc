<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class DeleteController extends Controller
{
    public function __invoke(Department $department)
    {
        $department->delete();
        toast('Deleted!','success')->position('top-end');
        return redirect()->route('admin.department.index');
    }
}
