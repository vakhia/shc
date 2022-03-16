@extends('layouts.admin')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit a medicine: {{$medicine->id}}</h4>
                            <div class="basic-form">
                                <form action="{{route('admin.medicine.update',$medicine->id)}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input name="title" type="text" class="form-control input-default"
                                               placeholder="Title" value="{{$medicine->title}}">
                                    </div>
                                    @error('title')
                                    <div>
                                        <label class="text-danger">{{$message}}</label>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input name='description' type="text" class="form-control input-default"
                                               placeholder="Description" value="{{$medicine->description}}">
                                    </div>
                                    @error('title')
                                    <div>
                                        <label class="text-danger">{{$message}}</label>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label>Contraindication</label>
                                        <input name='contraindication' type="text" class="form-control input-default" value="{{$medicine->contraindication}}"
                                               placeholder="Contraindication">
                                    </div>
                                    @error('contraindication')
                                    <div>
                                        <label class="text-danger">{{$message}}</label>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input name='quantity' type="number" class="form-control input-default" value="{{$medicine->quantity}}"
                                               placeholder="0">
                                    </div>
                                    @error('quantity')
                                    <div>
                                        <label class="text-danger">{{$message}}</label>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label>Price per each</label>
                                        <input name='price' type="number" class="form-control input-default" value="{{$medicine->price}}"
                                               placeholder="0">
                                    </div>
                                    @error('price')
                                    <div>
                                        <label class="text-danger">{{$message}}</label>
                                    </div>
                                    @enderror
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span
                                                class="input-group-text">Upload image</span>
                                        </div>
                                        <div class="custom-file">
                                            <input name='image' type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                    @error('image')
                                    <div>
                                        <label class="text-danger">{{$message}}</label>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <a href="{{route('admin.medicine.index')}}" class="btn btn-primary">Back</a>
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
