@extends('layouts.admin')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit a department: {{$department->id}}</h4>
                            <div class="basic-form">
                                <form action="{{route('admin.department.update',$department->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input name="title" type="text" class="form-control input-default" placeholder="Title" value="{{$department->title}}">
                                        @error('title')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input name='description' type="text" class="form-control input-default" placeholder="Description" value="{{$department->description}}">
                                        @error('description')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Header of department</label>
                                        <select name='header_id' class="form-control" id="sel1">
                                            @foreach($staff as $person)
                                                <option
                                                    {{$department->header_id === $person->id ? 'selected' : ' '}}
                                                    value="{{$person->id}}">{{$person->first_name.' '.$person->second_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('header_id')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span
                                                class="input-group-text">Upload image</span>
                                        </div>
                                        <div class="custom-file">
                                            <input name='image' type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        @error('image')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div>

                                    </div>
                                    <div class="form-group">
                                        <a href="{{route('admin.department.index')}}" class="btn btn-primary">Back</a>
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
