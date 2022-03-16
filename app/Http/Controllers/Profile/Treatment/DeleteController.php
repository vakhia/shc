<?php

namespace App\Http\Controllers\Profile\Treatment;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Treatment $treatment)
    {
        $treatment->delete();
        $treatment->medicines()->sync([]);
        toast('Deleted!','success')->position('top-end');
        return redirect()->route('profile.treatment.index');
    }
}
