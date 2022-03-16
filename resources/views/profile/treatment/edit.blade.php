@extends('layouts.profile')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit treatment</h4>
                            <div class="basic-form">
                                <form action="{{route('profile.treatment.update',$treatment->id)}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Client</label>
                                        <select name='user_id' class="form-control" id="sel1">
                                            @foreach($users as $user)
                                                <option
                                                    {{$user->id == $treatment->user_id ? 'selected' : ' '}}
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
                                                    {{$hospital->id == $treatment->hospital_id ? 'selected' : ' '}}
                                                    value="{{$hospital->id}}">{{'Hospital: '.$hospital->title}}</option>
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
                                                    value="{{$doctor->id}}">{{'Doctor: '.$doctor->first_name.' '.$doctor->second_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('staff_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Disease</label>
                                        <input type="text" name="disease_name" class="form-control input-default"
                                               value="{{$treatment->disease_name}}"
                                               placeholder="Disease">
                                        @error('disease_name')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control input-default"
                                               value="{{$treatment->description}}"
                                               placeholder="description">
                                        @error('description')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Appointment</label>
                                        <input type="text" name="appointment" class="form-control input-default"
                                               value="{{$treatment->appointment}}"
                                               placeholder="appointment">
                                        @error('appointment')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Medicines: </label>
                                        <select name="medicine_ids[]" multiple="multiple" class="form-control"
                                                id="sel2">
                                            @foreach($medicines as $medicine)
                                                <option
                                                    @foreach($treatment->medicines as $medicine_id)
                                                    {{$medicine->id === $medicine_id->id ? 'selected' : ''}}
                                                    @endforeach
                                                    value="{{$medicine->id}}">{{' Title: '.$medicine->title.' | Contraindication: '.$medicine->contraindication.' | Price per each: '.$medicine->price}}</option>
                                            @endforeach
                                        </select>
                                        @error('medicine_ids[]')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name='status_id' class="form-control" id="sel1">
                                            @foreach($statuses as $status)
                                                <option
                                                    {{$status->id == $treatment->status_id ? 'selected' : ' '}}
                                                    value="{{$status->id}}">{{$status->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('status_id')
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
