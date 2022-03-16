@extends('layouts.admin')
@section('content')
    <div class="content-body" style="min-height: 1140px;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create a medicine</h4>
                            <div class="basic-form">
                                <form action="{{route('admin.medicine.store')}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input name="title" type="text" class="form-control input-default" value="{{old('title')}}"
                                               placeholder="Title">
                                        @error('title')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input name='description' type="text" class="form-control input-default" value="{{old('description')}}"
                                               placeholder="Description">
                                        @error('description')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Contraindication</label>
                                        <input name='contraindication' type="text" class="form-control input-default" value="{{old('contraindication')}}"
                                               placeholder="Contraindication(optional)">
                                        @error('contraindication')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input name='quantity' type="number" class="form-control input-default" value="{{old('quantity')}}"
                                               placeholder="0">
                                        @error('quantity')
                                        <div>
                                            <label class="text-danger">{{$message}}</label>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Price per each</label>
                                        <input name='price' type="number" class="form-control input-default" value="{{old('price')}}"
                                               placeholder="0">
                                        @error('price')
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
