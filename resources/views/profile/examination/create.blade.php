@extends('layouts.profile')
@section('content')
    <div class="content-body" style="min-height: 1140px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create medical examination</h4>
                            <div class="basic-form">
                                <form action="{{route('profile.examination.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control input-default"
                                              value="{{old('title')}}" placeholder="Title">
                                        @error('title')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Appointments</label>
                                        <select name='appointment_id' class="form-control" id="sel1">
                                            @foreach($appointments as $appointment)
                                                <option
                                                    {{$appointment->id == old('appointment_id') ? 'selected' : ' '}}
                                                    value="{{$appointment->id}}">Appointment №. : {{ $appointment->id.' '.$appointment->date_of_appointment.' '.$appointment->time_of_appointment}}</option>
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
                                                    {{$user->id == $appointment->user_id ? 'selected' : ' '}}
                                                    value="{{$user->id}}">{{'Client №'.$user->id.' '.$user->first_name.' '.$user->second_name}}</option>
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
                                                    {{$hospital->id == $appointment->hospital_id ? 'selected' : ' '}}
                                                    value="{{$hospital->id}}">{{'Hospital №'.$hospital->id.' '.$hospital->title}}</option>
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
                                                    {{$doctor->id == auth()->user()->id ? 'selected' : ' '}}
                                                    value="{{$doctor->id}}">{{'Doctor № '.$doctor->id.' '.$doctor->first_name.' '.$doctor->second_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('staff_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control h-150px" rows="6" id="comment">{{old('description')}}</textarea>
                                        @error('description')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">Add</button>
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
