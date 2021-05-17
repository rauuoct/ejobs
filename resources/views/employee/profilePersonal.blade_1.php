@extends('master.master')
@section('content')
@include('master.error')



<main role="main">

    <section id="settings" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-11 mx-auto mb-4">
                    <div class="card">
                        <div class="card-body">

                            <div class="alert alert-primary" role="alert">
                                <p class="small">Note: Fields marked with an asterisk ( * ) are required and the data will not be saved without them.</p>
                                <p class="text-end font-urdu small">نوٹ: ستارے (*) کے نشانات والے ڈیٹا فیلڈز درکار ہیں انھیں بھرنا لازمی ہے اور ان کے بغیر ڈیٹا محفوظ نہیں ہوگا۔</p>
                            </div>
                            <input name="tab_name" value="">
                            <form class="form-register" action="#" method="post">
                                <div id="form-total">
                                    <!-- SECTION 1 -->
                                    <h2>
                                        <span class="step-icon"><i class="fa fa-info"></i></span>
                                        <span class="step-text">Personal <span class="  font-urdu">(ذاتی)</span></span>
                                    </h2>
                                    <section>
                                        <div class="inner">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4 mb-3 order-lg-2">
                                                            <div class="profile-img">
                                                                <img src="{{ URL::asset('theme/images/User.png')}} " alt="" class="img-fluid rounded-circle" width="200"/>
                                                                <div class="file btn btn-lg btn-primary">
                                                                    Upload Photo
                                                                    <input type="file" name="file"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 order-lg-1">
                                                            <div class="row">
                                                                <div class="col-md-12 mb-3">
                                                                    <label class="w-100">Full Name (as per CNIC) <span class="font-urdu">(کمپیوٹرائزڈ قومی شناختی کارڈ نمبر کے مطابق مکمل نام)</span></label>
                                                                    <input type="text" name="cnic" class="form-control" id="fullName" placeholder="" />
                                                                </div>
                                                                <div class="col-md-12 mb-3">
                                                                    <div class="d-block">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="guardian_type" id="inlineRadio1" value="option1">
                                                                            <label class="form-check-label" for="inlineRadio1">Father's </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="guardian_type" id="inlineRadio2" value="option2">
                                                                            <label class="form-check-label" for="inlineRadio2">Husband's Name <span class="  font-urdu">(کمپیوٹرائزڈ قومی شناختی کارڈ نمبر کے مطابق والد / شوہر کا نام)</span></label>
                                                                        </div>												
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mb-3">
                                                                    <input type="text" class="form-control" name="guardian_name" id="fullName" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <label class="w-100">Gender<span class="  font-urdu">(جنس)</span></label>
                                                            <div class="d-block">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gender_id" id="inlineRadio1" value="1">
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
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">Date of Birth (as per CNIC)<span class="text-danger">*</span> <span class="font-urdu">(کمپیوٹرائزڈ قومی شناختی کارڈ نمبر کے مطابق تاریخ پیدائش)</span></label>
                                                            <input type="text" class="form-control" id="" name="dob" data-inputmask="'mask': '99/99/9999'" placeholder="dd/mm/yyyy"/>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <div class="d-block">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="id_type" id="inlineRadio1" value="1">
                                                                    <label class="form-check-label" for="inlineRadio1">CNIC No.<span class="font-urdu">(قومی شناختی کارڈ نمبر)</span></label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="id_type" id="inlineRadio2" value="2">
                                                                    <label class="form-check-label" for="inlineRadio2">B-Form No.<span class="font-urdu">(ب فارم نمبر)</span></label>
                                                                </div>												
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <input type="text" class="form-control" name="cnic" id="f_cnic" data-inputmask="'mask': '99999-9999999-9'"/>
                                                        </div>															
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">Marital Status <span class="font-urdu">(ازدواجی حیثیت)</span></label>
                                                            <div class="d-block">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio1" value="Married">
                                                                    <label class="form-check-label" for="inlineRadio1">Married <span class="font-urdu">(شادی شدہ)</span></label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio2" value="Singal">
                                                                    <label class="form-check-label" for="inlineRadio2">Unmarried <span class="font-urdu">(غیر شادی شدہ)</span></label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio2" value="Divorced">
                                                                    <label class="form-check-label" for="inlineRadio2">Divorced <span class="font-urdu">(طلاق یافتہ)</span></label>
                                                                </div>	
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio2" value="Widowed">
                                                                    <label class="form-check-label" for="inlineRadio2">Widow <span class="font-urdu">(بیوہ)</span></label>
                                                                </div>											
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">													
                                                            <label class="w-100">Nationality <span class="  font-urdu">(قومیت)</span></label>
                                                            <select class="form-select">
                                                                <option value="1">Pakistani</option>
                                                                <!--<option value="2">Indian</option>-->
                                                                <!--<option value="3">Bangali</option>-->
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="w-100">Health Status <span class="  font-urdu">(صحت کی حالت)</span></label>
                                                            <div class="d-block">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="body_type" id="inlineRadio3" value="1">
                                                                    <label class="form-check-label" for="inlineRadio3">Able-bodied <span class="  font-urdu">(مکمل صحت مند)</span></label>								</div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="body_type" id="inlineRadio4" value="2">
                                                                    <label class="form-check-label" for="inlineRadio4">Differntly Abled <span class="  font-urdu">(معذور )</span></label>
                                                                </div>						
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">													
                                                            <label class="w-100">Disability Type <span class="  font-urdu">(معذوری کی قسم)</span></label>
                                                            <select class="form-select" name="disability">
                                                                <option value="1">Please Select</option>
                                                                <option value="2">Acquired brain injury</option>
                                                                <option value="3">Autism spectrum disorder</option>
                                                                <option value="4">Deaf or hard of hearing</option>
                                                                <option value="5">Intellectual disability</option>
                                                                <option value="6">Mental health conditions</option>
                                                                <option value="7">Physical disability</option>
                                                                <option value="8">Vision imapairment</option>
                                                                <option value="9">Any other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="w-100">Any other <span class="  font-urdu">( دیگر)</span></label>
                                                            <input type="text" class="form-control"/>
                                                        </div>	
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">Profession<span class="text-danger">*</span> <span class="  font-urdu">(پیشہ)</span></label>
                                                            <select class="form-select" name="profession_id" required="">
                                                                 <option>Please Select Profession</option>
                                                                    <?php foreach ($occupations as $value) {
                                                                         ?><option value="<?php echo $value['occupation_id'] ?>"><?php echo $value['occupation_name'] ?></option><?php    
                                                                    } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">Sub-profession<span class="text-danger">*</span> <span class="  font-urdu">(ذیلی پیشہ)</span></label>
                                                            <select class="form-select" name="sub_profession_id">
                                                                    <option>Please Select Sub-profession</option>
                                                                    <?php foreach ($sub_occupations as $value) {
                                                                         ?><option value="<?php echo $value['sub_occupation_id'] ?>"><?php echo $value['sub_occupation_name'] ?></option><?php    
                                                                    } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">Experience in year(s) <span class="  font-urdu">(تجربہ)</span></label>
                                                            <input type="number" class="form-control" id="fullName" name="experience" placeholder="" />
                                                        </div>
                                                        <fieldset class="scheduler-border">
                                                            <legend class="scheduler-border">Present Address  <span class="  font-urdu">(موجودہ پتہ)</span></legend>
                                                            <div class="row">
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">Address <span class="  font-urdu">(پتہ)</span></label>
                                                                    <input type="text" name="present_address" class="form-control" id="fullName" placeholder="" />
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">Country <span class="  font-urdu">(ملک)</span></label>
                                                                    <select class="form-select" name="present_country_id">
                                                                        <option value="1">Please select</option>
                                                                        <option value="2">India</option>
                                                                        <option value="3">Afghanistan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">Province <span class="  font-urdu">(صوبہ)</span></label>
                                                                    <select class="form-select" name="present_province_id">
                                                                        <option value="1">Please select</option>
                                                                        <option value="2">India</option>
                                                                        <option value="3">Afghanistan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">District <span class="  font-urdu">(ضلع)</span></label>
                                                                    <select class="form-select" name="present_district_id">
                                                                        <option value="1">Please select</option>
                                                                        <option value="2">India</option>
                                                                        <option value="3">Afghanistan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">Tehsil <span class="  font-urdu">(تحصیل)</span></label>
                                                                    <select class="form-select" name="present_tehsil_id">
                                                                        <option value="1">Please select</option>
                                                                        <option value="2">India</option>
                                                                        <option value="3">Afghanistan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">City <span class="  font-urdu">(شہر)</span></label>
                                                                     <input class="form-control" type="text" name="present_city_name" value="">
                                                                </div>															
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="scheduler-border">
                                                            <legend class="scheduler-border">Permanent Address<span class="  font-urdu">(مستقل پتہ)</span></legend>
                                                            <div class="row">										
                                                                <div class="col-md-12 mb-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"  value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Same as above <span class="  font-urdu">(وہی جو اوپر)</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">Address <span class="  font-urdu">(پتہ)</span></label>
                                                                    <input type="text" name="permanent_address" class="form-control" id="fullName" placeholder="" />
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">Country <span class="  font-urdu">(ملک)</span></label>
                                                                    <select class="form-select">
                                                                        <option value="1">Pakistan</option>
                                                                        <option value="2">India</option>
                                                                        <option value="3">Afghanistan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">Province <span class="  font-urdu">(صوبہ)</span></label>
                                                                    <select class="form-select">
                                                                        <option value="1">Pakistan</option>
                                                                        <option value="2">India</option>
                                                                        <option value="3">Afghanistan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">District <span class="  font-urdu">(ضلع)</span></label>
                                                                    <select class="form-select">
                                                                        <option value="1">Pakistan</option>
                                                                        <option value="2">India</option>
                                                                        <option value="3">Afghanistan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">Tehsil <span class="  font-urdu">(تحصیل)</span></label>
                                                                    <select class="form-select">
                                                                        <option value="1">Pakistan</option>
                                                                        <option value="2">India</option>
                                                                        <option value="3">Afghanistan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="w-100">City <span class="  font-urdu">(شہر)</span></label>
                                                                    <select class="form-select">
                                                                        <option value="1">Pakistan</option>
                                                                        <option value="2">India</option>
                                                                        <option value="3">Afghanistan</option>
                                                                    </select>
                                                                </div>															
                                                            </div>
                                                        </fieldset>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="w-100">Mobile No. <span class="  font-urdu">(موبائل فون کانمبر)</span></label>
                                                            <input type="text" class="form-control" id="phone" name="mobile" data-inputmask="'mask': ' 0999 999 9999'"/>
                                                        </div>																
                                                        <div class="col-md-4 mb-3">
                                                            <label class="w-100">Email Address <span class="  font-urdu">(ای میل اڈریس)</span></label>
                                                            <input type="text" class="form-control"  id="email" name="email" data-inputmask="'alias': 'email'" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- SECTION 2 -->
                                    <h2>
                                        <span class="step-icon"><i class="fa fa-graduation-cap"></i></span>
                                        <span class="step-text">Academics <span class="  font-urdu">(ماہرین تعلیم)</span></span>
                                    </h2>
                                    <section>
                                        <div class="inner">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label class="w-100">Education <span class="text-danger">*</span> <span class="  font-urdu">(تعلیم)</span></label>
                                                    <div class="d-block">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                                            <label class="form-check-label" for="inlineRadio5">Literate <span class="  font-urdu">(خواندہ)</span></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                                            <label class="form-check-label" for="inlineRadio6">Illiterate <span class="  font-urdu">(ناخواندہ)</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="w-100">Degree Level <span class="text-danger">*</span> <span class="font-urdu">(ڈگری لیول)</span></label>
                                                    <select class="form-select">
                                                        <option value="1">Primary</option>
                                                        <option value="2">Middle</option>
                                                        <option value="3">Matric</option>
                                                        <option value="3">Intermediate</option>
                                                        <option value="3">Graduation</option>
                                                        <option value="3">Post Graduation</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="w-100">Degree Area <span class="text-danger">*</span> <span class="font-urdu">(ڈگری ایریا)</span></label>
                                                    <select class="form-select">
                                                        <option value="1">Business</option>
                                                        <option value="2">Accounts</option>
                                                        <option value="3">IT Industry</option>
                                                        <option value="3">Government</option>
                                                        <option value="3">Education</option>
                                                        <option value="3">Finance</option>
                                                        <option value="3">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label  class="w-100">Institute Name<span class="text-danger">*</span> <span class="  font-urdu">(ادارہ کا نام)</span></label>
                                                    <select class="form-select">
                                                        <option value="1">Business</option>
                                                        <option value="2">Accounts</option>
                                                        <option value="3">IT Industry</option>
                                                        <option value="3">Government</option>
                                                        <option value="3">Education</option>
                                                        <option value="3">Finance</option>
                                                        <option value="3">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Other (Please Specify) <span class="text-danger">*</span> <span class="font-urdu">دیگر (وضاحت براہ مہربانی)</span>
                                                        </label>
                                                    </div>
                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="w-100">Institute <span class="font-urdu">(ادارہ)</span></label>
                                                    <div class="d-block">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                                            <label class="form-check-label" for="inlineRadio5">Local <span class="font-urdu">(مقامی)</span></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                                            <label class="form-check-label" for="inlineRadio6">Foreign <span class="font-urdu">(غیر ملکی)</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <fieldset class="scheduler-border">
                                                    <legend class="scheduler-border">Local Institute <span class="font-urdu">(مقامی ادارہ)</span><span class="text-danger">*</span></legend>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">Province<span class="text-danger">*</span> <span class="  font-urdu">(صوبہ)</span></label>
                                                            <select class="form-select">
                                                                <option value="1">Punjab</option>
                                                                <option value="2">KPK</option>
                                                                <option value="3">Afghanistan</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">District<span class="text-danger">*</span> <span class="  font-urdu">(ضلع)</span></label>
                                                            <select class="form-select">
                                                                <option value="1">Lahore</option>
                                                                <option value="2">Gujrat</option>
                                                                <option value="3">Afghanistan</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">City<span class="text-danger">*</span> <span class="  font-urdu">(شہر)</span></label>
                                                            <select class="form-select">
                                                                <option value="1">Lahore</option>
                                                                <option value="2">Gujrat</option>
                                                                <option value="3">Afghanistan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="scheduler-border">
                                                    <legend class="scheduler-border">Foreign Institute <span class="  font-urdu">(غیر ملکی ادارہ)</span><span class="text-danger">*</span></legend>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">Country <span class="  font-urdu">(ملک)</span></label>
                                                            <select class="form-select">
                                                                <option value="1">Pakistan</option>
                                                                <option value="2">India</option>
                                                                <option value="3">Afghanistan</option>
                                                            </select>
                                                        </div>															
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">State/City <span class="  font-urdu">(شہر)</span></label>
                                                            <input type="text" class="form-control" id="fullName" placeholder="" />
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="col-md-4 mb-3">
                                                    <label class="w-100">Major Subject<span class="text-danger">*</span> <span class="  font-urdu">(اہم مضمون)</span></label>
                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="w-100">Start Date<span class="text-danger">*</span>
                                                        <span class="  font-urdu">(شروع کرنے کی تاریخ)</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="" name="date_birth" data-inputmask="'mask': '99/99/9999'" placeholder="dd/mm/yyyy"/>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="w-100">End Date<span class="text-danger">*</span>
                                                        <span class="  font-urdu">(تکمیل کی تاریخ)</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="" name="date_birth" data-inputmask="'mask': '99/99/9999'" placeholder="dd/mm/yyyy"/>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="w-100">Grading Criteria <span class="  font-urdu">(گریڈنگ کا معیار)</span></label>
                                                    <select class="form-select">
                                                        <option value="1">CGPA</option>
                                                        <option value="2">Percentage</option>
                                                        <option value="3">Marks</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="w-100">Obtained Masks <span class="  font-urdu">(حاصل کردہ نمبر)</span></label>
                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="w-100">Attach degree <span class="  font-urdu">(ڈگری منسلک کریں)</span></label>
                                                    <input class="form-control" type="file" id="formFile">
                                                    <small class="small text-muted">(Maximum file size 2MB, File format JPG/PNG/JPEG)</small>
                                                    <small class="small text-muted font-urdu d-block text-end">(فائل کا ۲ یم بی سے زیادہ نہ ہو اور اسی فارمیٹ جے پی جی،پی این جی، جےپی ای جی میں ہو)</small>
                                                </div>
                                                <div class="col-md-12 text-md-end">
                                                    <button type="button" class="btn btn-login"><i class="las la-plus-circle"></i> Add More <span class="  font-urdu">( مزید ا ضافہ کریں)</span></button>
                                                </div>
                                            </div>														
                                        </div>
                                    </section>
                                    <!-- SECTION 3 -->
                                    <h2>
                                        <span class="step-icon"><i class="fa fa-briefcase"></i></span>
                                        <span class="step-text">Experience <span class="font-urdu">(تجربہ)</span>
                                    </h2>
                                    <section>
                                        <div class="inner">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="w-100">Organization Type<span class="text-danger">*</span> <span class="  font-urdu">(تنظیم کی قسم)</span></label>
                                                    <select class="form-select">
                                                        <option value="1">Public</option>
                                                        <option value="2">Private</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="w-100">Complete Name of Organization <span class="  font-urdu">(تنظیم کا مکمل نام)</span></label>
                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="w-100">Origin of Organization<span class="text-danger">*</span> <span class="  font-urdu">( تنظیم کی اصل)</span></label>
                                                    <div class="d-block">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                                            <label class="form-check-label" for="inlineRadio5">Local  <span class="font-urdu">(مقامی)</span></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                                            <label class="form-check-label" for="inlineRadio6">Foreign <span class="font-urdu">(غیر ملکی)</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <fieldset class="scheduler-border">
                                                    <legend class="scheduler-border">Local Organization <span class="font-urdu">(مقامی تنظیم)</span><span class="text-danger">*</span></legend>
                                                    <div class="row">														
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">Province<span class="text-danger">*</span> <span class="  font-urdu">(صوبہ)</span></label>
                                                            <select class="form-select">
                                                                <option value="1">Pakistan</option>
                                                                <option value="2">India</option>
                                                                <option value="3">Afghanistan</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">District<span class="text-danger">*</span> <span class="  font-urdu">(ضلع)</span></label>
                                                            <select class="form-select">
                                                                <option value="1">Pakistan</option>
                                                                <option value="2">India</option>
                                                                <option value="3">Afghanistan</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">City<span class="text-danger">*</span> <span class="  font-urdu">(شہر)</span></label>
                                                            <select class="form-select">
                                                                <option value="1">Pakistan</option>
                                                                <option value="2">India</option>
                                                                <option value="3">Afghanistan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="scheduler-border">
                                                    <legend class="scheduler-border">Foreign Organization <span class="  font-urdu">(غیر ملکی تنظیم)</span><span class="text-danger">*</span></legend>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">Country <span class="  font-urdu">(ملک)</span></label>
                                                            <select class="form-select">
                                                                <option value="1">Pakistan</option>
                                                                <option value="2">India</option>
                                                                <option value="3">Afghanistan</option>
                                                            </select>
                                                        </div>															
                                                        <div class="col-md-6 mb-3">
                                                            <label class="w-100">State/City <span class="  font-urdu">(شہر)</span></label>
                                                            <input type="text" class="form-control" id="fullName" placeholder="" />
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="col-md-12 mb-3">
                                                    <h4 class="font-weight-bold">Employment Detail <span class="  font-urdu">(ملازمت کی تفصیل)</span></h4>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="w-100">Designation<span class="text-danger">*</span> <span class="  font-urdu">(عہدہ)</span></label>
                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="w-100">From Date<span class="text-danger">*</span>
                                                        <span class="  font-urdu">(شروع کرنے کی تاریخ)</span></label>
                                                    <input type="text" class="form-control" id="" name="date_birth" data-inputmask="'mask': '99/99/9999'" placeholder="dd/mm/yyyy"/>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="fullName">Is still working <span class="  font-urdu">(اب بھی کام کر رہا ہے)</span><span class="text-danger">*</span></label>
                                                    <div class="d-block">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                                            <label class="form-check-label" for="inlineRadio5">Yes<span class="  font-urdu">(ہاں)</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                                            <label class="form-check-label" for="inlineRadio6">No<span class="  font-urdu">(نہيں)</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="w-100">End Date <span class="  font-urdu" >(تکمیل کی تاریخ)</span></label>
                                                    <input type="text" class="form-control" id="" name="date_birth" data-inputmask="'mask': '99/99/9999'" placeholder="dd/mm/yyyy"/>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="w-100">Job Responsibility <span class="  font-urdu">(نوکری کی ذمہ داری)</span></label>
                                                    <textarea class="form-control" id="aboutBio" placeholder="Tell something interesting about yourself" rows="5"></textarea>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="w-100">Attact experience certificate <span class="  font-urdu">(تجربے کا تجربہ سرٹیفکیٹ)</span></label>
                                                    <input class="form-control" type="file" id="formFile">
                                                    <small class="small text-muted">(Maximum file size 2MB, File format JPG/PNG/JPEG)</small>
                                                    <small class="small text-muted font-urdu d-block text-end">(فائل کا ۲ یم بی سے زیادہ نہ ہو اور اسی فارمیٹ جے پی جی،پی این جی، جےپی ای جی میں ہو)</small>
                                                </div>
                                                <div class="col-md-12 text-md-end">
                                                    <button type="button" class="btn btn-login"><i class="las la-plus-circle"></i> Add More (مزید ا ضافہ کریں)</button>
                                                </div>
                                            </div>														
                                        </div>
                                    </section>
                                    <!-- SECTION 3 -->
                                    <h2>
                                        <span class="step-icon"><i class="fa fa-user-md"></i></span>
                                        <span class="step-text">Skill Set <span class="  font-urdu">(مہارت)</span></span>
                                    </h2>
                                    <section>
                                        <div class="inner">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h4 class="font-weight-bold">Skill</<h4>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <label class="w-100">Skill<span class="text-danger">*</span> <span class="  font-urdu">(مہارت)</span></label>
                                                                <input type="text" class="form-control" id="fullName" placeholder="" />
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <label class="w-100">Skill Level<span class="text-danger">*</span> <span class="  font-urdu">(مہارت کی درجہ بندی)</span></label>
                                                                <select class="form-select">
                                                                    <option value="1">Beginner</option>
                                                                    <option value="1">Intermediate</option>
                                                                    <option value="2">Expert</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <label class="w-100">Skill Summary<span class="text-danger">*</span> <span class="  font-urdu">(مہارت کا خلاصہ)</span></label>
                                                                <input type="text" class="form-control" id="fullName" placeholder="" />
                                                            </div>
                                                            <div class="col-md-12 text-md-end mb-4">
                                                                <button type="button" class="btn btn-login"><i class="las la-plus-circle"></i> Add More (مزید ا ضافہ کریں)</button>
                                                            </div>
                                                            <hr/>
                                                            <div class="col-md-12 mb-3">
                                                                <h4 class="font-weight-bold">Training <span class="  font-urdu">(تربیت)</span></<h4>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <label class="w-100">Training Title<span class="text-danger">*</span> <span class="  font-urdu">(تربیت کا نام)</span></label>
                                                                            <input type="text" class="form-control" id="fullName" placeholder="Web Designing" />
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <label class="w-100">Institute type<span class="text-danger">*</span> <span class="  font-urdu">(ادارہ کی قسم )</span></label>
                                                                            <select class="form-select">
                                                                                <option value="1">Public</option>
                                                                                <option value="2">Private</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <label class="w-100">Origin of Institute<span class="text-danger">*</span> <span class="  font-urdu">(تنظیم کی اصل)</span></label>
                                                                            <div class="d-block">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                                                                    <label class="form-check-label" for="inlineRadio5">Local  <span class="font-urdu">(مقامی)</span></label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                                                                    <label class="form-check-label" for="inlineRadio6">Foreign <span class="font-urdu">(غیر ملکی)</span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <fieldset class="scheduler-border">
                                                                            <legend class="scheduler-border">Local <span class="font-urdu">(مقامی)</span><span class="text-danger">*</span></legend>
                                                                            <div class="row">
                                                                                <div class="col-md-6 mb-3">
                                                                                    <label class="w-100">Province<span class="text-danger">*</span> <span class="  font-urdu">(صوبہ)</span></label>
                                                                                    <select class="form-select">
                                                                                        <option value="1">Pakistan</option>
                                                                                        <option value="2">India</option>
                                                                                        <option value="3">Afghanistan</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 mb-3">
                                                                                    <label class="w-100">District<span class="text-danger">*</span> <span class="  font-urdu">(ضلع)</span></label>
                                                                                    <select class="form-select">
                                                                                        <option value="1">Pakistan</option>
                                                                                        <option value="2">India</option>
                                                                                        <option value="3">Afghanistan</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 mb-3">
                                                                                    <label class="w-100">City<span class="text-danger">*</span> <span class="  font-urdu">(شہر)</span></label>
                                                                                    <select class="form-select">
                                                                                        <option value="1">Pakistan</option>
                                                                                        <option value="2">India</option>
                                                                                        <option value="3">Afghanistan</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 mb-3">
                                                                                    <label class="w-100">Institute Name<span class="  font-urdu">(ادارہ)</span></label>
                                                                                    <select class="form-select">
                                                                                        <option value="1">xyz</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 mb-3">
                                                                                    <div class="form-check">
                                                                                        <label class="w-100">Other (Please Specify) <span class="text-danger">*</span> <span class="font-urdu">دیگر (وضاحت براہ مہربانی)</span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                        <fieldset class="scheduler-border">
                                                                            <legend class="scheduler-border">Foreign <span class="font-urdu">(غیر ملکی)</span> <span class="text-danger">*</span></legend>
                                                                            <div class="row">
                                                                                <div class="col-md-6 mb-3">
                                                                                    <label class="w-100">Country <span class="  font-urdu">(ملک)</span></label>
                                                                                    <select class="form-select">
                                                                                        <option value="1">Please Select</option>
                                                                                        <option value="2">India</option>
                                                                                        <option value="3">Afghanistan</option>
                                                                                    </select>
                                                                                </div>															
                                                                                <div class="col-md-6 mb-3">
                                                                                    <label class="w-100">State/City <span class="  font-urdu">(شہر)</span></label>
                                                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                </div>
                                                                                <div class="col-md-6 mb-3">
                                                                                    <label class="w-100">Institute Name<span class="  font-urdu">(ادارہ)</span></label>
                                                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                        <div class="col-md-6 mb-3">
                                                                            <label class="w-100">Start Date <span class="  font-urdu">(شروع کرنے کی تاریخ)</span></label>
                                                                            <input type="text" class="form-control" id="" name="date_birth" data-inputmask="'mask': '99/99/9999'" placeholder="dd/mm/yyyy"/>
                                                                        </div>
                                                                        <div class="col-md-6 mb-3">
                                                                            <label class="w-100">End Date <span class="  font-urdu">(تکمیل کی تاریخ)</span></label>
                                                                            <input type="text" class="form-control" id="" name="date_birth" data-inputmask="'mask': '99/99/9999'" placeholder="dd/mm/yyyy"/>
                                                                        </div>
                                                                        <div class="col-md-12 mb-3">
                                                                            <label class="w-100">Attach Training certificate <span class="  font-urdu">(تربیت کا سرٹیفکیٹ منسلک کریں)</span></label>
                                                                            <input class="form-control" type="file" id="formFile">
                                                                            <small class="small text-muted">(Maximum file size 2MB, File format JPG/PNG/JPEG)</small>
                                                                            <small class="small text-muted font-urdu d-block text-end">(فائل کا ۲ یم بی سے زیادہ نہ ہو اور اسی فارمیٹ جے پی جی،پی این جی، جےپی ای جی میں ہو)</small>
                                                                        </div>
                                                                        <div class="col-md-12 text-md-end mb-4">
                                                                            <button type="button" class="btn btn-login"><i class="las la-plus-circle"></i> Add More  (مزید ا ضافہ کریں)</button>
                                                                        </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <hr/>
                                                                            <div class="col-md-12 mb-3">
                                                                                <h4 class="font-weight-bold">Certifications <span class="  font-urdu">(تصدیقات)</span></<h4>
                                                                                        </div>
                                                                                        <div class="col-md-6 mb-3 ps-md-0">
                                                                                            <label for="fullName">Certifications <span class="  font-urdu">(تصدیقات)</span> </label>
                                                                                            <select class="form-select">
                                                                                                <option value="1">Web design</option>
                                                                                                <option value="2">Web development</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-6 mb-3">
                                                                                            <div class="form-check">
                                                                                                <label class="w-100">Other (Please Specify) <span class="text-danger">*</span> <span class="font-urdu">دیگر (وضاحت براہ مہربانی)</span>
                                                                                            </div>
                                                                                            <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                        </div>
                                                                                        <div class="col-md-6 mb-3">
                                                                                            <label for="fullName">Institute Type</label>
                                                                                            <div class="d-block">
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                                                                                    <label class="form-check-label" for="inlineRadio5">Local  <span class="font-urdu">(مقامی)</span></label>
                                                                                                </div>
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                                                                                    <label class="form-check-label" for="inlineRadio6">Foreign <span class="font-urdu">(غیر ملکی)</span></label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <fieldset class="scheduler-border">
                                                                                            <legend class="scheduler-border">Local <span class="font-urdu">(مقامی)</span><span class="text-danger">*</span></legend>
                                                                                            <div class="row">
                                                                                                <div class="col-md-6 mb-3">
                                                                                                    <label class="w-100">Province<span class="text-danger">*</span> <span class="  font-urdu">(صوبہ)</span></label>
                                                                                                    <select class="form-select">
                                                                                                        <option value="1">Pakistan</option>
                                                                                                        <option value="2">India</option>
                                                                                                        <option value="3">Afghanistan</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-6 mb-3">
                                                                                                    <label class="w-100">District<span class="text-danger">*</span> <span class="  font-urdu">(ضلع)</span></label>
                                                                                                    <select class="form-select">
                                                                                                        <option value="1">Pakistan</option>
                                                                                                        <option value="2">India</option>
                                                                                                        <option value="3">Afghanistan</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-6 mb-3">
                                                                                                    <label class="w-100">City<span class="text-danger">*</span> <span class="  font-urdu">(شہر)</span></label>
                                                                                                    <select class="form-select">
                                                                                                        <option value="1">Pakistan</option>
                                                                                                        <option value="2">India</option>
                                                                                                        <option value="3">Afghanistan</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-6 mb-3">
                                                                                                    <label class="w-100">Institute Name<span class="  font-urdu">(ادارہ)</span></label>
                                                                                                    <select class="form-select">
                                                                                                        <option value="1">xyz</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-6 mb-3">
                                                                                                    <div class="form-check">
                                                                                                        <label class="w-100">Other (Please Specify) <span class="text-danger">*</span> <span class="font-urdu">دیگر (وضاحت براہ مہربانی)</span>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                        <fieldset class="scheduler-border">
                                                                                            <legend class="scheduler-border">Foreign <span class="font-urdu">(غیر ملکی)</span> <span class="text-danger">*</span></legend>
                                                                                            <div class="row">
                                                                                                <div class="col-md-6 mb-3">
                                                                                                    <label class="w-100">Country <span class="  font-urdu">(ملک)</span></label>
                                                                                                    <select class="form-select">
                                                                                                        <option value="1">Please Select</option>
                                                                                                        <option value="2">India</option>
                                                                                                        <option value="3">Afghanistan</option>
                                                                                                    </select>
                                                                                                </div>															
                                                                                                <div class="col-md-6 mb-3">
                                                                                                    <label class="w-100">State/City <span class="  font-urdu">(شہر)</span></label>
                                                                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                                </div>
                                                                                                <div class="col-md-6 mb-3">
                                                                                                    <label class="w-100">Institute Name<span class="  font-urdu">(ادارہ)</span></label>
                                                                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                        <div class="col-md-6 mb-3">
                                                                                            <label for="fullName">Valid Till <span class="  font-urdu">(جائز بطرف)</span></label>
                                                                                            <div class="d-block">
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                                                                                    <label class="form-check-label" for="inlineRadio5">Life Time <span class="font-urdu">(زندگی کے اختتام تک)</span></label>
                                                                                                </div>
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                                                                                    <label class="form-check-label" for="inlineRadio6">Valid Till <span class="font-urdu">(جائز بطرف)</span></label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6 mb-3">
                                                                                            <label class="w-100">Validity Date<span class="text-danger">*</span> <span class="  font-urdu">(تاریخ جواز)</span></label>
                                                                                            <input type="text" class="form-control" id="" name="date_birth" data-inputmask="'mask': '99/99/9999'" placeholder="dd/mm/yyyy"/>
                                                                                        </div>
                                                                                        <div class="col-md-12 mb-3">
                                                                                            <label class="w-100">Attach Training certificate <span class="  font-urdu">(تربیت کا سرٹیفکیٹ منسلک کریں)</span></label>
                                                                                            <input class="form-control" type="file" id="formFile">
                                                                                            <small class="small text-muted">(Maximum file size 2MB, File format JPG/PNG/JPEG)</small>
                                                                                            <small class="small text-muted font-urdu d-block text-end">(فائل کا ۲ یم بی سے زیادہ نہ ہو اور اسی فارمیٹ جے پی جی،پی این جی، جےپی ای جی میں ہو)</small>
                                                                                        </div>
                                                                                        <div class="col-md-12 text-md-end">
                                                                                            <button type="button" class="btn btn-login"><i class="las la-plus-circle"></i> Add More  (مزید ا ضافہ کریں)</button>
                                                                                        </div>
                                                                                        </div>														
                                                                                        </div>
                                                                                        </section>
                                                                                        <!-- SECTION 4 -->
                                                                                        <h2>
                                                                                            <span class="step-icon"><i class="fa fa-book"></i></span>
                                                                                            <span class="step-text">Miscellaneous <span class="  font-urdu">(متفرق)</span></span>
                                                                                        </h2>
                                                                                        <section>
                                                                                            <div class="inner">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 mb-3">
                                                                                                        <h4 class="font-weight-bold">Achievements <span class="  font-urdu">(کامیابیاں)</span></<h4>
                                                                                                                </div>
                                                                                                                <div class="col-md-12 mb-3">
                                                                                                                    <label class="w-100">Achievements<span class="text-danger">*</span> <span class="  font-urdu">(کامیابیاں)</span></label>
                                                                                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                                                </div>
                                                                                                                <div class="col-md-12 text-md-end mb-4">
                                                                                                                    <button type="button" class="btn btn-login"><i class="las la-plus-circle"></i> Add More  (مزید ا ضافہ کریں)</button>
                                                                                                                </div>
                                                                                                                <hr/>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 mb-3">
                                                                                                                        <h4 class="font-weight-bold">Hobbies<span class="  font-urdu">(شوق)</span></<h4>
                                                                                                                                </div>
                                                                                                                                <div class="col-md-12 mb-3">
                                                                                                                                    <label class="w-100">Hobbies<span class="text-danger">*</span> <span class="  font-urdu">(شوق)</span></label>
                                                                                                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                                                                </div>
                                                                                                                                <div class="col-md-12 text-md-end mb-4">
                                                                                                                                    <button type="button" class="btn btn-login"><i class="las la-plus-circle"></i> Add More  (مزید ا ضافہ کریں)</button>
                                                                                                                                </div>
                                                                                                                                <hr/>
                                                                                                                                </div>	
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 mb-3">
                                                                                                                                        <h4 class="font-weight-bold">Future Vision <span class="  font-urdu">(مستقبل کا وژن)</span></<h4>
                                                                                                                                                </div>
                                                                                                                                                <div class="col-md-12 mb-3">
                                                                                                                                                    <label class="w-100">Future Vision<span class="text-danger">*</span> <span class="  font-urdu">(مستقبل کا وژن)</span></label>
                                                                                                                                                    <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                                                                                </div>
                                                                                                                                                <div class="col-md-12 text-md-end mb-4">
                                                                                                                                                    <button type="button" class="btn btn-login"><i class="las la-plus-circle"></i> Add More  (مزید ا ضافہ کریں)</button>
                                                                                                                                                </div>
                                                                                                                                                <hr/>
                                                                                                                                                </div>	
                                                                                                                                                <div class="row">
                                                                                                                                                    <div class="col-md-12 mb-3">
                                                                                                                                                        <h4 class="font-weight-bold">Languages <span class="  font-urdu">(زبانیں)</span></<h4>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-md-6 mb-3">
                                                                                                                                                                    <label class="w-100">Language<span class="text-danger">*</span> <span class="  font-urdu">(زبان)</span></label>
                                                                                                                                                                    <select class="form-select">
                                                                                                                                                                        <option value="1">English</option>
                                                                                                                                                                        <option value="2">Urdu</option>
                                                                                                                                                                        <option value="3">Hindi</option>
                                                                                                                                                                    </select>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-md-6 mb-3">
                                                                                                                                                                    <label class="w-100">Language Proficency<span class="text-danger">*</span> <span class="  font-urdu">(زبان میں مہارت)</span></label>
                                                                                                                                                                    <select class="form-select">
                                                                                                                                                                        <option value="1">Beginner</option>
                                                                                                                                                                        <option value="2">Intermediate</option>
                                                                                                                                                                        <option value="3">Expert</option>
                                                                                                                                                                    </select>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-md-12 text-md-end mb-4">
                                                                                                                                                                    <button type="button" class="btn btn-login"><i class="las la-plus-circle"></i> Add More  (مزید ا ضافہ کریں)</button>
                                                                                                                                                                </div>
                                                                                                                                                                </div>				
                                                                                                                                                                </div>
                                                                                                                                                                </section>
                                                                                                                                                                <!-- SECTION 5 -->
                                                                                                                                                                <h2>
                                                                                                                                                                    <span class="step-icon"><i class="fa fa-chalkboard"></i></span>
                                                                                                                                                                    <span class="step-text">Research <span class="  font-urdu">(تحقیق)</span>
                                                                                                                                                                </h2>
                                                                                                                                                                <section>
                                                                                                                                                                    <div class="inner">
                                                                                                                                                                        <div class="row">
                                                                                                                                                                            <div class="col-md-6 mb-3">
                                                                                                                                                                                <label class="w-100">Research Title<span class="text-danger">*</span> <span class="  font-urdu">(تحقیقی عنوان )</span></label>
                                                                                                                                                                                <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="col-md-6 mb-3">
                                                                                                                                                                                <label class="w-100">Research Venue<span class="text-danger">*</span> <span class="  font-urdu">(اشاعت مقام )</span></label>
                                                                                                                                                                                <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="col-md-6 mb-3">
                                                                                                                                                                                <label class="w-100">Research Date<span class="text-danger">*</span> <span class="  font-urdu">(اشاعت تاریخ)</span></label>
                                                                                                                                                                                <input type="text" class="form-control" id="" name="date_birth" data-inputmask="'mask': '99/99/9999'" placeholder="dd/mm/yyyy"/>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="col-md-6 mb-3">
                                                                                                                                                                                <label class="w-100">Research Link<span class="text-danger">*</span> <span class="  font-urdu">(اشاعت کا لنک)</span></label>
                                                                                                                                                                                <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="col-md-12 text-md-end">
                                                                                                                                                                                <button type="button" class="btn btn-login"><i class="las la-plus-circle"></i> Add More  (مزید ا ضافہ کریں)</button>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>														
                                                                                                                                                                    </div>
                                                                                                                                                                </section>
                                                                                                                                                                <!-- SECTION 6 -->
                                                                                                                                                                <h2>
                                                                                                                                                                    <span class="step-icon"><i class="fa fa-ethernet"></i></span>
                                                                                                                                                                    <span class="step-text">Preferred Jobs <span class="  font-urdu">(پسندیدہ ملازمتیں)</span></span>
                                                                                                                                                                </h2>
                                                                                                                                                                <section>
                                                                                                                                                                    <div class="inner">
                                                                                                                                                                        <div class="row">
                                                                                                                                                                            <div class="col-md-4 mb-3">
                                                                                                                                                                                <label class="w-100">Job Title<span class="text-danger">*</span> <span class="  font-urdu">(ملازمت کا عنوان)</span></label>
                                                                                                                                                                                <input type="text" class="form-control" id="fullName" placeholder="" />
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="col-md-4 mb-3">
                                                                                                                                                                                <label class="w-100">Career level<span class="text-danger">*</span> <span class="  font-urdu">(کیریئر کی سطح)</span></label>
                                                                                                                                                                                <select class="form-select">
                                                                                                                                                                                    <option value="1">xyz</option>
                                                                                                                                                                                </select>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="col-md-4 mb-3">
                                                                                                                                                                                <label class="w-100">Expected Salary<span class="text-danger">*</span> <span class="  font-urdu">(ہدف ماہانہ تنخواہ)</span></label>
                                                                                                                                                                                <select class="form-select">
                                                                                                                                                                                    <option value="1">xyz</option>
                                                                                                                                                                                </select>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="col-md-4 mb-3">
                                                                                                                                                                                <label class="w-100">Last Salary<span class="text-danger">*</span> <span class="  font-urdu">(آخری ماہانہ تنخواہ)</span></label>
                                                                                                                                                                                <select class="form-select">
                                                                                                                                                                                    <option value="1">xyz</option>
                                                                                                                                                                                </select>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>														
                                                                                                                                                                    </div>
                                                                                                                                                                </section>
                                                                                                                                                                </div>
                                                                                                                                                                </form>						
                                                                                                                                                                </div>
                                                                                                                                                                </div>
                                                                                                                                                                </div>

                                                                                                                                                                <div class="col-md-12 mb-4 text-center">
                                                                                                                                                                    <a href="javascript:void(0);" class="btn btn-login">Save & Update (محفوظ کریں اور تازہ کاری کریں)</a>
                                                                                                                                                                </div>
                                                                                                                                                                </div>
                                                                                                                                                                </div>
                                                                                                                                                                </section>
</main>

@endsection
                                                                                                                                              