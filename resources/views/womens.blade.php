{{-- Layout Here --}}
@extends('Layouts.Layout1')
{{-- Custom CSS Here --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('CSS/womens.css') }}">
@endsection
{{-- Page Title --}}
@section('title', 'Home-Womens')
{{-- Main Section Of Page --}}
@section('content')
    <div class="container-fluid">
        {{-- Nav --}}
        @include('widget.NavWomen')
    </div>
    {{-- Banner Starts --}}
    <div class="banner_men mt-5">
        <img class="img-fluid w-100" src="{{ asset('Banner/womens1banner.png') }}" alt="">
    </div>
    {{-- Banner Ends --}}
    {{-- Content One --}}
    <div class="contentOne mt-5">
        <h1 class="MainHeadingEid">Eid Festive Wear</h1>
        <div class="container mt-5">
            {{-- Carsousel  1 --}}
            <div id="carouselExampleFade1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active"><div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-1.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-2.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-3.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                        </div>
                    </div>
                </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-4.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-5.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-6.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-8.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-1.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-3.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              {{-- Carsousel Ends Here --}}
            </div>

            <h1 class="MainHeadingEid mt-5">Summer Lawn</h1>
        <div class="container mt-5">
            {{-- Carsousel  2 --}}
            <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active"><div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-3.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-1.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-2.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                        </div>
                    </div>
                </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-6.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-4.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-5.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-1.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-3.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-8.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              {{-- Carsousel Ends Here --}}
        </div>

        <h1 class="MainHeadingEid mt-5">Best Seller</h1>
        <div class="container mt-5">
            {{-- Carsousel  3 --}}
            <div id="carouselExampleFade3" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active"><div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-2.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-3.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-1.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                        </div>
                    </div>
                </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-6.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-4.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-5.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-1.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-3.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-8.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              {{-- Carsousel Ends Here --}}
        </div>

        <h1 class="MainHeadingEid mt-5">Explore New Arrivals</h1>
        <div class="container mt-5">
            {{-- Carsousel  4 --}}
            <div id="carouselExampleFade4" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active"><div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-3.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-1.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="thiscard">
                            <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-2.png') }}" alt="Profile">
                            <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                        </div>
                    </div>
                </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-5.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-4.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-6.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-3.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-8.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 40% Off</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="thiscard">
                                <img class="w-100 img-fluid" src="{{ asset('WoMensCategory/womens1-1.png') }}" alt="Profile">
                                <h2 class="text-center p-2 fs-4">Upto 60% Off</h2>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade4" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade4" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              {{-- Carsousel Ends Here --}}
        </div>
    </div>
    {{-- Footer --}}
    @include('widget.footer')
@endsection
