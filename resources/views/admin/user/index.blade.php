@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Users</h4>
                        <div class="mardo">
                            <a href="{{route('admin.user.create')}}" class="btn btn-primary">+</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">login</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th>{{$user->id}}</th>
                                        <td>{{$user->login}}</td>
                                        <td>
                                        <span class="form-check-inline">
                                            <a class="mr-1" href="{{route('admin.user.show',$user->id)}}"
                                               data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Show">
                                                <i class="fa fa-eye color-muted m-r-5"></i>
                                            </a>
                                            <form action="{{route('admin.user.delete',$user->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                <a class="" href="{{route('admin.user.delete',$user->id)}}" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Close">
                                                <i class="fa fa-close color-danger"></i>
                                                </a>
                                                </button>
                                            </form>
                                            <a class="ml-1" href="{{route('admin.user.edit',$user->id)}}"
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
                    {{  $users->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection







