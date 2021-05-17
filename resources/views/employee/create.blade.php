@extends('master.master')
@section('content')
@include('master.error')
<section class="register-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ms-auto">
                <div class="login-content bg-white p-4">
                    <h3 class="text-center"><span>Register</span> Employee</h3>
                    <div class="alert alert-primary" role="alert">
                        <p class="small">Note: Fields marked with an asterisk ( * ) are required and the data will not be saved without them.</p>
                        <p class="text-end font-urdu small">نوٹ: ستارے (*) کے نشانات والے ڈیٹا فیلڈز درکار ہیں انھیں بھرنا لازمی ہے اور ان کے بغیر ڈیٹا محفوظ نہیں ہوگا۔</p>
                        <hr class="d-block"/>
                        <p class="small">Please enter required details and press the "Register" button.</p>
                        <p class="text-end font-urdu small">برائے کرم ضروری تفصیلات درج کریں اور رجسٹر کا بٹن دبا ٗیں</p>
                    </div>
                    <form method="POST" action="{{ URL::to('employee/save') }}" class="row px-md-15" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row justify-content-center">
                            <div class="col-md-9 mb-3">
                                <h4 class="">Basic Information <span class="float-end font-urdu">(بنیادی معلومات)</span></h4>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Full Name (as per CNIC) <span class="text-danger">*</span> <span class="font-urdu">(پورا نام کمپیوٹرائزڈ قومی شناختی کارڈ کے مطابق)</span></label>
                                <input type="text" class="form-control" name="full_name" id="fullName" placeholder="" />
                            </div>
                            <div class="col-md-9 text-start mb-3">
                                <label class="w-100">Gender <span class="text-danger">*</span> <span class="font-urdu">(جنس)</span></label>
                                <div class="d-block">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input"  type="radio" name="gender_id" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">Male <span class="font-urdu">(مرد)</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender_id" id="inlineRadio2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">Female <span class="font-urdu">(عورت)</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender_id" id="inlineRadio2" value="3">
                                        <label class="form-check-label" for="inlineRadio2">Trangender <span class="font-urdu">(خواجہ سِرا)</span></label>
                                    </div>										
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Date of Birth (as per CNIC) <span class="text-danger">*</span> <span class="font-urdu">(تاریخ پیدائش کمپیوٹرائزڈ قومی شناختی کارڈ نمبر کے مطابق)</span></label>
                                <input type="text" class="form-control" id="" name="dob" data-inputmask="'mask': '99/99/9999'" placeholder="dd/mm/yyyy"/>
                            </div>

                            <div class="col-md-9 text-start mb-3">
                                <div class="d-block">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="id_type" id="id_type" value="cnic" checked="">
                                        <label class="form-check-label" for="id_type">CNIC No.<span class="font-urdu">(کمپیوٹرائزڈ قومی شناختی کارڈ نمبر کے مطابق)</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="id_type" id="id_type_b" value="b-form">
                                        <label class="form-check-label" for="id_type_b">B-Form No.<span class="font-urdu">(ب فارم نمبر)</span></label>
                                    </div>												
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <input type="text" class="form-control" name="cnic" id="f_cnic" data-inputmask="'mask': '99999-9999999-9'" pl/>
                            </div>
                            <div class="col-md-9 text-start mb-3">
                                <label class="w-100">Marital Status <span class="text-danger">*</span> <span class="font-urdu">(ازدواجی حیثیت)</span></label>
                                <div class="d-block">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio1" value="married">
                                        <label class="form-check-label" for="inlineRadio1">Married <span class="font-urdu">(شادی شدہ)</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio2" value="unmarried">
                                        <label class="form-check-label" for="inlineRadio2">Unmarried <span class="font-urdu">(غیر شادی شدہ)</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio2" value="divorced">
                                        <label class="form-check-label" for="inlineRadio2">Divorced <span class="font-urdu">(طلاق یافتہ)</span></label>
                                    </div>	
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio2" value="widow">
                                        <label class="form-check-label" for="inlineRadio2">Widow <span class="font-urdu">(بیوہ)</span></label>
                                    </div>										
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <h4 class="">Education Information <span class="float-end font-urdu">(تعلیم سے متعلق معلومات)</span></h4>
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="d-block">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_literate" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Literate<span class="font-urdu">(پڑھا لکھا)</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_literate" id="inlineRadio2" value="no">
                                        <label class="form-check-label" for="inlineRadio2">Illiterate<span class="font-urdu">(اَن پڑھ)</span></label>
                                    </div>												
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Degree Level <span class="text-danger">*</span> <span class="font-urdu">(ڈگری لیول)</span></label>
                                <select class="form-select" name="degree_level">
                                    <option value="1">Please Select</option>
                                    <option value="1">Middle</option>
                                    <option value="2">Matric</option>
                                    <option value="3">Inter</option>
                                </select>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Degree Area <span class="text-danger">*</span> <span class="font-urdu">(ڈگری ایریا)</span></label>
                                <select class="form-select" name="degree_area">
                                    <option value="1">Please Select</option>
                                    <option value="1">Science</option>
                                    <option value="2">Commerce</option>
                                    <option value="3">Accounting</option>
                                </select>
                            </div>
                            <div class="col-md-9 mb-3">
                                <h4 class="">Employment Information <span class="float-end font-urdu">(ملازمت سے متعلق معلومات)</span></h4>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Profession <span class="text-danger">*</span> <span class="font-urdu">(پیشہ)</span></label>
                                <select class="form-select" name="profession_id">
                                    <option value="1">Please Select</option>
                                    <option value="1">Agriculture</option>
                                    <option value="2">Food</option>
                                </select>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Sub Profession <span class="text-danger">*</span> <span class="font-urdu">(ذیلی پیشہ)</span></label>
                                <select class="form-select" name="sub_profession_id">
                                    <option value="1">Please Select</option>
                                    <option value="1">Agriculture Engineer</option>
                                    <option value="2">Farmworkers, Forester</option>
                                </select>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Experience in Year(s) <span class="text-danger">*</span> <span class="font-urdu">(تجربہ سالوں میں)</span></label>
                                <input type="text" class="form-control" name="experience" id="fullName" placeholder="" maxlength="15"/>
                            </div>

                            <div class="col-md-9 mb-3">
                                <h4 class="">Contact Information <span class="float-end font-urdu">(رابطے کی معلومات)</span></h4>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Present Address <span class="text-danger">*</span> <span class="font-urdu">(ڈاک کا پتہ موجودہ)</span></label>
                                <input type="text" class="form-control" id="fullName" placeholder="" name="present_address" />
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Province <span class="text-danger">*</span> <span class="font-urdu">(صوبہ)</span></label>
                                <select class="form-select" name="province_id">
                                    <option value="1">Punjab</option>
                                    <option value="2">Female</option>
                                    <option value="3">Transgender</option>
                                </select>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">District <span class="text-danger">*</span> <span class="font-urdu">(ضلع)</span></label>
                                <select class="form-select" name="district_id">
                                    <option value="1">Lahore</option>
                                    <option value="2">Kasur</option>
                                    <option value="3">GD KHAN</option>
                                </select>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Tehsil <span class="text-danger">*</span> <span class="font-urdu">(تحصیل)</span></label>
                                <select class="form-select" name="tehsil_id">
                                    <option value="1">Lahore</option>
                                    <option value="2">Female</option>
                                    <option value="3">Transgender</option>
                                </select>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">City <span class="text-danger">*</span> <span class="font-urdu">(شہر)</span></label>
                                <select class="form-select" name="city_id">
                                    <option value="1">Lahore</option>
                                    <option value="2">Female</option>
                                    <option value="3">Transgender</option>
                                </select>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Mobile No.<span class="text-danger">*</span> <span class="font-urdu">(موبائل نمبر درج کریں)</span></label>
                                <input type="text" class="form-control" id="phone" name="mobile" data-inputmask="'mask': ' 0399 999 9999'" />
                            </div>
                            <div class="col-md-9 mb-3">
                                <label class="w-100">Email Address <span class="font-urdu">(ای میل کا پتہ)</span></label>
                                <input type="text" class="form-control" id="email" name="email" data-inputmask="'alias': 'email'" />
                            </div>
                            <div class="col-md-9 text-center mt-3 mb-4">
                                <button type="submit" class="btn btn-success btn-login">Register <span class="font-urdu">(رجسٹر کریں)</span></button>
                            </div>
                        </div>
                    </form>	
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
