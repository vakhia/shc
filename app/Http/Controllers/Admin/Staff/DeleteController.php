<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Staff $staff)
    {
        $staff->delete();
        $staff->hospitals()->sync([]);
        toast('Deleted!','success')->position('top-end');
        return redirect()->route('admin.staff.index');
    }
}
