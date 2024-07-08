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
                        <img src="{{ Storage::url($about->image) }}" alt="about">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-right-inner-five rts-slide-up">
                        <div class="title-area-style-five-left">
                            <h2 class="title">
                                {{ $about->title }}
                            </h2>
                        </div>
                        <p class="disc-1">
                            {!! $about->text !!}
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
                        <!-- single-service staert -->
                        <div class="single-service-style-five">
                            <div class="icon-area">
                                <img src="{{ Storage::url($service->image) }}" alt="" class="position-relative"
                                     style="z-index: 10"/>
                            </div>
                            <div class="body">
                                <a>
                                    <h6 class="title">
                                        {{ $service->title }}
                                    </h6>
                                </a>
                                <p class="disc">
                                    {!! $service->text !!}
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
                                    }
                                </style>
                                <span>0{{ $index + 1 }}</span>
                                <h4 class="title">
                                    {{ $quality->title }}
                                </h4>
                                <p class="disc">
                                    {!! $quality->text !!}
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

    <!-- contact onepage -->
    <div class="contact-onepage" id="get-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-about-right-area-eight bottom-1 rts-section-separator-right">
                        <div class="title-style-left mb--30">
                            <h3 class="title animated fadeIn">
                                Bizimlə Əlaqə
                            </h3>
                        </div>
                        <form action="{{ route('sendMessage') }}" method="POST" class="form-8">
                            @csrf
                            <input type="text" name="name" placeholder="Adınız" required maxlength="255"/>
                            <input type="tel" name="phone" placeholder="Telefon nömrəniz" required maxlength="20"/>
                            <input type="email" name="email" placeholder="E-mailiniz" required maxlength="255"/>
                            <input type="text" name="subject" placeholder="Mövzu" maxlength="255"/>
                            <textarea name="message" placeholder="Mesajınız" required></textarea>
                            <button type="submit" class="rts-btn btn-border">
                                Göndər
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact onepage end -->
@endsection
