@php use Illuminate\Support\Facades\Route; @endphp
<form action="{{ route('sendMessage') }}" method="POST" class="{{ $class }}">
    @csrf
    <p class="top-contact mb--20 @if(Route::is('contact_' . session('locale'))) text-white @else text-black @endif">
        {{ __('Text Us') }}
    </p>
    <input type="text" name="name" placeholder="{{ __('Name')}}" required maxlength="255" class="@if(Route::is
    ('contact_' . session('locale')))
    text-white @else outline-green @endif"/>
    @error('name')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <input type="tel" name="phone" placeholder="{{ __('Phone number')}}" required maxlength="20" class="@if(Route::is
    ('contact_' . session('locale')))
    text-white @else outline-green @endif"/>
    @error('phone')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <input type="email" name="email" placeholder="{{ __('E-mail')}}" required maxlength="255"
           class="@if(Route::is('contact_' . session('locale'))) text-white @else outline-green @endif"/>
    @error('email')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <input type="text" name="subject" placeholder="{{ __('Subject')}}" maxlength="255" class="@if(Route::is('contact_'
	. session('locale')))
    text-white @else outline-green @endif"/>
    @error('subject')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <textarea name="message" placeholder="{{ __('Message')}}" required
              class="@if(Route::is('contact_' . session('locale'))) text-white @else outline-green @endif"></textarea>
    @error('message')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <button type="submit" class="rts-btn btn-border mt-5 @if(Route::is('contact_' . session('locale'))) text-white
    border-white @else border-green @endif">
        {{ __('Send')}}
    </button>
</form>
