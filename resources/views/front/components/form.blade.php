<form action="{{ route('sendMessage') }}" method="POST" class="{{ $class }}">
    @csrf
    <p class="top-contact mb--20">
        Bizə yazın
    </p>
    <input type="text" name="name" placeholder="Adınız" required maxlength="255"/>
    @error('name')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <input type="tel" name="phone" placeholder="Telefon nömrəniz" required maxlength="20"/>
    @error('phone')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <input type="email" name="email" placeholder="E-mailiniz" required maxlength="255"/>
    @error('email')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <input type="text" name="subject" placeholder="Mövzu" maxlength="255"/>
    @error('subject')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <textarea name="message" placeholder="Mesajınız" required></textarea>
    @error('message')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <button type="submit" class="rts-btn btn-border mt-5">
        Göndər
    </button>
</form>
