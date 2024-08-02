@php use Illuminate\Support\Facades\Storage;use Illuminate\Support\Str; @endphp
@extends('front.master')
@section('title', __('Services'))
@section('content')
    <!-- bread croumba rea start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread-crumb-area-inner text-white">
                    <div class="breadcrumb-top">
                        <a href="{{ route('home_'.session('locale')) }}">
                            {{ __('Home') }}
                        </a> /
                        <span class="active">
							@yield('title')
						</span>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title text-white">
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
                            <a href="{{ route('service_'.session('locale'), $service->translate->where('lang', session('locale'))->first()->slug) }}"
                               class="thumbnail h-auto">
                                <img src="{{ asset(Storage::url($service->image)) }}"
                                     alt="{{ $service->translate->where('lang', session('locale'))->first()->title }}"/>
                            </a>
                            <div class="inner-text service-text mt-0 p-3">
                                <a href="{{ route('service_'.session('locale'), $service->translate->where('lang', session('locale'))->first()->slug) }}"
                                   class="d-flex align-items-center">
                                    <h5 class="title text-white">
                                        {{ $service->translate->where('lang', session('locale'))->first()->title }}
                                    </h5>
                                </a>
                                <p class="disc m-0">
                                    @if($service->translate->where('lang', session('locale'))->first()->description)
                                        {{ $service->translate->where('lang', session('locale'))->first()->description }}
                                    @else
                                        {!! Str::limit($service->translate->where('lang', session('locale'))->first()->text, 90) !!}
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
                        <h1 class="title text-white">
                            {{ __('Advantages') }}
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
                            <div class="inner-text quality-text">
                                <a href="{{ route('quality_'.session('locale'), $quality->translate->where('lang', session('locale'))->first()->slug) }}">
                                    <h5 class="title text-white">
                                        {{ $quality->translate->where('lang', session('locale'))->first()->title }}
                                    </h5>
                                </a>
                                <p class="disc m-0">
                                    @if($quality->translate->where('lang', session('locale'))->first()->description)
                                        {{ $quality->translate->where('lang', session('locale'))->first()->description }}
                                    @else
                                        {!! Str::limit($quality->translate->where('lang', session('locale'))->first()->text) !!}
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
