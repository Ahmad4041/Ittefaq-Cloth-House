{{-- Layout Here --}}
@extends('Layouts.Layout1')
@section('styles')
    <link rel="stylesheet" href="{{ asset('CSS/login.css') }}">
@endsection
{{-- Page Title --}}
@section('title', 'Sign-Up')
{{-- Main Section Of Page --}}
@section('content')
    <div class="container-fluid main-background">
        <div class="containerform">
            <img class="mainLogo d-block m-auto" src="{{ asset('Logo/IttefaqLogo.png') }}" alt="">
            {{-- Form --}}
            <form class="mt-5 mb-5" method="POST" action="">
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="input-group flex-nowrap maininp">
                            <span class="input-group-text" id="addon-wrapping">
                                <img id="vectors" src="{{ asset('vectors/vector.svg') }}" alt="">
                            </span>
                            <input type="email" id="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping">
                          </div>
                    </div>
                </div>
                <div class="row mt-3 mb-5">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="input-group flex-nowrap maininp">
                            <span class="input-group-text" id="addon-wrapping">
                                <img id="vectors" src="{{ asset('vectors/vector2.svg') }}" alt="">
                            </span>
                            <input type="password" id="pass" class="form-control" placeholder="password" aria-label="password" aria-describedby="addon-wrapping">
                          </div>
                    </div>
                </div>
                <input class="submitbtn mt-5" type="submit" value="Login">
                <h6 class="mt-3 text-center fs-6">
                    Forgot  Password ?
                    </h6>
                <h6 class="already mt-4" onclick="window.location='{{ url('/signup') }}'">Don’t have an account?  Sign up</h6>
            </form>
        </div>
    </div>
@endsection
