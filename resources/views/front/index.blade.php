@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.master')
@section('title', 'Home')
@section('content')
    <!-- rts banner top-area -->
    <div class="rts-banner-top-area pt--100 pt_sm--50" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- banner-top-five start -->
                    <div class="banner-top-five">
                        <div class="left-area">
                            <h1 class="title rts_hero__title">
                                {{ $settings->translate->where('lang', session('locale'))->first()->title }}
                            </h1>
                        </div>
                    </div>
                    <!-- banner-top-five end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner top-area end -->
    <!-- about area start -->
    <div class="about-area-one rts-section-gap" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="thumbnail-about-five">
                        <h2 class="title">
                            Welcome to {{ $settings->translate->where('lang', session('locale'))->first()->title }}
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-right-inner-five rts-slide-up">
                        <p class="disc-1">
                            {{ $settings->translate->where('lang', session('locale'))->first()->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->
    <!-- servce area start -->
    <div class="service-area-start rts-service-area rts-section-gapBottom" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 rts-slide-up">
                    <div class="service-full-top-wrapper">
                        <!-- title-left -->
                        <div class="title-area-style-five-left">
                            <h2 class="title">
                                Services
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--20 mt_sm--0 g-5 rts-slide-up">
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- single-service start -->
                        <div class="single-service-style-five d-flex justify-content-end flex-column h-100">
                            <div class="icon-area h-auto">
                                <img src="{{ asset(Storage::url($service->image)) }}" alt=""/>
                            </div>
                            <div class="body">
                                <a href="{{ route('service_'.session('locale'), $service->translate->where('lang', session('locale'))->first()->slug) }}">
                                    <h6 class="title">
                                        {{ $service->translate->where('lang', session('locale'))->first()->title }}
                                    </h6>
                                </a>
                                <p class="disc">
                                    @if($service->translate->where('lang', session('locale'))->first()->description)
                                        {{ $service->translate->where('lang', session('locale'))->first()->description }}
                                    @else
                                        {!! Str::limit($service->translate->where('lang', session('locale'))->first()->text, 90) !!}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <!-- single-service end -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- servce area end -->
    <!-- our woring process area start -->
    <div class="our-working-process rts-section-gapBottom" id="quality">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-process-stock-text">
                        <h2 class="stock-text-1 end">
                            Advantages
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30 separetor-process-top">
                @foreach($qualities as $index => $quality)
                    <div class="col-lg-3 col-md-6 col-12 pt--50 pt_sm--0 pt_sm--0">
                        <!-- single working process start -->
                        <div class="single-working-prcess-one @if($index == 0) active @endif">
                            <div class="inner inner-{{ $index }}">
                                <style>
                                    .single-working-prcess-one {
                                        .inner-{{ $index }}        {
                                            &::after {
                                                background-image: url("{{ asset('public'.Storage::url($quality->image)) }}");
                                                background-position: center;
                                            }

                                            &::before {
                                                content: "";
                                                display: block;
                                                position: absolute;
                                                top: 0;
                                                left: 0;
                                                width: 100%;
                                                height: 100%;
                                                background-color: rgba(255, 255, 255, 0.1);
                                            }
                                        }
                                    }
                                </style>
                                <span>0{{ $index + 1 }}</span>
                                <a href="{{ route('quality_'.session('locale'), $quality->translate->where('lang', session('locale'))->first()->slug) }}"
                                   class="title">
                                    {{ $quality->translate->where('lang', session('locale'))->first()->title }}
                                </a>
                                <p class="disc text-black">
                                    @if($quality->translate->where('lang', session('locale'))->first()->description)
                                        {{ $quality->translate->where('lang', session('locale'))->first()->description }}
                                    @else
                                        {!! Str::limit($quality->translate->where('lang', session('locale'))->first()->text) !!}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <!-- single working process end -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- our woring process area end -->
@endsection
