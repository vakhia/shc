@extends('layouts.profile')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit time</h4>
                            <div class="basic-form">
                                <form action="{{route('profile.appointment.update',$appointment->id)}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Hospital</label>
                                        <fieldset disabled="disabled">
                                            <input type="number" name="hospital_id" class="form-control input-default"
                                                   value="{{$appointment->hospital_id}}" placeholder="Title">
                                        </fieldset>
                                        @error('hospital_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Doctor</label>
                                        <fieldset disabled="disabled">
                                            <input type="number" name="staff_id" class="form-control input-default"
                                                   value="{{auth()->user()->id}}" placeholder="Title">
                                        </fieldset>
                                        @error('staff_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>User</label>
                                        <fieldset disabled="disabled">
                                            <input type="number" name="user_id" class="form-control input-default"
                                                   value="{{$appointment->staff_id}}" placeholder="Title">
                                        </fieldset>
                                        @error('user_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Phone number</label>
                                        <fieldset disabled="disabled">
                                            <input type="number" name="phone_number" class="form-control input-default"
                                                   value="{{$appointment->phone_number}}" placeholder="Title">
                                        </fieldset>
                                        @error('phone_number')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <fieldset disabled="disabled">
                                            <input type="text" name="message" class="form-control input-default"
                                                   value="{{$appointment->message}}" placeholder="Title">
                                        </fieldset>
                                        @error('message')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Date of appointment</label>
                                        <input name="date_of_appointment" id="date_of_appointment" type="date"
                                               class="form-control" value="{{$appointment->date_of_appointment}}"
                                               placeholder="dd/mm/yyyy">
                                        @error('date_of_appointment')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Time of appointment</label>
                                        <input name="time_of_appointment" id="time" type="time" class="form-control"
                                               value="{{$appointment->time_of_appointment}}"
                                               placeholder="Time">
                                        @error('time_of_appointment')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        @if($appointment->status_id==3)
                                            <button class="btn btn-primary">Edit</button>
                                        @else
                                            <a class="mr-1 btn btn-instagram" href="{{route('profile.appointment.show',$appointment->id)}}">Back</a>
                                            <label class="text-danger">You cannot change date on approved appointment!</label>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
