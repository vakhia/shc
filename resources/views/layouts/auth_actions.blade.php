<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
    <title>$title</title>
</head>
<body>
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<div class="h-100">
    @yield('content')
</div>
<script src="{{asset('assets/admin/plugins/common/common.min.js')}}"></script>
<script src="{{asset('assets/admin/js/custom.min.js')}}"></script>
<script src="{{asset('assets/admin/js/settings.js')}}"></script>
<script src="{{asset('assets/admin/js/gleek.js')}}"></script>
<script src="{{asset('assets/admin/js/styleSwitcher.js')}}"></script>
</body>
</html>
