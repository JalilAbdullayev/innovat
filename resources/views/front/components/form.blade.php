<form action="{{ route('sendMessage') }}" method="POST" class="{{ $class }}">
    @csrf
    <p class="top-contact mb--20 text-white">
        {{ __('Text Us') }}
    </p>
    <input type="text" name="name" placeholder="Name" required maxlength="255" class="text-white"/>
    @error('name')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <input type="tel" name="phone" placeholder="Phone number" required maxlength="20" class="text-white"/>
    @error('phone')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <input type="email" name="email" placeholder="E-mail" required maxlength="255" class="text-white"/>
    @error('email')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <input type="text" name="subject" placeholder="Subject" maxlength="255" class="text-white"/>
    @error('subject')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <textarea name="message" placeholder="Message" required class="text-white"></textarea>
    @error('message')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <button type="submit" class="rts-btn btn-border mt-5 text-white border-white">
        Send
    </button>
</form>
