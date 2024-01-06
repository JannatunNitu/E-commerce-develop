@include('Frontend.style')
@include('Frontend.script')


<div class="container" style="width:500px; margin-top:25px;">
    <div class="register">
        <div class="register-header">
            <a href="#" class="sidebar-close"><i class="feather-x-circle"></i></a>
        </div>
        <div class="register-layout">
            <div class="register-body">
                <div class="side-logo mb-40 " style="margin-bottom: 20px">
                    <a href="{{ url('/') }}" class="align-center"><img width="200"  src="{{ asset('Frontend assets/assets/images/logo.png') }}"
                            alt="logo" /></a>
                </div>
                <div class="login-group login-forget">
                    <h5>Forgot Your Password?</h5>
                    <p>Enter the email associated with your account and we’ll send an email with instructions to reset
                        your password</p>
                    <form action="index.html">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter your email address">
                        </div>
                        <div class="d-grid login-pharmacy mb-25" style="margin-bottom: 10px">
                            <button class="btn btn-primary btn-start" type="submit">Reset Password</button>
                        </div>
                        <div class="forgot-pass mb-0 ">
                            <a class="forgot-link" href="{{ route('login') }}">Back to Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 

