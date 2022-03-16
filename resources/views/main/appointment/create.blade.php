@extends('layouts.template')
@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Book your Seat</span>
                        <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
                          <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                          <li class="list-inline-item"><span class="text-white">/</span></li>
                          <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="appoinment section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-3">
                        <div class="feature-icon mb-3">
                            <i class="icofont-support text-lg"></i>
                        </div>
                        <span class="h3">Call for an Emergency Service!</span>
                        <h2 class="text-color mt-3">+380 50 284 13 </h2>
                    </div>
                </div>
                @if(auth()->check())
                    <div class="col-lg-8">
                        <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                            <h2 class="mb-2 title-color">Book an appoinment</h2>
                            <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti
                                qui
                                velit . Iste dolorum atque similique praesentium soluta.</p>
                            <form class="appointment-form" action="{{route('main.appointment.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="hospital_id" class="form-control"
                                                    id="exampleFormControlSelect1">
                                                @foreach($hospitals as $hospital)
                                                    <option
                                                        {{$hospital->id === old('hospital_id') ? 'selected' : ' '}}
                                                        value="{{$hospital->id}}">{{$hospital->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('hospital_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="staff_id" class="form-control" id="exampleFormControlSelect2">
                                                @foreach($users as $user)
                                                    <option
                                                        {{$user->id === old('staff_id') ? 'selected' :' '}}
                                                        value="{{$user->id}}">{{$user->first_name.' '.$user->second_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('staff_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="date_of_appointment" id="date" type="date" class="form-control"
                                                   value="{{old('date_of_appointment')}}"
                                                   placeholder="dd/mm/yyyy">
                                        </div>
                                        @error('date_of_appointment')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="time_of_appointment" id="time" type="time" class="form-control"
                                                   value="{{old('time_of_appointment')}}"
                                                   placeholder="Time">
                                        </div>
                                        @error('time_of_appointment')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6" style="display:none">
                                        <div class="form-group">
                                            <input name="user_id" id="user_id" type="text" class="form-control"
                                                   value="{{auth()->user()->id}}">
                                        </div>
                                        @error('user_id')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="full_name" id="name" type="text" class="form-control"
                                                   value="{{old('full_name')}}"
                                                   placeholder="Full Name">
                                        </div>
                                        @error('full_name')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="phone_number" id="phone" type="Number" class="form-control"
                                                   value="{{old('phone_number')}}"
                                                   placeholder="Phone Number">
                                        </div>
                                        @error('message')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group-2 mb-4">
                                <textarea name="message" id="message" class="form-control" rows="6"
                                          placeholder="Your Message">{{old('message')}}</textarea>
                                    @error('message')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-main btn-round-full">Make Appoinment<i
                                        class="icofont-simple-right ml-2"></i></button>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                        <h2 class="mb-2 title-color">Oh,something went wrong!</h2>
                        <p class="mb-4">You need to be logged in to make an appointment!</p>
                    </div>
                @endif
            </div>
        </div>
        </div>
    </section>
    @push('script')
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
