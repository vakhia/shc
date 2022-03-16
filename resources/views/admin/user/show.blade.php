@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$user->id}}</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{$user->id}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <th scope="col">Login</th>
                                <th scope="col">{{$user->login}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">First Name</th>
                                <th scope="col">{{$user->first_name}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Second Name</th>
                                <th scope="col">{{$user->second_name}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Email</th>
                                <th scope="col">{{$user->email}}</th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mardo form-check-inline">
                    <a href="{{route('admin.user.index')}}" class="mr-1 btn btn-primary">Back</a>
                    <a href="{{route('admin.user.edit',$user->id)}}" class="mr-1 btn btn-secondary">Edit</a>
                    <form action="{{route('admin.user.delete',$user->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <a href="{{route('admin.user.delete',$user->id)}}" class="btn btn-danger">Delete</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
