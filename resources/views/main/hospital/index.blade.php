@extends('layouts.template')
@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">All Department</span>
                        <h1 class="text-capitalize mb-5 text-lg">Care Department</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
                          <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                          <li class="list-inline-item"><span class="text-white">/</span></li>
                          <li class="list-inline-item"><a href="#" class="text-white-50">All Department</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section service-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>OUR HOSPITALS</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Let's know more about hospitals in our system</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($hospitals as $hospital)
                <div class="col-lg-4 col-md-6 ">
                    <div class="department-block mb-5">
                        <img src="{{asset('/storage/'.$hospital->preview_image_path)}}" alt=""
                             class="img-fluid w-100">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">{{$hospital->title}}</h4>
                            <p class="mb-4">{{$hospital->address}}</p>
                            <a href="{{route('main.hospital.show',$hospital->id)}}" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div>
                {{  $hospitals->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
@endsection
