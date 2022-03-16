<?php

namespace App\Http\Controllers\Profile\Information;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Information\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(User $user, UpdateRequest $request)
    {
       $data = $request->validated();
        if(isset($data['photo_path'])){
            $data['photo_path'] = Storage::disk('public')->put('/images',$data['photo_path']);
        }
       $user->update($data);
       return redirect()->route('profile.home.index');

    }
}
