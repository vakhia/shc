@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$hospital->id}}</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{$hospital->id}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <th scope="col">Title</th>
                                <th scope="col">{{$hospital->title}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Description</th>
                                <th scope="col">{{$hospital->description}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Header</th>
                                <th scope="col">{{$hospital->header->first_name.' '.$hospital->header->second_name}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Departments</th>
                                <th scope="col">
                                    @foreach($hospital->departments as $department)
                                        {{$department['title']}} |
                                    @endforeach
                                </th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mardo form-check-inline">
                    <a href="{{route('admin.hospital.index')}}" class="mr-1 btn btn-primary">Back</a>
                    <a href="{{route('admin.hospital.edit',$hospital->id)}}" class="mr-1 btn btn-secondary">Edit</a>
                    <form action="{{route('admin.hospital.delete',$hospital->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="mr-1 btn btn-danger">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
