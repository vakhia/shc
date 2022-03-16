@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Person page</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{$staff->id}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <th scope="col">First Name</th>
                                <th scope="col">{{$staff->first_name}}</th>
                                </tbody>
                                <tbody>
                                <tbody>
                                <th scope="col">Second Name</th>
                                <th scope="col">{{$staff->second_name}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Patronymic</th>
                                <th scope="col">{{$staff->patronymic}}</th>
                                </tbody>
                                <tbody>
                                <tbody>
                                <th scope="col">Department</th>
                                <th scope="col">{{$staff->department}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Email</th>
                                <th scope="col">{{$staff->email}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Hospital</th>
                                <th scope="col">
                                    |
                                    @foreach($staff->hospitals as $hospital)
                                        {{'id:'.$hospital->id.' '.$hospital->title}} |
                                    @endforeach
                                </th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mardo form-check-inline">
                    <a href="{{route('admin.staff.index')}}" class="mr-1 btn btn-primary">Back</a>
                    <a href="{{route('admin.staff.edit',$staff->id)}}" class="mr-1 btn btn-secondary">Edit</a>
                    <form action="{{route('admin.staff.delete',$staff->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <a href="{{route('admin.staff.delete',$staff->id)}}" class="btn btn-danger">Delete</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
