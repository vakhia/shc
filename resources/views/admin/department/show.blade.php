@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$department['title']}}</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{$department['id']}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <th scope="col">Title</th>
                                <th scope="col">{{$department['title']}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Description</th>
                                <th scope="col">{{$department['description']}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Header</th>
                                <th scope="col">{{$department->header->first_name.' '.$department->header->second_name}}</th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mardo form-check-inline">
                    <a href="{{route('admin.department.index')}}" class="mr-1 btn btn-primary">Back</a>
                    <a href="{{route('admin.department.edit',$department->id)}}" class="mr-1 btn btn-secondary">Edit</a>
                    <form action="{{route('admin.department.delete',$department->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <a href="{{route('admin.department.delete',$department->id)}}" class="btn btn-danger">Delete</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
