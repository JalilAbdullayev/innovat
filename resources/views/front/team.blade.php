@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.master')
@section('title', __('Our Team'))
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


	<div class="rts-team-area rts-section-gap">
		<div class="container">
			<div class="row mt--30 g-24">
				@foreach($team as $member)
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<!-- team area start -->
						<div class="team-area-start-one">
                            <span class="thumbnail">
                                <img src="{{ asset(Storage::url($member->image)) }}" alt="{{
                                $member->translate->where('lang', session('locale'))->first()->name }}"/>
                            </span>
							<div class="team-content">
								<div class="name-area">
									<h6 class="name text-start text-white">
										{{ $member->translate->where('lang', session('locale'))->first()->name }}
									</h6>
									<span class="desig pl--0 text-white">
                                        {{ $member->translate->where('lang', session('locale'))->first()->position }}
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
