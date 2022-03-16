@extends('layouts.template')
@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Hospital</span>
                        <h1 class="text-capitalize mb-5 text-lg">{{$hospital->title}}</h1>

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
                        <img src="{{asset('/storage/'.$hospital->main_image_path)}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="department-content mt-5">
                        <p>Hospital</p>
                        <h3 class="text-md">{{$hospital->title}}</h3>
                        <div class="divider my-4"></div>
                        <p class="lead">{{$hospital->description}}</p>
                        <h3 class="mt-5 mb-4">Departments</h3>
                        <div class="divider my-4"></div>
                        <ul class="list-unstyled department-service">
                            @foreach($hospital->departments as $department)
                                <li><i class="icofont-check mr-2"></i>{{$department->title}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-widget schedule-widget mt-5">
                        <h5 class="mb-4">Time Schedule</h5>

                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#">Monday - Friday</a>
                                <span>9:00 - 17:00</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#">Saturday</a>
                                <span>9:00 - 16:00</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#">Sunday</a>
                                <span>Closed</span>
                            </li>
                        </ul>

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
    @isset($staff[0]->id)
    <section class="section doctors" {{--style="margin-top:-5rem"--}}>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>Doctors</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque,
                            voluptate. Beatae officiis neque </p>
                    </div>
                </div>
            </div>
            <div class="row shuffle-wrapper portfolio-gallery">
                @foreach($hospital->staff as $doctor)
                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
                         data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                    <img src="{{asset('storage/'.$doctor->avatar_path)}}" alt="doctor-image" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-0"><a href="doctor-single.html">{{$doctor->first_name.' '.$doctor->second_name}}</a></h4>
                                <p>{{$doctor->department}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endisset
@endsection
