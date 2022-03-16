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

                                    <a class="text-center" href=""><h4>Registration</h4></a>

                                    <form action="{{route('register')}}" method="POST" class="mt-5 mb-5 login-input">
                                        @csrf
                                        <div class="form-group">
                                            <input name="login" type="text" class="form-control" placeholder="Login"
                                                  value="{{old('login')}}" required>
                                        </div>
                                        @error('name')
                                        <label>{{$message}}</label>
                                        @enderror
                                        <div class="form-group">
                                            <input name="first_name" type="text" class="form-control" placeholder="First Name"
                                                   value="{{old('first_name')}}" required>
                                        </div>
                                        @error('first_name')
                                        <label>{{$message}}</label>
                                        @enderror
                                        <div class="form-group">
                                            <input name="second_name" type="text" class="form-control" placeholder="Second Name"
                                                   value="{{old('second_name')}}" required>
                                        </div>
                                        @error('second_name')
                                        <label>{{$message}}</label>
                                        @enderror
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" placeholder="Email"
                                                  value="{{old('email')}}" required>
                                        </div>
                                        @error('email')
                                        <label>{{$message}}</label>
                                        @enderror
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control"
                                                   placeholder="Password" required>
                                        </div>
                                        @error('password')
                                        <label>{{$message}}</label>
                                        @enderror
                                        <div class="form-group">
                                            <input name="password_confirmation" type="password" class="form-control"
                                                   placeholder="Password Confirmation" required>
                                        </div>
                                        @error('password_confirmation')
                                        <label>{{$message}}</label>
                                        @enderror
                                        <button class="btn login-form__btn submit w-100">Sign in</button>
                                    </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="{{route('login')}}"
                                                                                       class="text-primary">Sign Up </a>
                                        now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
