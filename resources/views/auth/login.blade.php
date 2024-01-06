@include('Frontend.style')
@include('Frontend.script')


<div class="container" style="width:500px; margin-top:100px;">
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
                    {{-- <h4>Login</h4> --}}
                    <p style="margin-bottom: 20px" class="top-para">It's quick and easy.</p>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                            @error('email')
                            <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 text-white">Error</h6>
                                        <div class="text-white">{{ $message }}</div>
                                    </div>
                                </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="pass-group">
                                <input type="password" name="password" class="form-control pass-input"
                                    placeholder="Enter your password">
                                <span class="feather-eye toggle-password"></span>
                                @error('password')
                                <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                    <div class="d-flex align-items-center">
                                        <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0 text-white">Error</h6>
                                            <div class="text-white">{{ $message }}</div>
                                        </div>
                                    </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div style="margin-bottom: 10px" class="forgot-pass">
                            <a class="forgot-link popup-toggle2 text-danger" href="{{ url('password/reset/{token}') }}">Forgot Password ?</a>
                        </div>
                        <div class="d-grid login-pharmacy mb-25" style="width: 100%">
                            <button class="btn btn-primary btn-start" style="width: 100%">Log In</button>
                        </div>
                        {{-- <div class="d-grid login-pharmacy mb-25">
                                <a href="{{ route('google.login') }}" class="btn btn-danger btn-start" style="background: #dc3545!important;">Sing In with Google</a>
                        </div> --}}
                        <div class="create-account create-sign mb-5">
                            <p>Don't have an account? <a href="{{ route('register') }}" class="popup-toggle1 mb-3 text-primary">Create one</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 

