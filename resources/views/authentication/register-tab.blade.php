<div class="tab-pane registration-tab fade" id="registration-tab" role="tabpanel">
    <h3 class="item-title">{{ __('Register') }} </h3>
    <form method="POST" action="{{ route('register', app()->getLocale()) }}">
        @csrf
        <div class="form-group">
            <input type="text" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus
                name="first_name" class="form-control" placeholder="First Name">
        </div>
        <div class="form-group">
            <input type="text" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"
                class="form-control" placeholder="Last Name">
        </div>
        <div class="form-group">
            <input id="email" type="email" name="email"
                class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input id="password" type="password"
            class="form-control @error('password') is-invalid @enderror" name="password"
            required autocomplete="new-password" placeholder="{{ __('Password') }}">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
        </div>
        <div class="form-group">
            <input type="date" name="date_birth" class="form-control" placeholder="Your Birth Day">
        </div>
        <div class="form-group">
            <select class="select2" name="gender" data-placeholder="Select Gender">
                <option value=""></option>
                <option value="male">Male</option>
                <option value="male">Female</option>
                <option value="transgender">Transgender</option>
            </select>
        </div>
        <div class="form-group">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="validationFormCheck1">
                <label class="form-check-label" for="validationFormCheck1">I accept the <a href="#">Terms and
                        Conditions</a></label>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="registration" class="submit-btn" value="Complete Registration">
        </div>
    </form>
</div>
