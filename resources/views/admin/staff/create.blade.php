@extends('layouts.admin')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add a staff</h4>
                            <div class="basic-form">
                                <form action="{{route('admin.staff.store')}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control input-default"
                                               value="{{old('first_name')}}"
                                               placeholder="First Name">
                                        @error('first_name')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Second Name</label>
                                        <input type="text" name="second_name" class="form-control input-default"
                                               value="{{old('second_name')}}"
                                               placeholder="Second Name">
                                        @error('second_name')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Patronymic</label>
                                        <input type="text" name="patronymic" class="form-control input-default"
                                               value="{{old('patronymic')}}"
                                               placeholder="Patronymic">
                                        @error('patronymic')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Department</label>
                                        <input type="text" name="department" class="form-control input-default"
                                               value="{{old('department')}}"
                                               placeholder="Department">
                                        @error('department')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control input-default"
                                               value="{{old('email')}}"
                                               placeholder="Email">
                                        @error('email')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="number" name="phone_number" class="form-control input-default"
                                               value="{{old('phone_number')}}"
                                               placeholder="Phone Number">
                                        @error('phone_number')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control input-default"
                                               placeholder="Address">
                                        @error('address')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Hospitals: </label>
                                        <select name="hospital_ids[]" multiple="multiple" class="form-control"
                                                id="sel2">
                                            @foreach($hospitals as $hospital)
                                                <option value="{{$hospital->id}}">{{$hospital->title}}</option>
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
                                        @error('avatar_path')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
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
