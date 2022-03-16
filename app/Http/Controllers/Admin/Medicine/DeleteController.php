<?php

namespace App\Http\Controllers\Admin\Medicine;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Medicine $medicine)
    {
        $medicine->delete();
        $medicine->treatments()->sync([]);
        toast('Deleted!','success')->position('top-end');
        return redirect()->route('admin.medicine.index');
    }
}
