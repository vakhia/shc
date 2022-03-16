@extends('layouts.profile')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Examination</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{$examination->id}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <th scope="col">Title</th>
                                <th scope="col">{{$examination->title}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Client</th>
                                <th scope="col">{{$examination->user->first_name.' '.$examination->user->second_name}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Hospital</th>
                                <th scope="col">{{$examination->hospital->title}}</th>
                                </tbody>
                                <tbody>
                                <tbody>
                                <th scope="col">Doctor</th>
                                <th scope="col">{{$examination->user->first_name.' '.$examination->user->second_name}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Message</th>
                                <th scope="col">{{$examination->description}}</th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mardo form-check-inline">
                    <a href="{{route('profile.examination.index')}}" class="mr-1 btn btn-primary">Back</a>
                    <a href="{{route('profile.examination.edit',$examination->id)}}" class="mr-1 btn btn-dribbble">Edit</a>
                    {{--<form action="{{route('profile.examination.delete',$examination->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="mr-1 btn btn-danger">
                            Delete
                        </button>
                    </form>--}}
                    <a href="{{route('profile.treatment.create',$examination)}}" class="mr-1 btn btn-instagram">Create a Treatment</a>
                </div>

            </div>
        </div>
    </div>
@endsection
