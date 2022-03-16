@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Staff</h4>
                        <div class="mardo">
                            <a href="{{route('admin.staff.create')}}" class="btn btn-primary">+</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">№</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Second Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($staff as $person)
                                <tr>
                                    <th>{{$person->id}}</th>
                                    <td>{{$person->first_name}}</td>
                                    <td>{{$person->second_name}}</td>
                                    <td>
                                        <span class="form-check-inline">
                                            <a class="mr-1" href="{{route('admin.staff.show',$person->id)}}"
                                               data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Show">
                                                 <i class="fa fa-eye color-muted m-r-5"></i>
                                            </a>
                                            <form action="{{route('admin.staff.delete',$person->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                <a href="{{route('admin.staff.delete',$person->id)}}" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Close">
                                                <i class="fa fa-close color-danger"></i>
                                                </a>
                                                </button>
                                            </form>
                                            <a class="ml-1" href="{{route('admin.staff.edit',$person->id)}}"
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
                    {{  $staff->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection







