@extends('layouts.admin')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create a user</h4>
                            <div class="basic-form">
                                <form action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="name" type="text" class="form-control input-default" placeholder="Name" value="{{old('title')}}">
                                        @error('name')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name='email' type="text" class="form-control input-default" placeholder="Email" value="{{old('description')}}">
                                        @error('email')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Roles</label>
                                        <select name='role' class="form-control" id="sel1">
                                            @foreach($roles as $id => $role)
                                                <option
                                                    {{$id == old('role') ? 'selected' : ' '}}
                                                    value="{{$id}}">{{$role}}</option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a href="{{route('admin.user.index')}}" class="btn btn-primary">Back</a>
                                        <button class="btn btn-primary">Create</button>
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
