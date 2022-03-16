@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Departments</h4>
                        <div class="mardo">
                            <a href="{{route('admin.department.create')}}" class="btn btn-primary">+</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($departments as $department)
                                    <tr>
                                        <th>{{$department->id}}</th>
                                        <td>{{$department['title']}}</td>
                                        <td>
                                        <span class="form-check-inline">
                                            <a class="mr-1" href="{{route('admin.department.show',$department->id)}}"
                                               data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Show">
                                                <i class="fa fa-eye color-muted m-r-5"></i>
                                            </a>
                                            <form action="{{route('admin.department.delete',$department->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                <a class="" href="{{route('admin.department.delete',$department->id)}}" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Delete">
                                                <i class="fa fa-close color-danger"></i>
                                                </a>
                                                </button>
                                            </form>
                                            <a class="ml-1" href="{{route('admin.department.edit',$department->id)}}"
                                               data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Edit">
                                                <i class="fa fa-pencil color-muted m-r-5"></i>
                                            </a>

                                        </span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div>
                    {{  $departments->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection







