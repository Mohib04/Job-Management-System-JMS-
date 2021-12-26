@extends('..layouts.master')
@section('bodySection')
<!-- Info Section -->
<div class="login-section">
    <div class="image-layer" style="background-image: url({{ asset('assets/images/background/12.jpg') }});"></div>
    <div class="outer-box">
         <!-- Login Form -->
        <div class="login-form default-form">
            <div class="form-inner">
                <h3>Login to Superio</h3>
                <!--Login Form-->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email" name="email" :value="old('email')" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="password" value="{{ __('Password') }}">Password</label>
                        <input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="password" required autocomplete="current-password">
                    </div>

                    <div class="form-group">
                        <div class="field-outer">
                            <div class="input-group checkboxes square">
                                <input id="remember_me" type="checkbox" name="remember-me" value="" id="remember">
                                <label for="remember_me" class="remember"><span class="custom-checkbox"></span> Remember me</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" id="remember_me" class="pwd">Forgot password?</a>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="theme-btn btn-style-one" type="submit" name="log-in">Log In</button>
                    </div>
                </form>

                <div class="bottom-box">
                    <div class="text">Don't have an account? <a href="{{ url('register') }}">Signup</a></div>
                    <div class="divider"><span>or</span></div>
                    <div class="btn-box row">
                        <div class="col-lg-6 col-md-12">
                            <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-facebook-f"></i> Log In via Facebook</a>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Login Form -->
    </div>
</div>
<!-- End Info Section -->
@endsection
