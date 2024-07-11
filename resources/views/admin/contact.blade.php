@extends('admin.layouts.master')
@section('title', 'Əlaqə')
@section('css')
    <style>
        textarea {
            height: 10rem !important;
        }
    </style>
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
    <form class="card" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Telefon" required
                       maxlength="20" value="{{ $contact->phone }}"/>
                <label for="phone" class="form-label text-white-50">
                    Telefon
                </label>
            </div>
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required
                       maxlength="255" value="{{ $contact->email }}"/>
                <label for="email" class="form-label text-white-50">
                    E-mail
                </label>
            </div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="address" id="address" placeholder="Ünvan" required
                       maxlength="255" value="{{ $contact->address }}"/>
                <label for="address" class="form-label text-white-50">
                    Ünvan
                </label>
            </div>
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <textarea class="form-control d-inline-block" name="map" id="map" placeholder="Xəritə"
                          required>{!! $contact->map !!}</textarea>
                <label for="map" class="form-label text-white-50">
                    Xəritə
                </label>
            </div>
            @error('map')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn w-100 btn-primary text-white">
                Yadda saxla
            </button>
        </div>
    </form>
@endsection
