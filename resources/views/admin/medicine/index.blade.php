@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Medicine</h4>
                        <div class="mardo">
                            <a href="{{route('admin.medicine.create')}}" class="btn btn-primary">+</a>
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
                                @foreach($medicines as $medicine)
                                    <tr>
                                        <th>{{$medicine->id}}</th>
                                        <td>{{$medicine['title']}}</td>
                                        <td>
                                        <span class="form-check-inline">
                                            <a class="mr-1" href="{{route('admin.medicine.show',$medicine->id)}}"
                                               data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Show">
                                                <i class="fa fa-eye color-muted m-r-5"></i>
                                            </a>
                                            <form action="{{route('admin.medicine.delete',$medicine->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                <a class="" href="{{route('admin.medicine.delete',$medicine->id)}}" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Delete">
                                                <i class="fa fa-close color-danger"></i>
                                                </a>
                                                </button>
                                            </form>
                                            <a class="ml-1" href="{{route('admin.medicine.edit',$medicine->id)}}"
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
                    {{  $medicines->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection







