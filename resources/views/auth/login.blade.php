@extends('layouts.login')
@section('content')

    <div class="d-lg-flex half">            
        <div class="bg login-right"></div>
        <div class="contents">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center">
                        <div class="login-content py-3 py-md-0">
                            <h3><span>Please</span> Log In</h3>
                            <form method="POST" action="{{ URL::to('login') }}" class="row px-md-15">
                                {{ csrf_field() }}
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating login-field">
                                      <div class="d-flex justify-content-between px-3 field-icons align-items-center">
                                        <i><img src="{{ URL::asset('theme/images/username_icon.png') }}" alt="ok Image" class="img-fluid" width="16"/></i>
                                        <i><img src="{{ URL::asset('theme/images/disable.png') }}" alt="ok Image" class="img-fluid" width="24"/></i>
                                      </div>
                                      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                      <label for="floatingInput" class="d-flex w-100 justify-content-between">
                                            <span class="">CNIC</span> 
                                            <span class="font-urdu">شناختی کارڈ</span> 
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating login-field">
                                      <div class="d-flex justify-content-between px-3 field-icons align-items-center">
                                        <i><img src="{{ URL::asset('theme/images/password_ico.png') }}" alt="ok Image" class="img-fluid" width="16"/></i>
                                        <i><img src="{{ URL::asset('theme/images/ok.png') }}" alt="ok Image" class="img-fluid" width="24"/></i>
                                      </div>
                                      <input type="password" class="form-control" id="password" name="password" placeholder="name@example.com">
                                      <label for="floatingInput" class="d-flex w-100 justify-content-between">
                                            <span class="">Password</span> 
                                            <span class="font-urdu">پاس ورڈ</span> 
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-3 mb-4">
                                    <button type="submit" class="btn btn-success btn-login">Login</button>
                                </div>
                                <div class="col-md-12 text-center mb-5">
                                    <span class="text-muted">Create an account?</span>
                                    <a href="#" class="text-dark">Reset Password</a>
                                </div>
                                <div class="col-md-12 text-center">
                                    <span class="text-muted">By sing in to your account, you agree to e-job centers</span>
                                    <a href="#" class="text-dark">Terms of Service</a> 
                                    <span class="text-muted">and</span> 
                                    <a href="#" class="text-dark">Privacy</a>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
