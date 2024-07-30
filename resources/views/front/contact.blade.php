@extends('front.master')
@section('title', __('Contact'))
@section('css')
    <style>
        .bg_image {
            background-image: url("{{ asset('front/images/nicholas-doherty-pONBhDyOFoM-unsplash.jpg') }}");
        }

        .left-contact img {
            border-radius: 35%;
        }
    </style>
@endsection
@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="{{ route('home_'.session('locale')) }}">
                                {{ __('Home') }}
                            </a>
                            <span class="text-white"> / </span>
                            <span class="active text-white">
                                @yield('title')
                            </span>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">
                                @yield('title')
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <div class="contact-info-area-start rts-section-gapTop">
        <div class="container">
            <div class="row mt--0 g-5">
                <div class="col-md-6">
                    <div class="left-contact">
                        <img src="{{ asset('front/images/contact.jpg') }}" alt=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    @include('front.components.form', ['class' => 'contact-form-conatct-page'])
                </div>
                <div class="text-center" id="contact">
                    <p class="fs-3">
                        {{ $contact->address }}
                    </p>
                    <a class="d-block text-decoration-underline"
                       href="tel:{{ preg_replace('/\s+/','', $contact->phone) }}">
                        {{ $contact->phone }}
                    </a>
                    <a class="d-block text-decoration-underline" href="mailto:{{ $contact->email }}">
                        {{ $contact->email }}
                    </a>
                </div>
            </div>
        </div>
        <div class="container mt--120">
            <div class="row">
                <div class="col-lg-12">
                    {!! $contact->map !!}
                </div>
            </div>
        </div>
    </div>
@endsection
