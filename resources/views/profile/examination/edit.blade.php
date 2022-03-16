@extends('layouts.profile')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit medical examination</h4>
                            <div class="basic-form">
                                <form action="{{route('profile.examination.update',$examination->id)}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control input-default"
                                               value="{{$examination->title}}" placeholder="Title">
                                        @error('title')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Appointments</label>
                                        <select name='appointment_id' class="form-control" id="sel1">
                                            @foreach($appointments as $appointment)
                                                <option
                                                    {{$appointment->id == $examination->appointment_id ? 'selected' : ' '}}
                                                    value="{{$appointment->id}}">Appointment
                                                    : {{$appointment->date_of_appointment}}</option>
                                            @endforeach
                                        </select>
                                        @error('appointment_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Client</label>
                                        <select name='user_id' class="form-control" id="sel1">
                                            @foreach($users as $user)
                                                <option
                                                    {{$user->id == $examination->user_id ? 'selected' : ' '}}
                                                    value="{{$user->id}}">{{$user->first_name.' '.$user->second_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Hospital</label>
                                        <select name='hospital_id' class="form-control" id="sel1">
                                            @foreach($hospitals as $hospital)
                                                <option
                                                    {{$hospital->id == $examination->hospital_id ? 'selected' : ' '}}
                                                    value="{{$hospital->id}}">{{$hospital->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('hospital_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Doctor</label>
                                        <select name='staff_id' class="form-control" id="sel1">
                                            @foreach($doctors as $doctor)
                                                <option
                                                    {{$doctor->id == $examination->staff_id ? 'selected' : ' '}}
                                                    value="{{$doctor->id}}">{{$doctor->first_name.' '.$doctor->second_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('staff_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control h-150px" rows="6"
                                                  id="comment">{{$examination->description}}</textarea>
                                        @error('description')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">Edit</button>
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
