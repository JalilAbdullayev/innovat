@php use Illuminate\Support\Facades\Storage; @endphp
@extends('admin.layouts.master')
@section('title', 'Keyfiyyətlər')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"/>
    <link rel="stylesheet" href="{{ asset('back/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css') }}"/>
@endsection
@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
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
				<a href="{{ route('admin.qualities.create') }}"
				   class="btn btn-primary d-none d-lg-block m-l-15 text-white"><i
							class="ti-plus"></i> Yeni Keyfiyyət
				</a>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="table-responsive">
		<table id="myTable" class="table table-striped border">
			<thead>
			<tr>
				<th>
					Ad
				</th>
				<th>
					Şəkil
				</th>
				<th>
					Əməliyyatlar
				</th>
			</tr>
			</thead>
			<tbody>
			@foreach($data as $item)
				<tr id="{{ $item->id }}">
					<td>
						{{ $item->translate->where('lang', session('locale'))->first()->title }}
					</td>
					<td>
						<img src="{{ asset(Storage::url($item->image)) }}" alt="" class="w-25"/>
					</td>
					<td>
						<a href="{{ route('admin.qualities.edit', $item->id) }}" class="btn btn-outline-warning">
							<i class="ti-pencil-alt"></i>
						</a>
						<button class="btn btn-outline-danger">
							<i class="ti-trash"></i>
						</button>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection
@section('js')
	<script src="{{asset("back/node_modules/datatables.net/js/jquery.dataTables.min.js")}}"></script>
	<script src="{{asset("back/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js")}}"></script>
	<script>
        $('#myTable').DataTable({
            ordering: false
        });
        $('.btn-outline-danger').click(function() {
            let id = $(this).closest('tr').attr('id');
            $.ajax({
                url: '{{ route('admin.qualities.delete', ':id') }}'.replace(':id', id),
                async: false,
                success: function() {
                    $('tr#' + id + '').remove();
                },
                error: function() {
                    alert('error');
                }
            })
        });
    </script>
@endsection
