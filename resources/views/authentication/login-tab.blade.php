<div class="tab-pane login-tab fade show active" id="login-tab" role="tabpanel">
    <h3 class="item-title">{{ __('Login') }} <span></span></h3>
    <div class="google-signin">
        <a href="#"><img src="{{ asset('website/media/figure/google-icon.png')}}" alt="Google">Google Sign in</a>
    </div>
    <form method="POST" action="{{ route('login', app()->getLocale()) }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" required autocomplete="email"
                autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @if (Route::has('password.request'))
            <div class="form-group reset-password">
                <a href="{{ route('password.request', app()->getLocale()) }}">* {{ __('Forgot Your Password?') }}</a>
            </div>
        @endif
        <div class="form-group mb-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</a></label>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="login-btn" class="submit-btn" value="{{ __('Login') }}">
        </div>
    </form>
    <!-- <div class="account-create">
Don't have an account yet? <a href="#registration-tab">Sign Up Now</a>
</div> -->
</div>
