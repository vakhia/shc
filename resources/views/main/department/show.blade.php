@extends('layouts.template')
@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Department</span>
                        <h1 class="text-capitalize mb-5 text-lg">{{$department->title}}</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
                          <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                          <li class="list-inline-item"><span class="text-white">/</span></li>
                          <li class="list-inline-item"><a href="#" class="text-white-50">Department Details</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section department-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-img">
                        <img src="{{asset('/storage/'.$department->image)}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="department-content mt-5">
                        <p>Department</p>
                        <h3 class="text-md">{{$department->title}}</h3>
                        <div class="divider my-4"></div>
                        <p class="lead">{{$department->description}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget schedule-widget mt-5">
                        <div class="sidebar-contatct-info mt-4">
                            <p class="mb-0">Need Urgent Help?</p>
                            <h3>+23-4565-65768</h3>
                            <a href="{{route('main.appointment.create')}}" class="btn btn-main-2 btn-round-full">Make an Appoinment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
