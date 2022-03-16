@extends('layouts.profile')

@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Appointments</h4>

                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">№</th>
                                    <th scope="col">Appointment</th>
                                    <th scope="col">Client</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <th>{{$appointment->id}}</th>
                                        <td>Appointment №{{$appointment->id}}</td>
                                        <td>{{$appointment->user->first_name.' '.$appointment->user->second_name}}</td>
                                        <td>{{$appointment->doctor->first_name.' '.$appointment->doctor->second_name}}</td>
                                        <td>
                                            @if($appointment->done==1)
                                                Waiting
                                            @else
                                                Done
                                            @endif
                                        </td>
                                        <td>
                                            <span class="form-check-inline">
                                            <a class="mr-1"
                                               href="{{route('profile.appointment.show',$appointment->id)}}"
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
