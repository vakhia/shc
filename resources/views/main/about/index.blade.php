@extends('layouts.template')
@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">About Us</span>
                        <h1 class="text-capitalize mb-5 text-lg">About Us</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
                          <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                          <li class="list-inline-item"><span class="text-white">/</span></li>
                          <li class="list-inline-item"><a href="#" class="text-white-50">About Us</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="title-color">Personal care for your healthy living</h2>
                </div>
                <div class="col-lg-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quod laborum alias. Vitae
                        dolorum, officia sit! Saepe ullam facere at, consequatur incidunt, quae esse, quis ut
                        reprehenderit dignissimos, libero delectus.</p>
                    <img src="{{asset('assets/main/images/about/sign.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="fetaure-page ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="{{asset('assets/main/images/images/about/about-1.jpg')}}" alt=""
                             class="img-fluid w-100">
                        <h4 class="mt-3">Healthcare for Kids</h4>
                        <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="{{asset('assets/main/images/about/about-2.jpg')}}" alt="" class="img-fluid w-100">
                        <h4 class="mt-3">Medical Counseling</h4>
                        <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="{{asset('assets/main/images/about/about-3.jpg')}}" alt="" class="img-fluid w-100">
                        <h4 class="mt-3">Modern Equipments</h4>
                        <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item">
                        <img src="{{asset('assets/main/images/about/about-4.jpg')}}" alt="" class="img-fluid w-100">
                        <h4 class="mt-3">Qualified Doctors</h4>
                        <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section awards">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <h2 class="title-color">Our Doctors achievements </h2>
                    <div class="divider mt-4 mb-5 mb-lg-0"></div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="award-img">
                                <img src="{{asset('assets/main/images/about/4.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="award-img">
                                <img src="{{asset('assets/main/images/about/4.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="award-img">
                                <img src="{{asset('assets/main/images/about/1.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="award-img">
                                <img src="{{asset('assets/main/images/about/2.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="award-img">
                                <img src="{{asset('assets/main/images/about/5.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="award-img">
                                <img src="{{asset('assets/main/images/about/6.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2 class="mb-4">Meet Our Specialist</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Today’s users expect effortless experiences. Don’t let essential people and processes stay
                            stuck in the past. Speed it up, skip the hassles</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($staff as $person)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-block mb-5 mb-lg-0">
                            <img src="{{asset('assets/main/images/team/123.jpg')}}" alt="" class="img-fluid w-100">

                            <div class="content">
                                <h4 class="mt-4 mb-0"><a href="doctor-single.html">{{$person['first_name'].' '.$person['second_name']}}</a></h4>
                                <p>{{$person['department']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="section-title">
                        <h2 class="mb-4">What they say about us</h2>
                        <div class="divider  my-4"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 testimonial-wrap offset-lg-6">
                    <div class="testimonial-block">
                        <div class="client-info ">
                            <h4>Amazing service!</h4>
                            <span>John Partho</span>
                        </div>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
                            iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam
                            eveniet nostrum nemo commodi numquam quod.
                        </p>
                        <i class="icofont-quote-right"></i>

                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>Expert doctors!</h4>
                            <span>Mullar Sarth</span>
                        </div>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
                            iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam
                            eveniet nostrum nemo commodi numquam quod.
                        </p>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>Good Support!</h4>
                            <span>Kolis Mullar</span>
                        </div>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
                            iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam
                            eveniet nostrum nemo commodi numquam quod.
                        </p>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>Nice Environment!</h4>
                            <span>Partho Sarothi</span>
                        </div>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
                            iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam
                            eveniet nostrum nemo commodi numquam quod.
                        </p>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>Modern Service!</h4>
                            <span>Kolis Mullar</span>
                        </div>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
                            iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam
                            eveniet nostrum nemo commodi numquam quod.
                        </p>
                        <i class="icofont-quote-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
