{{-- Layout Here --}}
@extends('Layouts.Layout1')
{{-- Custom CSS Here --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('CSS/womens.css') }}">
@endsection
{{-- Page Title --}}
@section('title', 'Explore New Arrival-Womens')
{{-- Main Section Of Page --}}
@section('content')
    <div class="container-fluid">
        {{-- Nav --}}
        @include('widget.NavWomen')
    </div>
    {{-- Banner Starts --}}
    <div class="banner_men mt-5">
        <img class="img-fluid w-100" src="{{ asset('Banner/longshirtbanner.png') }}" alt="">
    </div>
    {{-- Banner Ends --}}
    {{-- Content One --}}
    <div class="contentOne mt-5">
        <h1 class="MainHeadingEid">Long Shirts</h1>
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt1.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt2.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt3.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt3.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt1.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt2.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt2.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt3.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt1.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt1.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt3.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt2.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt2.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt1.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirt3.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Luxury Lawn ‘ 23</h2>
                    </div>
                </div>
            </div>
        </div>
            {{-- Banner Starts --}}
    <div class="banner_men mt-5">
        <img class="img-fluid w-100" src="{{ asset('Banner/longshirtbannerbottom.png') }}" alt="">
    </div>
    {{-- Banner Ends --}}
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirtbottom1.png') }}" alt="Profile">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/longshirtbottom2.png') }}" alt="Profile">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Footer --}}
    @include('widget.footer')
@endsection
