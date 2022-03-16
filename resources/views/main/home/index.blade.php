@extends('layouts.template')
@section('content')
    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">@lang('main.label')</span>
                        <h1 class="mb-3 mt-3">@lang('main.label_second')</h1>

                        <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                        <div class="btn-container ">
                            <a href="{{route('main.appointment.create')}}" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">@lang('main.button_appointment')<i class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span>@lang('main.hour_service')</span>
                            <h4 class="mb-3">@lang('main.online_appointment')</h4>
                            <p class="mb-4">@lang('main.support')</p>
                            <a href="{{route('main.appointment.create')}}" class="btn btn-main btn-round-full">@lang('main.button_appointment')</a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>Timing schedule</span>
                            <h4 class="mb-3">Working Hours</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">@lang('main.days.Sun-Fr') <span>8:00 - 20:00</span></li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-support"></i>
                            </div>
                            <span>@lang('main.emergency_case')</span>
                            <h4 class="mb-3">1-800-700-6200</h4>
                            <p>@lang('main.support_emergency')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="{{asset('assets/main/images/about/img-1.jpg')}}" alt="" class="img-fluid">
                        <img src="{{asset('assets/main/images/about/img-2.jpg')}}" alt="" class="img-fluid mt-4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="{{asset('assets/main/images/about/img-3.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">@lang('main.personal_care') <br>@lang('main.personal_care_second')</h2>
                        <p class="mt-4 mb-5">@lang('main.provide_service')</p>

                        <a href="{{route('main.service.index')}}" class="btn btn-main-2 btn-round-full btn-icon">@lang('main.services')<i class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section ">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3">{{$users}}</span>
                            <p>@lang('main.happy_people')</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3">{{$treatments}}</span>+
                            <p>@lang('main.treatment')</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3">{{$doctors}}</span>+
                            <p>@lang('main.doctors')</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3">{{$hospitals}}</span>
                            <p>@lang('main.hospitals')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section service gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>@lang('main.award_care')</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>@lang('main.more_information')</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-laboratory text-lg"></i>
                            <h4 class="mt-3 mb-3">@lang('main.award_services.lab.label')</h4>
                        </div>

                        <div class="content">
                            <p class="mb-4">@lang('main.award_services.lab.text')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-heart-beat-alt text-lg"></i>
                            <h4 class="mt-3 mb-3">@lang('main.award_services.heart.label')</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">@lang('main.award_services.heart.text')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-tooth text-lg"></i>
                            <h4 class="mt-3 mb-3">@lang('main.award_services.dental.label')</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">@lang('main.award_services.dental.text')</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-crutch text-lg"></i>
                            <h4 class="mt-3 mb-3">@lang('main.award_services.body.label')</h4>
                        </div>

                        <div class="content">
                            <p class="mb-4">@lang('main.award_services.body.text')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-brain-alt text-lg"></i>
                            <h4 class="mt-3 mb-3">@lang('main.award_services.neurology.label')</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">@lang('main.award_services.neurology.text')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-dna-alt-1 text-lg"></i>
                            <h4 class="mt-3 mb-3">@lang('main.award_services.gynecology.label')</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">@lang('main.award_services.gynecology.text')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section testimonial-2 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>@lang('main.served')</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>@lang('main.know_more')</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 testimonial-wrap-2">
                    <div class="testimonial-block style-2  gray-bg">
                        <i class="icofont-quote-right"></i>

                        <div class="testimonial-thumb">
                            <img src="{{asset('assets/main/images/team/test-thumb1.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <div class="client-info ">
                            <h4>Amazing service!</h4>
                            <span>John Partho</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{asset('assets/main/images/team/test-thumb2.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Expert doctors!</h4>
                            <span>Mullar Sarth</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>

                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{asset('assets/main/images/team/test-thumb3.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Good Support!</h4>
                            <span>Kolis Mullar</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>

                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{asset('assets/main/images/team/test-thumb4.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Nice Environment!</h4>
                            <span>Partho Sarothi</span>
                            <p class="mt-4">
                                They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{asset('assets/main/images/team/test-thumb1.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Modern Service!</h4>
                            <span>Kolis Mullar</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            window.addEventListener('create',function(e){
                Swal.fire({
                    title: e.detail.title,
                    icon: e.detail.icon,
                    iconColor: e.detail.iconColor,
                    time: 3000,
                    toast: true,
                    position: 'top-right',
                    timerProgressBar: true,
                    showConfirmButton: false
                    , });
            })
        </script>
    @endpush
@endsection
