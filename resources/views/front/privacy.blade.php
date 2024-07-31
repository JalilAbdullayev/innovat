@extends('front.master')
@section('title', __('Privacy Policy'))
@section('content')
	<!-- bread croumba rea start -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bread-crumb-area-inner text-white">
					<div class="breadcrumb-top">
						<a href="{{ route('home_'.session('locale')) }}">Home</a> /
						<span class="active">
                            {{ __('Privacy Policy') }}
                        </span>
					</div>
					<div class="bottom-title">
						<h1 class="title text-white">
                            {{ __('Privacy Policy') }}
                        </h1>
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
						<p class="disc text-white">
							{!! $privacy->translate->where('lang', session('locale'))->first()->text !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- terms and condition area main end -->
@endsection
