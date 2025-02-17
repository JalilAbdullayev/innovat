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
            <ul class="nav nav-tabs customtab2" role="tablist">
                @foreach($contact->translate()->orderBy('lang')->get() as $index => $lang)
                    <li class="nav-item">
                        <a class="nav-link @if($index === 0) active @endif" data-bs-toggle="tab"
                           href="#{{ $lang->lang }}" role="tab">
                            <span class="hidden-xs-down">
                                @if($lang->lang === 'en')
                                    English
                                @elseif($lang->lang === 'ru')
                                    Русский
                                @else
                                    Azərbaycanca
                                @endif
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach($contact->translate()->orderBy('lang')->get() as $index => $tcontact)
                    <div class="tab-pane p-20 @if($index === 0) active @endif" id="{{ $tcontact->lang }}"
                         role="tabpanel">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="address[]" id="address" placeholder="Ünvan"
                                   maxlength="255" value="{{ $tcontact->address }}" required/>
                            <label for="address" class="form-label text-white-50">
                                Ünvan
                            </label>
                        </div>
                        <input type="hidden" name="lang[]" value="{{ $tcontact->lang }}"/>
                    </div>
                @endforeach
            </div>
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
                <input type="url" class="form-control" name="facebook" id="facebook" placeholder="Facebook" required
                       maxlength="255" value="{{ $contact->facebook }}"/>
                <label for="facebook" class="form-label text-white-50">
                    Facebook
                </label>
            </div>
            @error('facebook')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="url" class="form-control" name="instagram" id="instagram" placeholder="Instagram" required
                       maxlength="255" value="{{ $contact->instagram }}"/>
                <label for="instagram" class="form-label text-white-50">
                    Instagram
                </label>
            </div>
            @error('instagram')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="url" class="form-control" name="linkedin" id="linkedin" placeholder="LinkedIn" required
                       maxlength="255" value="{{ $contact->linkedin }}"/>
                <label for="linkedin" class="form-label text-white-50">
                    LinkedIn
                </label>
            </div>
            @error('linkedin')
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
