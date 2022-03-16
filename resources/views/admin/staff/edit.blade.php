@extends('layouts.admin')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit a staff: {{$staff->id}}</h4>
                            <div class="basic-form">
                                <form action="{{route('admin.staff.update',$staff->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control input-default" value="{{$staff->first_name}}"
                                                placeholder="First Name">
                                    </div>
                                    @error('first_name')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                    <div class="form-group">
                                        <label>Second Name</label>
                                        <input type="text" name="second_name" class="form-control input-default" value="{{$staff->second_name}}"
                                               placeholder="Second Name">
                                    </div>
                                    @error('second_name')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                    <div class="form-group">
                                        <label>Patronymic</label>
                                        <input type="text" name="patronymic" class="form-control input-default" value="{{$staff->patronymic}}"
                                               placeholder="Patronymic">
                                    </div>
                                    @error('patronymic')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                    <div class="form-group">
                                        <label>Department</label>
                                        <input type="text" name="department" class="form-control input-default" value="{{$staff->department}}"
                                               placeholder="Department">
                                    </div>
                                    @error('department')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control input-default" value="{{$staff->email}}"
                                               placeholder="Email">
                                    </div>
                                    @error('email')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="number" name="phone_number" class="form-control input-default" value="{{$staff->phone_number}}"
                                               placeholder="Phone Number">
                                    </div>
                                    @error('phone_number')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control input-default" value="{{$staff->address}}"
                                               placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <label class="m-t-20">Date of birth</label>
                                        <input value="{{$staff->date_of_birth}} "type="date" name="date_of_birth" class="form-control" placeholder="2017-06-04" id="mdate">
                                        @error('date_of_birth')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    @error('address')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                    <div class="form-group">
                                        <label>Hospitals: </label>
                                        <select name="hospital_ids[]" multiple="multiple" class="form-control" id="sel2">
                                            @foreach($hospitals as $hospital)
                                                <option
                                                    @foreach($staff->hospitals as $hospital_id)
                                                    {{$hospital->id === $hospital_id->id ? 'selected' : ''}}
                                                    @endforeach
                                                    value="{{$hospital->id}}">{{$hospital->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('hospital_ids[]')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span
                                                class="input-group-text">Upload image</span>
                                        </div>
                                        <div class="custom-file">
                                            <input name='avatar_path' type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                    @error('avatar_path')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                    <div>
                                        <input type="hidden" name="staff_id" value="{{$staff->id}}">
                                    </div>
                                    <div class="form-group">
                                        <a href="{{route('admin.staff.index')}}" class="btn btn-primary">Back</a>
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
