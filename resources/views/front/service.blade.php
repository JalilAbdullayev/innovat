@php use Illuminate\Support\Facades\Route;use Illuminate\Support\Facades\Storage; @endphp
@extends('front.master')
@section('title', $item->title)
@section('keywords', $item->keywords)
@section('description')
    @if($item->description)
        {{ $item->description }}
    @else
        {!! Str::limit($item->text) !!}
    @endif
@endsection
@section('content')
    <!-- breadcrumb rea start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread-crumb-area-inner text-white">
                    <div class="breadcrumb-top">
                        <a href="{{ route('home_'.session('locale')) }}">
                            Home
                        </a> /
                        <a href="{{ route('services_'.session('locale')) }}">
                            @if(Route::is('service_'.session('locale')))
                                {{ __('Services') }}
                            @elseif(Route::is('quality_'.session('locale')))
                                {{ __('Advantages') }}
                            @endif
                        </a> /
                        <span class="active">
                            {{ $item->where('lang', session('locale'))->first()->title }}
                        </span>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title text-white">
                            {{ $item->where('lang', session('locale'))->first()->title }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb rea end -->
    <!-- header three area end -->



    <!-- service details area start -->
    <div class="service-details-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pr--70 pr_md--10 pr_sm--10">
                    <!-- service left side bar area start -->
                    <div class="service-left-sidebar-wrapper">
                        <!-- service left sidebar single wized -->
                        <div class="service-left-sidebar-wized mb--50">
                            <div class="topa-rea">
                                <h4 class="title">
                                    @if(Route::is('service_'.session('locale')))
                                        {{ __('Other Services') }}
                                    @elseif(Route::is('quality_'.session('locale')))
                                        {{ __('Other Advantages') }}
                                    @endif
                                </h4>
                            </div>
                            <div class="body">
                                @foreach($others as $otherItem)
                                    <!-- single short service -->
                                    <a href="@if(Route::is('service_'.session('locale'), $otherItem->translate->where('lang', session('locale'))->first()->slug))
                                    {{ route('service_'.session('locale'), $otherItem->translate->where('lang', session('locale'))->first()->slug) }}
                                    @else {{ route('quality_'.session('locale'), $otherItem->translate->where('lang', session('locale'))->first()->slug) }} @endif"
                                       class="single-short-service">
                                        <p class="name">
                                            {{ $otherItem->translate->where('lang', session('locale'))->first()->title }}
                                        </p>
                                        <i class="fa-light fa-arrow-right"></i>
                                    </a>
                                    <!-- single short service end -->
                                @endforeach
                            </div>
                        </div>
                        <!-- service left sidebar single wized end -->
                        <!-- service left sidebar single wized -->
                        <div class="service-left-sidebar-wized">
                            <div class="topa-rea">
                                <span class="pre">
                                    {{ __('Contact') }}
                                </span>
                                <h4 class="title">
                                    {{ __("Let's start now!") }}
                                </h4>
                            </div>
                            <div class="body">
                                <!-- form area start -->
                                @include('front.components.form', ['class' => ''])
                                <!-- form area end -->
                            </div>
                        </div>
                        <!-- service left sidebar single wized end -->
                    </div>
                    <!-- service left side bar area end -->
                </div>
                <div class="col-lg-8 mt_md--50 mt_sm--50">
                    <!-- service -details right-content start -->
                    <div class="service-details-content-right">
                        <div class="large-image">
                            <img src="{{ asset(Storage::url($item->image)) }}" alt="{{ $item->title }}" class="w-50"/>
                        </div>
                        <h3 class="title-main-s text-white">
                            {{ $item->where('lang', session('locale'))->first()->title }}
                        </h3>
                        <p class="disc">
                            {!! $item->where('lang', session('locale'))->first()->text !!}
                        </p>
                    </div>
                    <!-- service -details right-content end -->
                </div>
            </div>
        </div>
    </div>
    <!-- service details area end -->
@endsection
