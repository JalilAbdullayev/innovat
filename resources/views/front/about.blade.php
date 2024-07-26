@extends('front.master')
@section('title', 'About Us')
@section('css')
    <style>
        .title-style-left img {
            object-fit: contain;
        }
    </style>
@endsection
@section('content')
    <!-- about  page top history information  -->
    <div class="about-top-history-information rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt_sm--50 py-5">
                    <div class="history-right-area-inner">
                        <p class="disc rts-slide-up">
                        <h2 class="title">
                            <em>
                                {{ $about->title }}
                            </em>
                        </h2>
                        <p>
                            {!! $about->text !!}
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="title-style-left py-5 h-100">
                        <img src="{{ asset(Storage::url($about->image)) }}" alt="" class="h-100"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about  page top history information end -->
@endsection
