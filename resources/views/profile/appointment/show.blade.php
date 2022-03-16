@extends('layouts.profile')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Appointment page</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{$appointment->id}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <th scope="col">Client</th>
                                <th scope="col">{{$appointment->user->first_name.' '.$appointment->user->second_name}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Hospital</th>
                                <th scope="col">{{$appointment->hospital->title}}</th>
                                </tbody>
                                <tbody>
                                <tbody>
                                <th scope="col">Doctor</th>
                                <th scope="col">{{$appointment->user->first_name.' '.$appointment->user->second_name}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Message</th>
                                <th scope="col">{{$appointment->message}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Date</th>
                                <th scope="col">
                                    {{$appointment->date_of_appointment.' '.$appointment->time_of_appointment}}
                                </th>
                                </tbody>

                                <tbody>
                                <th scope="col">Status</th>
                                <th scope="col">
                                   {{$appointment->status->title}}
                                </th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mardo form-check-inline">
                    <a href="{{route('profile.appointment.index')}}" class="mr-1 btn btn-primary">Back</a>
                    @if(auth()->user()->role === 2 || auth()->user()->role === 0)
                        <a href="{{route('profile.examination.create',$appointment)}}" class="mr-1 btn btn-instagram">Create Medical
                            Examination</a>
                    @endif
                    @if($appointment->done==1 && $appointment->status_id != 3 && auth()->user()->role === 2 || auth()->user()->role === 0)
                        <form action="{{route('profile.appointment.update',$appointment->id)}}" class="mr-1" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group" style="display: none">
                                <label>Address</label>
                                <input name='user_id' type="text" class="form-control input-default"
                                       placeholder="Address" value="{{auth()->user()->id}}">
                                <input name='approved' type="text" class="form-control input-default"
                                       placeholder="Address" value="{{2}}">
                            </div>
                            <button class="btn btn-facebook">Mark as Done!</button>
                        </form>
                    @endif
                    @if($appointment->status_id==3)
                        <form action="{{route('profile.appointment.update',$appointment->id)}}" class="mr-1" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group" style="display: none">
                                <label>Address</label>
                                <input name='user_id' type="text" class="form-control input-default"
                                       placeholder="Address" value="{{auth()->user()->id}}">
                                <input name='approved' type="text" class="form-control input-default"
                                       placeholder="Address" value="{{1}}">
                            </div>
                            <button class="btn btn-facebook">Approve time</button>
                        </form>
                        <a href="{{route('profile.appointment.edit',$appointment->id)}}" class="mr-1 btn btn-facebook">Edit time</a>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
