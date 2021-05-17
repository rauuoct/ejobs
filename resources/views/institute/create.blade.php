@extends('master.master')
@section('content')
	@include('master.error')
	<section class="register-page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ms-auto px-0">
					<div class="login-content bg-white p-4">
						<h3 class="text-center"><span>Register</span> Training Institute</h3>
						<div class="alert alert-primary" role="alert">
						  	<p class="small">Note: Fields marked with an asterisk ( * ) are required and the data will not be saved without them.</p>
							<p class="text-end font-urdu small">نوٹ: ستارے (*) کے نشانات والے ڈیٹا فیلڈز درکار ہیں انھیں بھرنا لازمی ہے اور ان کے بغیر ڈیٹا محفوظ نہیں ہوگا۔</p>
							<hr class="d-block"/>
							<p class="small">Please enter required details and press the "Register" button.</p>
							<p class="text-end font-urdu small">برائے کرم ضروری تفصیلات درج کریں اور رجسٹر کا بٹن دبا ٗیں</p>
						</div>
						<form method="POST" action="{{ URL::to('institute/save') }}" class="row px-md-15" enctype="multipart/form-data">
                            {{ csrf_field() }}
							<div class="row justify-content-center">
							<div class="col-md-9 mb-3">
								<h4 class="">Basic Information of Training Institute<span class="float-end font-urdu">ٹریننگ انسٹی ٹیوٹ کی بنیادی معلومات</span></h4>
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Complete Name of Training Institute<span class="text-danger">*</span> <span class="  font-urdu">ٹریننگ انسٹی ٹیوٹ کا مکمل نام</span></label>
								<input type="text" class="form-control" id="name" name="name" required="" placeholder="" />
							</div>
							<div class="col-md-9 mb-3">
								<label class="">
									<span>Organization Type</span>
									<span class="font-urdu">تنظیم کی قسم</span>
								</label>
								<select class="form-select" id="type" name="type" aria-label="Floating label select example">
									<option value="1">Please Select</option>
									<option value="2">P-TEVTA</option>
									<option value="3">PVTC</option>
									<option value="3">GOVERNMENT</option>
									<option value="3">PRIVATE</option>
								</select>
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Registration Status of Training Institute<span class="  font-urdu">ٹریننگ انسٹی ٹیوٹ کی رجسٹریشن کی حیثیت</span></label>
								<div class="form-check form-check-inline">
								  	<input class="form-check-input" type="radio" name="status" id="registered" value="Registered">
								  	<label class="form-check-label" for="registered">Registered <span class="font-urdu">(رجسٹرڈ)</span></label>
								</div>
								<div class="form-check form-check-inline">
								  	<input class="form-check-input" type="radio" name="status" id="unregistered" value="Un-Registered">
								  	<label class="form-check-label" for="unregistered">Un-Registered <span class="font-urdu">(غیر رجسٹرڈ)</span></label>
								</div>
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Is Training Institute Registered with Punjab Skills Development Authority (PSDA)?<span class="  font-urdu">کیا ٹریننگ انسٹی ٹیوٹ پنجاب سکلز ڈویلپمنٹ اتھارٹی کے ساتھ رجسٹرڈ ہے؟</span></label>
								<div class="form-check form-check-inline">
								  	<input class="form-check-input" type="radio" name="psda_reg" id="psda_yes" value="Yes">
								  	<label class="form-check-label" for="psda_yes">Yes <span class="font-urdu">(جی ہاں)</span></label>
								</div>
								<div class="form-check form-check-inline">
								  	<input class="form-check-input" type="radio" name="psda_reg" id="psda_no" value="No">
								  	<label class="form-check-label" for="psda_no">No <span class="font-urdu">(نہیں)</span></label>
								</div>
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Registration No. of Training Institute<span class="text-danger">*</span> <span class="  font-urdu">ٹریننگ انسٹی ٹیوٹ کا رجسٹریشن نمبر</span></label>
								<input type="text" class="form-control" id="reg_no" name="reg_no" required="" placeholder="" />
							</div>
							<div class="col-md-9 mb-3">
								<h4 class="">Business Address <span class="float-end font-urdu">کاروباری پتہ</span></h4>
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Complete Registered Address of Training Institute <span class="text-danger">*</span> <span class="  font-urdu">تربیتی ادارے کا مکمل اندراج شدہ پتہ</span></label>
								<input type="text" class="form-control" id="address" name="address" required="" placeholder="" />
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Province <span class="text-danger">*</span> <span class="  font-urdu">صوبہ</span></label>
								<select class="form-select" id="province_id" name="province_id" required="">
								  	<option value="1">Punjab</option>
								  	<option value="2">KPK</option>
								  	<option value="3">Sindh</option>
								</select>
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">District<span class="text-danger">*</span> <span class="  font-urdu">ڈسٹرکٹ</span></label>
								<select class="form-select" id="district_id" name="district_id" required="">
								  <option value="1">Lahore</option>
								  <option value="2">Gujrat</option>
								  <option value="3">Gujranwala</option>
								</select>
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Tehsil <span class="text-danger">*</span> <span class="  font-urdu">تحصیل</span></label>
								<select class="form-select" id="tehsil_id" name="tehsil_id" required="">
								  <option value="1">Lahore</option>
								  <option value="2">Gujranwala</option>
								  <option value="3">Gujranwala</option>
								</select>
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">City <span class="text-danger">*</span> <span class="  font-urdu">شہر</span></label>
								<select class="form-select" id="town_id" name="town_id" required="">
								  <option value="1">Lahore</option>
								  <option value="2">Female</option>
								  <option value="3">Transgender</option>
								</select>
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Location on Map<span class="text-danger">*</span> <span class="  font-urdu">نقشہ پر جگہ</span></label>
								<input type="text" class="form-control" id="location" name="location" required="" placeholder="" />
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Website<span class="text-danger">*</span> <span class="  font-urdu">ویب سائٹ</span></label>
								<input type="url" class="form-control" id="website" name="website" required="" placeholder="" />
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Official Email Address<span class="text-danger">*</span> <span class="  font-urdu">کمپنی کا ای میل</span></label>
								<input type="text" class="form-control" id="email" name="email" data-inputmask="'alias': 'email'" />
							</div>
							<div class="col-md-9 text-start mb-3">
								<label class="w-100"> Official Contact Phone No.<span class="  font-urdu">آفیشل رابطہ فون نمبر</span></label>
								<div class="d-block">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="phone_type" id="landline" value="Landline No.">
									  <label class="form-check-label" for="landline">Landline No.<span class="font-urdu">(لینڈ لائن نمبر)</span></label>
									</div>
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="phone_type" id="mobile" value="Mobile No.">
									  <label class="form-check-label" for="mobile">Mobile No.<span class="font-urdu">(موبائل نمبر)</span></label>
									</div>								
								</div>
							</div>
							<div class="col-md-9 mb-3">
								<input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="" />
							</div>
							<div class="col-md-9 mb-3">
								<h4 class="w-100"> Autorized Person Detail <span class="float-end font-urdu">مجاز شخص کی تفصیلات</span></h4>
							</div>
							<div class="col-md-9 text-start mb-3">
								<label class="w-100">Authorized Person<span class="text-danger">*</span><span class="font-urdu">مجاز شخص</span></label>
								<div class="d-block">
									<div class="form-check form-check-inline">
									  	<input class="form-check-input" type="radio" name="authorized_person_type" id="owner" value="Owner">
									  	<label class="form-check-label" for="owner">Owner <span class="font-urdu">(مالک)</span></label>
									</div>								
									<div class="form-check form-check-inline">
									  	<input class="form-check-input" type="radio" name="authorized_person_type" id="employee" value="Employee">
									  	<label class="form-check-label" for="employee">Employee <span class="font-urdu">(ملازم)</span></label>
									</div>
								</div>
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Full Name of Authorized Person (as per CNIC)<span class="text-danger">*</span> <span class="font-urdu"> مجاز شخص کا پورا نام (قومی شناختی کارڈ کے مطابق)</span></label>
								<input type="text" class="form-control" id="authorized_person_name" name="authorized_person_name" placeholder="" />
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">CNIC No. of Authorized Person<span class="text-danger">*</span> <span class="font-urdu">مجاز شخص کا قومی شناختی کارڈ نمبر</span></label>
								<input type="text" class="form-control" name="authorized_person_cnic" id="authorized_person_cnic" data-inputmask="'mask': '99999-9999999-9'" />
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Complete Designation of Authorized Person<span class="text-danger">*</span> <span class="font-urdu">مجاز شخص کا مکمل عہدہ</span></label>
								<input type="text" class="form-control" id="authorized_person_designation" name="authorized_person_designation" placeholder="" />
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Mobile No. of Authorized Person<span class="text-danger">*</span> <span class="font-urdu">مجاز شخص کا موبائل نمبر</span></label>
								<input type="text" class="form-control" id="authorized_person_phone" name="authorized_person_phone" data-inputmask="'mask': ' 0999 999 9999'" />
							</div>
							<div class="col-md-9 mb-3">
								<label class="w-100">Email Address of Authorized Person<span class="text-danger">*</span> <span class="font-urdu">مجاز شخص کا ای میل پتہ</span></label>
								<input type="text" class="form-control" id="authorized_person_email" name="authorized_person_email" data-inputmask="'alias': 'email'" />
							</div>
							<div class="col-md-9 mb-3 text-start">
								<label class="w-100">Upload Training Institute's Logo<span class="text-danger">*</span> <span class="  font-urdu">ٹریننگ انسٹی ٹیوٹ کا لوگو اپلوڈ کریں</span></label>
								  	<input class="form-control form-control-lg" type="file" id="training_institute_logo" name="training_institute_logo">
									<small class="small text-muted">(Maximum file size 2MB, File format JPG/PNG/JPEG)</small>
									<small class="small text-muted font-urdu d-block text-end">فائل کا ۲ یم بی سے زیادہ نہ ہو اور اسی فارمیٹ جے پی جی،پی این جی، جےپی ای جی میں ہو</small>
							</div>
							<div class="col-md-12 text-center mt-3 mb-4">
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
