@php use Illuminate\Support\Facades\Storage;use Illuminate\Support\Str; @endphp
@extends('front.master')
@section('title', 'Services')
@section('css')
    <style>
        .portfolio-grid-col-2-single h5 {
            font-size: 18px !important;
        }
    </style>
@endsection
@section('content')
    <!-- bread croumba rea start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread-crumb-area-inner">
                    <div class="breadcrumb-top">
                        <a href="{{ route('home') }}">
                            Home
                        </a> /
                        <span class="active">
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
    <!-- bread croumba rea end -->
    <!-- header three area end -->

    <!-- rts portfoliooa area inner page -->
    <div class="rts-portfolio-grid-col-2 rts-section-gap rts_portfolio_animation-wrapper">
        <div class="container">
            <div class="row g-80">
                @foreach($services as $service)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <!-- single portfolio grid col-2 -->
                        <div
                            class="portfolio-grid-col-2-single rts-portfolio__item d-flex justify-content-end flex-column h-100">
                            <a href="{{ route('service', $service->slug) }}" class="thumbnail h-auto">
                                <img src="{{ asset(Storage::url($service->image)) }}" alt="{{ $service->title }}"/>
                            </a>
                            <div class="inner-text">
                                <a href="{{ route('service', $service->slug) }}">
                                    <h5 class="title">
                                        {{ $service->title }}
                                    </h5>
                                </a>
                                <p class="disc">
                                    @if($service->description)
                                        {{ $service->description }}
                                    @else
                                        {!! Str::limit($service->text, 90) !!}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <!-- single portfolio grid col-2 end -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- rts portfoliooa area inner page end -->
    <!-- bread croumba rea start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread-crumb-area-inner">
                    <div class="bottom-title">
                        <h1 class="title">
                            Advantages
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->

    <!-- rts portfoliooa area inner page -->
    <div class="rts-portfolio-grid-col-2 rts-section-gap rts_portfolio_animation-wrapper">
        <div class="container">
            <div class="row g-80" id="qualities">
                @foreach($qualities as $quality)
                    <div class="col-md-6 col-sm-12 col-12">
                        <!-- single portfolio grid col-2 -->
                        <div class="portfolio-grid-col-2-single rts-portfolio__item">
                            <div class="inner-text">
                                <a href="{{ route('quality', $quality->slug) }}">
                                    <h5 class="title">
                                        {{ $quality->title }}
                                    </h5>
                                </a>
                                <p class="disc">
                                    @if($quality->description)
                                        {{ $quality->description }}
                                    @else
                                        {!! Str::limit($quality->text) !!}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <!-- single portfolio grid col-2 end -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- rts portfoliooa area inner page end -->
@endsection
