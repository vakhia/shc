@extends('layouts.admin')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit user: {{$user->id}}</h4>
                            <div class="basic-form">
                                <form action="{{route('admin.user.update',$user->id)}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Login</label>
                                        <input  name="login" type="text" class="form-control input-default" placeholder="Title" value="{{$user->login}}">
                                        @error('login')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input  name="first_name" type="text" class="form-control input-default" placeholder="Title" value="{{$user->first_name}}">
                                        @error('login')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Second Name</label>
                                        <input  name="second_name" type="text" class="form-control input-default" placeholder="Title" value="{{$user->second_name}}">
                                        @error('login')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input  name='email' type="text" class="form-control input-default" placeholder="Description" value="{{$user->email}}">
                                        @error('email')
                                        <label class="text-danger" >{{$message}}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Roles</label>
                                        <select name='role' class="form-control" id="sel1">
                                            @foreach($roles as $id => $role)
                                                <option
                                                    {{$user->role == $id ? 'selected' : ''}}
                                                    value="{{$id}}">{{$role}}</option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div>
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                    </div>
                                    <div class="form-group">
                                        <a href="{{route('admin.user.index')}}" class="btn btn-primary">Back</a>
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
