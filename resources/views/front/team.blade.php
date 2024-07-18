@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.master')
@section('title', 'Our Team')
@section('content')
    <!-- bread croumba rea start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread-crumb-area-inner">
                    <div class="breadcrumb-top">
                        <a href="{{ route('home') }}">Home</a> /
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


    <div class="rts-team-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="title-style-center">
                        <h2 class="title">Meet Our Talented Team</h2>
                        <p class="disc">
                            we are proud to have a dedicated and skilled team of professionals <br>
                            who are passionate about interior renovation and design.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt--30 g-24">
                @foreach($team as $member)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- team area start -->
                        <div class="team-area-start-one">
                            <span class="thumbnail">
                                <img src="{{ asset(Storage::url($member->image)) }}" alt="{{ $member->name }}"/>
                            </span>
                            <div class="team-content">
                                <div class="name-area">
                                    <h6 class="name text-start">
                                        {{ $member->name }}
                                    </h6>
                                    <span class="desig pl--0">
                                        {{ $member->position }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- team area end -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
