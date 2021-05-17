@extends('layouts.login')
@section('content')

<section class="d-flex flex-column justify-content-between login-section">
    <div class="d-md-flex justify-content-between align-items-center px-4 py-2 shadow-sm">
        <div class="text-center text-md-start">
            <span class="mr-3"><img src="{{ URL::asset('theme/images/pitb-logo.png') }}" class="img-fluid" alt="pitb Logo" /></span>
            <span class="mr-3"><img src="{{ URL::asset('theme/images/pitb-logo.png') }}" class="img-fluid" alt="pitb Logo" /></span>
        </div>
        <div class="login-logo text-center">
            <h2>E-jobs Centers</h2>
        </div>
        <div class="text-center text-md-end">
            <span class="mr-3"><img src="{{ URL::asset('theme/images/pitb-logo.png') }}" class="img-fluid" alt="pitb Logo" /></span>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center align-items-stretch my-4 my-md-0">
            <div class="col-md-6 col-lg-5 col-xl-6 login-left">
                <div class="p-4">
                    <form method="POST" action="{{ URL::to('register') }}" class="row">
                        {{ csrf_field() }}
                        <div class="col-md-12 text-center mb-3">
                            <h3>Register</span></h3>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating login-field">
                                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="w-100">Full Name <span class="float-end font-urdu">( مکمل نام ) </span></label>
                                <div class="d-flex justify-content-between px-3 field-icons">
                                    <i class="fas fa-user-tie"></i>
                                    <i class="fas fa-check-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating login-field">
                                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="w-100">Email <span class="float-end font-urdu">ای میل</span></label>
                                <div class="d-flex justify-content-between px-3 field-icons">
                                    <i class="fas fa-user-tie"></i>
                                    <i class="fas fa-check-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating login-field">
                                <input type="text" class="form-control" name="cnic" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="w-100">CNIC Number / B-Form <span class="float-end font-urdu">( قومی شناختی کارڈ نمبر) </span></label>
                                <div class="d-flex justify-content-between px-3 field-icons">
                                    <i class="fas fa-user-tie"></i>
                                    <i class="fas fa-check-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating login-field">
                                <input type="text" class="form-control" name="mobile_no" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="w-100">Enter Mobile No. <span class="float-end font-urdu"> (موبائل نمبردرج کرے )</span></label>
                                <div class="d-flex justify-content-between px-3 field-icons">
                                    <i class="fas fa-user-tie"></i>
                                    <i class="fas fa-check-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating login-field">
                                <input type="number" class="form-control" name="age" maxlength="4" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="w-100">Age in Year <span class="float-end font-urdu">(سال)(عمر)</span></label>
                                <div class="d-flex justify-content-between px-3 field-icons">
                                    <i class="fas fa-user-tie"></i>
                                    <i class="fas fa-check-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating login-field">
                                <input type="date" class="form-control" name="age" maxlength="4" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="w-100">Date of Birth <span class="float-end font-urdu">(تاریخ پیدائش)</span></label>
                                <div class="d-flex justify-content-between px-3 field-icons">
                                    <i class="fas fa-user-tie"></i>
                                    <i class="fas fa-check-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating login-field">
                                <input type="text" class="form-control" name="age" maxlength="4" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="w-100">District <span class="float-end font-urdu">(ضلع)</span></label>
                                <div class="d-flex justify-content-between px-3 field-icons">
                                    <i class="fas fa-user-tie"></i>
                                    <i class="fas fa-check-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating login-field">
                                <input type="text" class="form-control" name="age" maxlength="4" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="w-100">Occupation <span class="float-end font-urdu">(پیشہ)</span></label>
                                <div class="d-flex justify-content-between px-3 field-icons">
                                    <i class="fas fa-user-tie"></i>
                                    <i class="fas fa-check-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating login-field">
                                <input type="password" class="form-control" name="password" id="floatingInput" placeholder="">
                                <label for="floatingInput" class="w-100">Password <span class="float-end font-urdu">پاس ورڈ</span></label>
                                <div class="d-flex justify-content-between px-3 field-icons">
                                    <i class="fas fa-lock"></i>
                                    <i class="fas fa-check-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating login-field">
                                <input type="password" class="form-control" name="c-password" id="floatingInput" placeholder="">
                                <label for="floatingInput" class="w-100">Confirm Password <span class="float-end font-urdu">پاس ورڈ</span></label>
                                <div class="d-flex justify-content-between px-3 field-icons">
                                    <i class="fas fa-lock"></i>
                                    <i class="fas fa-check-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center my-3">
                            <button type="submit" class="btn btn-login"><span class="float-start">Login</span> <span class="float-end ms-5 font-urdu">لاگ ان</span></button>
                        </div>
                        <div class="col-md-12 text-center">
                            <a href="javascript:void(0);" class="btn btn-link font-urdu">پاس ورڈ بھول گیا؟</a>
                        </div>
                        <hr />
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-register"><span class="float-start">Register</span> <span class="float-end ms-5 font-urdu">نیا اکاونٹ بنا ئیں</span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-6 bg-primary login-right px-0">
                <h5 class="bg-white mt-4 px-3 py-2">Choose Language <span class="float-end font-urdu">زبان کا انتخاب</span></h5>
                <div class="text-center my-5">
                    <h2 class="text-white mb-4 font-urdu">میں اردو پڑھ سکتا ھوں</h2>
                    <a href="javascript:void(0);" class="btn btn-urdu mb-4 font-urdu">اردو میں</a>
                    <h2 class="text-white mb-4">I can read English</h2>
                    <a href="javascript:void(0);" class="btn btn-english mb-4">In English</a>
                </div>
            </div>
        </div>
    </div>
    @endsection
