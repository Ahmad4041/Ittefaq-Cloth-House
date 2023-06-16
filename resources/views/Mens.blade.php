{{-- Layout Here --}}
@extends('Layouts.Layout1')
{{-- Custom CSS Here --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('CSS/men.css') }}">
@endsection
{{-- Page Title --}}
@section('title', 'Men')
{{-- Main Section Of Page --}}
@section('content')
    <div class="container-fluid">
        {{-- Nav --}}
        <div class="row navBar">
            <div class="col logo">
                <img src="{{ asset('Logo/IttefaqLogo.png') }}" alt="MainLogo">
            </div>
            <div class="col Buttons">
                <button class="btnwomen">Women</button>
                <button class="btnmen">Men</button>
            </div>
            <div class="col cartProf">
                <img src="{{ asset('Icons/Profile.png') }}" alt="Profile">
                <img src="{{ asset('Icons/Cart.png') }}" alt="Cart">
            </div>
        </div>
        {{-- Sub nav --}}
        <div class="subnav mt-3">
            <ul>
                <li><a>Shalwar Kameez</a></li>
                <li><a>Unstiched Fabric</a></li>
                <li><a>Kurta Set</a></li>
                <li><a>WaistCoat</a></li>
                <li><a>Sherwani</a></li>
            </ul>
        </div>
        {{-- Sub Nav Ends --}}
    </div>
    {{-- Banner Starts --}}
    <div class="banner_men mt-5">
        <img class="img-fluid w-100" src="{{ asset('Banner/MenBanner.png') }}" alt="">
    </div>
    {{-- Banner Ends --}}
    {{-- Content One --}}
    <div class="contentOne mt-4">
        <h1 class="MainHeadingEid">Eid Festive Wear</h1>
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
        </div>
    </div>
    {{-- Content Two --}}
    <div class="contentOne mt-5">
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
        </div>
    </div>
    {{-- Content Three --}}
    <div class="contentOne mt-5">
        <h1 class="MainHeadingEid">All Time Best Seller</h1>
        <div class="container mt-5">
            {{-- Row 1 --}}
            <div class="row">
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


    <footer class="mt-5 footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 mt-5">
                    <img src="{{ asset('Logo/IttefaqLogo.png') }}" alt="Logo">
                    <div class="d-flex mt-3">
                        <img class="footerIcons" src="{{ asset('Icons/EmailIcon.png') }}" alt="Email">
                        <a>Customercare@Ittefaq.pk</a>
                    </div>
                    <div class="d-flex mt-4">
                        <img class="footerIcons" src="{{ asset('Icons/PhoneIcon.png') }}" alt="Phone">
                        <a>+92 312 4888 828</a>
                    </div>
                    <div class="d-flex mt-4">
                        <img class="footerIcons" src="{{ asset('Icons/LocationIcon.png') }}" alt="Location">
                        <a>79 R1 Block , Johar Town
                            Phase 2, Lahore</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 Second-footer">
                    <h6 class="fs-5">HELP & INFORMATION</h6>
                    <a href="">Track Your Order</a><br>
                    <a href="">Shipping and Delivery</a><br>
                    <a href="">Return & Exchange Policy</a><br>
                    <a href="">Order & Refund Policy</a><br>
                    <a href="">FAQ's</a>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 Second-footer">
                    <h6 class="fs-5">MORE FROM ITTEFAQ</h6>
                    <a href="">Editorial Blog</a><br>
                    <a href="">Become a Seller</a><br>
                    <a href="">Rewards Program</a><br>
                    <a href="">E-Gift Cards</a><br>
                    <a href="">Bulk Purchase</a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 Second-footer">
                    <h6 class="fs-5">MAP LOCATION</h6>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.049610077428!2d74.2640725753834!3d31.467821449736878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391903d4d940f12b%3A0xdb8c83f6699d5226!2sEmporium%20Mall!5e0!3m2!1sen!2s!4v1686914599358!5m2!1sen!2s"
                        width="90%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <h6 class="text-center">2023 by SoftwareSystem.pk. All Rights Reserved.</h6>
            </div>
        </div>
    </footer>
@endsection
