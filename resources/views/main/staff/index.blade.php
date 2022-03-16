@extends('layouts.template')

@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">All Doctors</span>
                        <h1 class="text-capitalize mb-5 text-lg">Specalized doctors</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
                          <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                          <li class="list-inline-item"><span class="text-white">/</span></li>
                          <li class="list-inline-item"><a href="#" class="text-white-50">All Doctors</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- portfolio -->
    <section class="section doctors">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>Doctors</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
                    </div>
                </div>
            </div>
            <div class="row shuffle-wrapper portfolio-gallery">
                @foreach($staff as $person)
                <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                    <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                            <div class="doctor-img">
                                <img src="{{asset('storage/'.$person->avatar_path)}}" alt="doctor-image" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="content mt-3">
                            <h4 class="mb-0"><a href="doctor-single.html">{{$person->first_name.' '.$person->second_name}}</a></h4>
                            <p>{{$person->department}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div>
                {{  $staff->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
    <!-- /portfolio -->


@endsection