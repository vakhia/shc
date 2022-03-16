<?php

namespace App\Http\Controllers\Admin\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Hospital $hospital)
    {
        $hospital->delete();
        $hospital->departments()->sync([]);
        toast('Deleted!','success')->position('top-end');
        return redirect()->route('admin.hospital.index');
    }
}
