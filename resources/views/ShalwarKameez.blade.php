{{-- Layout Here --}}
@extends('Layouts.Layout1')
{{-- Custom CSS Here --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('CSS/men.css') }}">
@endsection
{{-- Page Title --}}
@section('title', 'Shalwar Kameez')
@section('content')
    <div class="container-fluid">
        {{-- Nav --}}
        @include('widget.Navbar')
    </div>
    {{-- Banner Starts --}}
    <div class="banner_men mt-5">
        <img class="img-fluid w-100" src="{{ asset('Banner/MENS2BANNER.png') }}" alt="">
    </div>
    {{-- Banner Ends --}}
    {{-- Content One --}}
    <div class="contentOne mt-4">
        <h1 class="MainHeadingEid">Shalwar Kameez</h1>
        <div class="container mt-5">
            {{-- Row 1 --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('MensCategory/Eidwear1.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('MensCategory/Eidwear2.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('MensCategory/Eidwear3.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                    </div>
                </div>
            </div>
            {{-- Row 2 --}}
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('MensCategory/Eidwear1.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('MensCategory/Eidwear3.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('MensCategory/Eidwear2.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                    </div>
                </div>
            </div>
            {{-- Row 3 --}}
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('MensCategory/Eidwear2.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('MensCategory/Eidwear3.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="thiscard">
                        <img class="w-100 img-fluid" src="{{ asset('MensCategory/Eidwear1.png') }}" alt="Profile">
                        <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Banner Starts --}}
    <div class="banner_men mt-5">
        <img class="img-fluid w-100" src="{{ asset('Banner/mens2bannerbottom.png') }}" alt="">
    </div>
    {{-- Banner Ends --}}
    {{-- Footer --}}
    @include('widget.footer')
@endsection
