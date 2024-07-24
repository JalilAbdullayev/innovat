@extends('admin.layouts.master')
@section('title', 'Haqqımızda')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/node_modules/dropify/dist/css/dropify.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('back/ckeditor/samples/css/samples.css') }}"/>
    <link rel="stylesheet" href="{{ asset('back/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}"/>
@endsection
@section('content')
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h4 class="text-white-50">
				@yield('title')
			</h4>
		</div>
		<div class="col-md-7 align-self-center text-end">
			<div class="d-flex justify-content-end align-items-center">
				<ol class="breadcrumb justify-content-end">
					<li class="breadcrumb-item">
						<a href="{{ route('admin.index') }}">
							Ana Səhifə
						</a>
					</li>
					<li class="breadcrumb-item active">
						@yield('title')
					</li>
				</ol>
			</div>
		</div>
	</div>
	<!-- End Bread crumb -->
	<form class="card" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="card-body">
			<div class="form-floating mb-3">
				<input type="text" class="form-control" name="title" id="title" placeholder="Başlıq" required
					   maxlength="255" value="{{ $about->title }}"/>
				<label for="title" class="form-label text-white-50">
					Başlıq
				</label>
			</div>
			@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			<div class="mb-3">
				<label for="text" class="form-label text-white-50">
					Mətn
				</label>
				<textarea class="form-control" name="text" id="text" required
						  placeholder="Mətn">{!! $about->text !!}</textarea>
			</div>
			@error('text')
			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			<div class="mb-3">
				<label for="image" class="form-label text-white-50">
					Şəkil
				</label>
				<input type="file" name="image" id="image" class="dropify" data-show-remove="false"
					   accept="image/jpeg, image/png, image/jpg, image/gif, image/svg"
					   data-default-file="{{ asset(Storage::url($about->image)) }}"/>
			</div>
			@error('image')
			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			<button type="submit" class="btn w-100 btn-primary text-white">
				Yadda saxla
			</button>
		</div>
	</form>
@endsection
@section('js')
	<script src="{{ asset("back/node_modules/dropify/dist/js/dropify.min.js") }}"></script>
	<script src="{{ asset('back/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('back/ckeditor/samples/js/sample.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
        const text = CKEDITOR.replace('text', {
            extraAllowedContent: 'div',
            height: 150,
            filebrowserImageBrowseUrl: '/admin/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/admin/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}',
            filebrowserBrowseUrl: '/admin/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/admin/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}',
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
