{{-- Layout Here --}}
@extends('Layouts.Layout1')
@section('styles')
    <link rel="stylesheet" href="{{ asset('CSS/register.css') }}">
@endsection
{{-- Page Title --}}
@section('title', 'Sign-Up')
{{-- Main Section Of Page --}}
@section('content')
    <div class="container-fluid main-background">
        <div class="containerform">
            <img class="mainLogo d-block m-auto" src="{{ asset('Logo/IttefaqLogo.png') }}" alt="">
            {{-- Form --}}
            <form class="mt-5 mb-5" action="">
                <h2>Sign Up</h2>
                <h5 class="fs-5">Enter your credentials to continue</h5>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <input type="text" name="fname" id="fname" placeholder="First name">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 mt-sm-3 mt-md-3 mt-lg-0">
                        <input type="text" name="lname" id="lname" placeholder="Last name">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 mt-sm-3 mt-md-3 mt-lg-0">
                        <input type="text" name="gender" id="gender" placeholder="Gender">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <input type="password" name="pass" id="pass" placeholder="Password">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 mt-sm-3 mt-md-3 mt-lg-0">
                        <input type="password" name="cpass" id="cpass" placeholder="Confirm Password">
                    </div>
                </div>
                <h6 class="mt-3 fs-6">By Continuing you agree to our Terms of Service and Privacy Policy.</h6>
                <input class="submitbtn mt-5" type="submit" value="Submit">
                <h6 class="already mt-4">Already have an account? Login</h6>
            </form>
        </div>
    </div>
@endsection
