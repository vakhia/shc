@extends('layouts.auth_actions')
@section('content')
    <div style="margin-top:15rem">
        <div class="login-form-bg h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100">
                    <div class="col-xl-6">
                        <div class="form-input-content">
                            <div class="card login-form mb-0">
                                <div class="card-body pt-5">
                                    <a class="text-center" href=""><h4>Login</h4></a>
                                    <form action="{{route('login')}}" method="POST" class="mt-5 mb-5 login-input">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="email">
                                        </div>
                                        @error('email')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password"
                                                   name="password">
                                        </div>
                                        @error('password')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                        <div class="form-group">
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                        </div>
                                        @error('g-recaptcha-response')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                        <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                                    </form>
                                    <p class="mt-5 login-form__footer">Dont have account? <a
                                            href="{{route('register')}}" class="text-primary">Sign Up</a> now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

