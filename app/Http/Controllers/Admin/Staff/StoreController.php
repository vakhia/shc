<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Staff\StoreRequest;
use App\Mail\User\Passwordmail;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if (isset($data['hospital_ids'])) {
            $hospital_ids = $data['hospital_ids'];
            unset($data['hospital_ids']);
        }
        $data['avatar_path'] = Storage::disk('public')->put('/images', $data['avatar_path']);
        $staff = Staff::firstOrCreate($data);
        if(isset($hospital_ids)){
            $staff->hospitals()->attach($hospital_ids);
        }
        $data['photo_path'] = $data['avatar_path'];
        unset($data['patronymic'],$data['department'],$data['phone_number'],$data['address'],$data['date_of_birth'],$data['avatar_path']);;
        $data['login'] = Str::random(5);
        $generated_password = Str::random(8);
        $data['role'] = 2;
        $data['password'] =  Hash::make($generated_password);
        $user = User::firstOrCreate(['email'=>$data['email']],$data);
        Mail::to($data['email'])->send(new Passwordmail($generated_password));
        event(new Registered($user));
        return redirect()->route('admin.staff.index');
    }
}
