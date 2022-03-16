@extends('layouts.profile')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Treatment page</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{$treatment->id}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <th scope="col">Client</th>
                                <th scope="col">{{$treatment->user->first_name.' '.$treatment->user->second_name}}</th>
                                </tbody>
                                <tbody>
                                <tbody>
                                <th scope="col">Disease</th>
                                <th scope="col">{{$treatment->disease_name}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Hospital</th>
                                <th scope="col">{{$treatment->hospital_id}}</th>
                                </tbody>
                                <tbody>
                                <tbody>
                                <th scope="col">Doctor</th>
                                <th scope="col">{{$treatment->doctor->first_name.' '.$treatment->doctor->second_name}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Description</th>
                                <th scope="col">{{$treatment->description}}</th>
                                </tbody>
                                <tbody>
                                <tbody>
                                <th scope="col">Status</th>
                                <th scope="col">{{$treatment->status->title}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Medicines:</th>
                                <th scope="col">
                                    @foreach($treatment->medicines as $medicine)
                                        {{$medicine->title}}
                                    @endforeach
                                </th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mardo form-check-inline">
                    <a href="{{route('profile.treatment.index')}}" class="mr-1 btn btn-primary">Back</a>
                    @if(auth()->user()->role==2)
                        <a href="{{route('profile.treatment.edit',$treatment->id)}}"
                           class="mr-1 btn btn-primary">Edit</a>
                        {{--<form action="{{route('profile.treatment.delete',$treatment->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="mr-1 btn btn-danger">
                            Delete
                        </button>
                    </form>--}}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
