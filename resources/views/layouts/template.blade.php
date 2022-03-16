<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novena</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/main/images/favicon.ico')}}" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('assets/main/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{asset('assets/main/plugins/icofont/icofont.min.css')}}">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{asset('assets/main/plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/main/plugins/slick-carousel/slick/slick-theme.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/main/css/style.css')}}">
</head>
<body id="top">

<header>
    @include('sweetalert::alert')
    @include('main.includes.navbar')
</header>
<main>
    @yield('content')
</main>
<!-- footer Start -->
<footer class="footer section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <img src="{{asset('assets/main/images/logo.png')}}" alt="" class="img-fluid">
                    </div>
                    <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

                    <ul class="list-inline footer-socials mt-4">
                        <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Support</h4>
                    <div class="divider mb-4"></div>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Company Support </a></li>
                        <li><a href="#">FAQuestions</a></li>
                        <li><a href="#">Company Licence</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Get in Touch</h4>
                    <div class="divider mb-4"></div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <span class="h6 mb-0">Support Available for 24/7</span>
                        </div>
                        <h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
                    </div>

                    <div class="footer-contact-block">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-support mr-3"></i>
                            <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                        </div>
                        <h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm py-4 mt-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="copyright">
                        &copy; Copyright Reserved to <span class="text-color">Novena</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                        <form action="#" class="subscribe">
                            <input type="text" class="form-control" placeholder="Your Email address">
                            <a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <a class="backtop js-scroll-trigger" href="#top">
                        <i class="icofont-long-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>



<!--
Essential Scripts
=====================================-->


<!-- Main jQuery -->
<script src="{{asset('assets/main/plugins/jquery/jquery.js')}}"></script>
<!-- Bootstrap 4.3.2 -->
<script src="{{asset('assets/main/plugins/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('assets/main/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/main/plugins/counterup/jquery.easing.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('assets/main/plugins/slick-carousel/slick/slick.min.js')}}"></script>
<!-- Counterup -->
<script src="{{asset('assets/main/plugins/counterup/jquery.waypoints.min.js')}}"></script>

{{--<script src="{{asset('assets/main/plugins/shuffle/shuffle.min.js')}}"></script>--}}
<script src="{{asset('assets/main/plugins/counterup/jquery.counterup.min.js')}}"></script>
<!-- Google Map -->
{{--<script src="{{asset('assets/main/plugins/google-map/map.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>--}}

<script src="{{asset('assets/main/js/script.js')}}"></script>
<script src="{{asset('assets/main/js/contact.js')}}"></script>

</body>
</html>
