@php use Illuminate\Support\Facades\Route;use Illuminate\Support\Facades\Storage; @endphp
@extends('front.master')
@section('title', $item->title)
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
						<a href="{{ route('services') }}">
							@if(Route::is('service'))
								Xidmətlərimiz
							@elseif(Route::is('quality'))
								Keyfiyyətlərimiz
							@endif
						</a> /
						<span class="active">
                            {{ $item->title }}
                        </span>
					</div>
					<div class="bottom-title">
						<h1 class="title">
							{{ $item->title }}
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- bread croumba rea end -->
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
									@if(Route::is('service'))
										Bütün Xidmətlərimiz
									@elseif(Route::is('quality'))
										Digər Keyfiyyətlərimiz
									@endif
								</h4>
							</div>
							<div class="body">
								@foreach($others as $otherItem)
									<!-- inglle short service -->
									<a href="{{ route('service', $otherItem->slug) }}"
									   class="single-short-service">
										<p class="name">
											{{ $otherItem->title }}
										</p>
										<i class="fa-light fa-arrow-right"></i>
									</a>
									<!-- inglle short service end -->
								@endforeach
							</div>
						</div>
						<!-- service left sidebar single wized end -->
						<!-- service left sidebar single wized -->
						<div class="service-left-sidebar-wized">
							<div class="topa-rea">
                                <span class="pre">
                                    Əlaqə
                                </span>
								<h4 class="title">
									Elə indi başlayaq!
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
						<h3 class="title-main-s">
							{{ $item->title }}
						</h3>
						<p class="disc">
							{!! $item->text !!}
                        </p>
                    </div>
                    <!-- service -details right-content end -->
                </div>
            </div>
        </div>
    </div>
    <!-- service details area end -->
@endsection
