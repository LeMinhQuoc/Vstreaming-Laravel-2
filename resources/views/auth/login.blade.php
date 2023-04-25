Login
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">{{ __('Email Address') }}</label>

        <div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span>
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>

        <div>
            <input id="password" type="password" name="password" required autocomplete="current-password">

            @error('password')
            <span>
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div>
        <div>
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>

    <div>
        <button type="submit">
            {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        @endif
    </div>
</form>
``