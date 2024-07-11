@php use Illuminate\Support\Facades\Storage;use Illuminate\Support\Str; @endphp
@extends('front.master')
@section('title', 'Xidmətlərimiz')
@section('content')
    <!-- bread croumba rea start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread-crumb-area-inner">
                    <div class="breadcrumb-top">
                        <a href="{{ route('home') }}">
                            Ana Səhifə
                        </a> /
                        <span class="active">
							Xidmətlərimiz
						</span>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title">
                            Xidmətlərimiz
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
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <!-- single portfolio grid col-2 -->
                        <div class="portfolio-grid-col-2-single rts-portfolio__item">
                            <a href="{{ route('service', $service->slug) }}" class="thumbnail">
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
                                        {!! Str::limit($service->text) !!}
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
                            Keyfiyyətlərimiz
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
