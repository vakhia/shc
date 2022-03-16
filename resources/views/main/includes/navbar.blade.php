<nav class="navbar navbar-expand-lg navigation" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('main.home.index')}}">
            <img src="{{asset('assets/main/images/logo.png')}}" alt="" class="img-fluid">
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icofont-navigation-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarmain">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('main.home.index')}}">@lang('main.navbar.home')</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('main.about.index')}}">@lang('main.navbar.about')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('main.service.index')}}">@lang('main.navbar.service')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('main.hospital.index')}}">@lang('main.navbar.hospital')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('main.department.index')}}">@lang('main.navbar.department')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('main.staff.index')}}">@lang('main.navbar.staff')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('main.news.index')}}">@lang('main.navbar.news')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('main.locale.update',__('main.set_lang'))}}">@lang('main.set_lang')</a></li>
                @guest
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">@lang('main.navbar.login')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('register')}}">@lang('main.navbar.register')</a></li>
                @endguest
                @auth
                    <li class="nav-item"><a class="nav-link" href="{{route('profile.home.index')}}">@lang('main.navbar.profile')</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
