@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.master')
@section('title', 'Ana Səhifə')
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
                                {{ $settings->title }}
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
                            Welcome to {{ $settings->title }}
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-right-inner-five rts-slide-up">
                        <p class="disc-1">
                            {{ $settings->description }}
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
                                Xidmətlərimiz
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt--20 mt_sm--0 g-5 rts-slide-up">
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- single-service start -->
                        <div class="single-service-style-five d-flex justify-content-end flex-column h-100">
                            <div class="icon-area h-auto">
                                <img src="{{ asset(Storage::url($service->image)) }}" alt=""/>
                            </div>
                            <div class="body">
                                <a href="{{ route('service', $service->slug) }}">
                                    <h6 class="title">
                                        {{ $service->title }}
                                    </h6>
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
                            Keyfiyyətlərimiz
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30 separetor-process-top">
                @foreach($qualities as $index => $quality)
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 pt--50 pt_sm--0 pt_sm--0">
                        <!-- single working process start -->
                        <div class="single-working-prcess-one @if($index == 0) active @endif">
                            <div class="inner inner-{{ $index }}">
                                <style>
                                    .single-working-prcess-one .inner-{{ $index }}::after {
                                        background-image: url("{{ asset(Storage::url($quality->image)) }}");
                                        background-position: center;
                                    }

                                    .single-working-prcess-one .inner-{{ $index }}::before {
                                        content: "";
                                        display: block;
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        width: 100%;
                                        height: 100%;
                                        background-color: rgba(255, 255, 255, 0.1);
                                    }

                                    .inner p {
                                        color: rgb(0, 0, 0);
                                        transition: .3s;
                                    }

                                    .single-working-prcess-one:hover .inner p {
                                        color: rgba(255, 255, 255);
                                    }
                                </style>
                                <span>0{{ $index + 1 }}</span>
                                <a href="{{ route('quality', $quality->slug) }}" class="title">
                                    {{ $quality->title }}
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
                        <!-- single working process end -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- our woring process area end -->
@endsection
