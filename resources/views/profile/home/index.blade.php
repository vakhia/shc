@extends('layouts.profile')
@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">

            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-4">
                                <img class="mr-3" src="{{asset('storage/'.auth()->user()->photo_path)}}" width="80"
                                     height="80" alt="">
                                <div class="media-body">
                                    <h3 class="mb-0">{{auth()->user()->first_name.' '.auth()->user()->second_name}}</h3>
                                    <p class="text-muted mb-0"></p>
                                </div>
                            </div>

                            {{--<div class="row mb-5">
                                <div class="col">
                                    <div class="card card-profile text-center">
                                        <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                        <h3 class="mb-0">263</h3>
                                        <p class="text-muted px-4">Following</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-profile text-center">
                                        <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                                        <h3 class="mb-0">263</h3>
                                        <p class="text-muted">Followers</p>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-danger px-5">Follow Now</button>
                                </div>
                            </div>--}}

                            <h4>About Me</h4>
                            <p class="text-muted">Role: {{auth()->user()->role === 1 ? 'Client' : 'Doctor'}}</p>
                            <ul class="card-profile__info">
                                <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span>
                                </li>
                                <li><strong class="text-dark mr-4">Email</strong> <span>{{auth()->user()->email}}</span>
                                </li>
                            </ul>
                            <div class="col-12 text-center">
                                <a href="{{route('profile.information.edit',auth()->user()->id)}}"
                                   class="btn btn-danger px-5">Edit profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">LIST</h4>
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3">
                                    <div class="nav flex-column nav-pills"><a href="#v-pills-home" data-toggle="pill"
                                                                              class="nav-link active show">Appointments</a>
                                        <a href="#v-pills-profile" data-toggle="pill" class="nav-link">Medical
                                            Examinations</a> <a href="#v-pills-messages" data-toggle="pill"
                                                                class="nav-link">Treatments</a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <div class="tab-content">
                                        <div id="v-pills-home" class="tab-pane fade active show">
                                            <p>Appointments</p>
                                            @isset($appointments)
                                                @foreach($appointments as $appointment)
                                                    <a href="{{route('profile.appointment.show',$appointment->id)}}">Appointment
                                                        № {{$appointment->id}}
                                                        Time: {{$appointment->date_of_appointment.' '.$appointment->time_of_appointment}}</a>
                                                @endforeach
                                            @endisset
                                        </div>
                                        <div id="v-pills-profile" class="tab-pane fade">
                                            <p>Medical examinations</p>
                                            @if(isset($examinations))
                                                @foreach($examinations as $examination)
                                                    <a href="{{route('profile.examination.show',$examination->id)}}">Medical
                                                        examination №:{{$examination->id}}</a><br>
                                                @endforeach
                                            @else
                                                <a>There are no medical examinations!</a>
                                            @endif
                                        </div>
                                        <div id="v-pills-messages" class="tab-pane fade">
                                            <p>Active treatments!</p>
                                            @foreach($treatments as $treatment)
                                                <a href="{{route('profile.treatment.show',$treatment->id)}}">Treatment
                                                    № {{$treatment->id}}</a>
                                                | Medicines:
                                                @foreach($treatment->medicines as $medicine)
                                                    <a class="text-danger">{{$medicine->title}}</a>
                                                @endforeach
                                            @endforeach
                                        </div>
                                        <div id="v-pills-settings" class="tab-pane fade">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi adipisci
                                                cupiditate quo libero doloribus et rem a eos officiis. Eos at
                                                consequuntur, fugiat ducimus sapiente sit sequi aliquam, deserunt
                                                laboriosam perferendis sed corporis. Unde provident ea quo quibusdam
                                                beatae neque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
