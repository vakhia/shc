<?php

namespace App\Http\Controllers\Admin\Medicine;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Medicine\UpdateRequest;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Medicine $medicine)
    {
        $data = $request->validated();
        if(isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('/images',$data['image']);
        }
        $medicine->update($data);
        return view('admin.medicine.show',compact('medicine'));
    }
}
