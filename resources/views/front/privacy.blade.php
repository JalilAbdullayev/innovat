@extends('front.master')
@section('title', 'Privacy Policy')
@section('content')
    <!-- bread croumba rea start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread-crumb-area-inner">
                    <div class="breadcrumb-top">
                        <a href="{{ route('home') }}">Home</a> /
                        <span class="active">Privacy Policy</span>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title">Privacy Policy</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->

    <!-- terms and condition area main -->
    <div class="terms-and-condition-wrapper rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="terms-wrapper-main">
                        <p class="disc">
                            {!! $privacy->text !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- terms and condition area main end -->
@endsection
