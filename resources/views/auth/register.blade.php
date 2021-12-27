@extends('..layouts.master')
@section('bodySection')
<!-- Info Section -->
<div class="login-section">
    <div class="image-layer" style="background-image: url({{ asset('assets/images/background/12.jpg') }});"></div>
    <div class="outer-box">
         <!-- Login Form -->
        <div class="login-form default-form">
            <div class="form-inner">
                <h3>Register to JMS</h3>
                <!--Register Form-->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" value="{{ __('Name') }}">Name</label>
                        <input id="name" type="text" name="name" :value="old('name')" placeholder="Enter your name" required autocomplete="name">
                    </div>

                    <div class="form-group">
                        <label for="email" value="{{ __('Email') }}">Email</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Enter your email" required >
                    </div>

                    <div class="form-group">
                        <label for="password" value="{{ __('Password') }}">Password</label>
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required placeholder="Password" autocomplete="new-password" >
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password</label>
                        <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required placeholder="Confirm Password" autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <div class="field-outer">
                            <div class="input-group checkboxes square">
                                <input id="remember_me" type="checkbox" name="remember-me" value="" id="remember">
                                <label for="remember_me" class="remember"><span class="custom-checkbox"></span> Remember me</label>
                            </div>
                                <a href="{{ route('login') }}" class="pwd">Already registered?</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="theme-btn btn-style-one" type="submit" name="log-in">Register</button>
                    </div>
                </form>

                <div class="bottom-box">
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
