<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\Passwordmail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request,User $user)
    {
        $data = $request->validated();
        $generated_password = Str::random(8);
        $data['password'] =  Hash::make($generated_password);
        $user = User::firstOrCreate(['email'=>$data['email']],$data);

        Mail::to($data['email'])->send(new Passwordmail($generated_password));
        event(new Registered($user));

        return redirect()->route('admin.user.index');
    }
}
