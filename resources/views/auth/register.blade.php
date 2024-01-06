@include('Frontend.style')
@include('Frontend.script')


<div class="container" style="width:500px; margin-top:25px;">
    <div class="register">
        <div class="register-header">
            <a href="#" class="sidebar-close"><i class="feather-x-circle"></i></a>
        </div>
        <div class="register-layout">
            <div class="register-body">
                <div class="side-logo mb-40">
                    <a href="{{ url('/') }}" class="align-center"><img width="200"  src="{{ asset('Frontend assets/assets/images/logo.png') }}"
                            alt="logo" /></a>
                </div>
                <div class="login-group register-login">
                    <h4>Register</h4>
                    <p class="top-para">It's quick and easy.</p>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Full Name">
                            @error('name')
                               <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="pass-group">
                                <input type="password" name="password" class="form-control pass-input" placeholder=" password">
                                <span class="feather-eye toggle-password"></span>
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="pass-group">
                                <input type="password" name="password_confirmation" class="form-control pass-one-input"
                                    placeholder="Confirm Password">
                                <span class="feather-eye conform-password"></span>
                                @error('password_confirmation')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="register-policy">
                            <p>Your personal data will be used to support your experience throughout this website, to
                                manage access to your account, and for other purposes described in our privacy policy.
                            </p>
                        </div>
                        <div class="remember-me form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> I agree to terms
                                & Policy.
                            </label>
                        </div>
                        <div class="d-grid login-pharmacy mb-25 " style="width: 100%">
                            <button style="width: 100%" class="btn btn-primary btn-start" >Sign Up</button>
                        </div>
                        <div class="create-account">
                            <p>Have an account already? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 




























{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}







