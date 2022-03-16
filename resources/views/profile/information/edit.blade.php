@extends('layouts.profile')
@section('content')
    <div class="content-body" style="min-height: 1140px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit your infomation</h4>
                            <form action="{{route('profile.information.update',$user->id)}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label>Login</label>
                                    <input type="text" name="login" class="form-control input-default"
                                           value="{{$user->login}}" placeholder="Title">
                                    @error('login')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control input-default"
                                           value="{{$user->first_name}}" placeholder="Title">
                                    @error('first_name')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Second Name</label>
                                    <input type="text" name="second_name" class="form-control input-default"
                                           value="{{$user->second_name}}" placeholder="Title">
                                    @error('second_name')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control input-default"
                                           value="{{$user->email}}" placeholder="Title">
                                    @error('email')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>
                                <div class="form-group" style="display:none">
                                    <input type="text" name="user_id" class="form-control input-default"
                                           value="{{$user->id}}" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span
                                                class="input-group-text">Upload image</span>
                                        </div>
                                        <div class="custom-file">
                                            <input name='photo_path' type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        @error('avatar_path')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    </div>
@endsection
