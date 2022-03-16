@extends('layouts.admin')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create a department</h4>
                            <div class="basic-form">
                                <form action="{{route('admin.department.store')}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input name="title" type="text" class="form-control input-default"
                                               placeholder="Title">
                                        @error('title')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input name='description' type="text" class="form-control input-default"
                                               placeholder="Description">
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
                                                    {{$person->id == old('header_id') ? 'selected' : ' '}}
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
                                    <div class="form-group">
                                        <button class="btn btn-primary">Create</button>
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
