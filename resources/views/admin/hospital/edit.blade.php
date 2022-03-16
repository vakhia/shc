@extends('layouts.admin')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit hospital: {{$hospital->id}}</h4>
                            <div class="basic-form">
                                <form action="{{route('admin.hospital.update',$hospital->id)}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input  name="title" type="text" class="form-control input-default" placeholder="Title" value="{{$hospital->title}}">
                                        @error('title')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input  name='description' type="text" class="form-control input-default" placeholder="Description" value="{{$hospital->description}}">
                                        @error('description')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input  name='address' type="text" class="form-control input-default" placeholder="Address" value="{{$hospital->address}}">
                                        @error('address')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Header of hospital</label>
                                        <select name='header_id' class="form-control" id="sel1">
                                            @foreach($staff as $person)
                                                <option
                                                    {{$hospital->id === $person->id ? 'selected' : ''}}
                                                    value="{{$person->id}}">{{$person->first_name.' '.$person->second_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('header_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Departments: </label>
                                        <select name="department_ids[]" multiple="multiple" class="form-control"
                                                id="sel2">
                                            @foreach($departments as $department)
                                                <option
                                                    @foreach($hospital->departments as $department_id)
                                                        {{$department->id === $department_id->id ? 'selected' : ''}}
                                                    @endforeach
                                                    value="{{$department->id}}">{{$department->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('department_ids[]')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span
                                                class="input-group-text">Upload preview image</span>
                                        </div>
                                        <div class="custom-file">
                                            <input name='preview_image_path' type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        @error('preview_image_path')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text">Upload main image</span>
                                            </div>
                                            <div class="custom-file">
                                                <input name='main_image_path' type="file" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                        @error('main_image_path')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a href="{{route('admin.hospital.index')}}" class="btn btn-primary">Back</a>
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
