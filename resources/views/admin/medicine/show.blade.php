@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$medicine->title}}</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{$medicine->id}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <th scope="col">Title</th>
                                <th scope="col">{{$medicine->title}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Description</th>
                                <th scope="col">{{$medicine->description}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Contraindication</th>
                                <th scope="col">
                                    {{$medicine->contraindication == null ? 'None' : $medicine->contraindication}}
                                </th>
                                </tbody>
                                <tbody>
                                <th scope="col">Quantity</th>
                                <th scope="col">{{$medicine->quantity}}</th>
                                </tbody>
                                <tbody>
                                <th scope="col">Price</th>
                                <th scope="col">{{$medicine->price}}</th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mardo form-check-inline">
                    <a href="{{route('admin.medicine.index')}}" class="mr-1 btn btn-primary">Back</a>
                    <a href="{{route('admin.medicine.edit',$medicine->id)}}" class="mr-1 btn btn-secondary">Edit</a>
                    <form action="{{route('admin.medicine.delete',$medicine->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <a href="{{route('admin.medicine.delete',$medicine->id)}}" class="btn btn-danger">Delete</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
