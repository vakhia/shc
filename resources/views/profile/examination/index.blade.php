@extends('layouts.profile')

@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Medical Examinations</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">№</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Client</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($medical_examinations as $examination)
                                    <tr>
                                        <th>№{{$examination->id}}</th>
                                        <td>{{$examination->title}}</td>
                                        <td>{{$examination->user->first_name.' '.$examination->user->second_name}}</td>
                                        <td>{{$examination->doctor->first_name.' '.$examination->doctor->second_name}}</td>
                                        <td>
                                            <span class="form-check-inline">
                                            <a class="mr-1"
                                               href="{{route('profile.examination.show',$examination->id)}}"
                                               data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Show">
                                                <i class="fa fa-eye color-muted m-r-5"></i>
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

            </div>
        </div>
    </div>
@endsection
