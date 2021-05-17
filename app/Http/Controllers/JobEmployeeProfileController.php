<?php

namespace App\Http\Controllers;

use App\JobEmployee;
use App\Occupation;
use App\JobEmployeeExperience;
use App\subOccupation;
use App\JobEmployeeSkill;
use App\JobEmployeeAchievement;
use App\JobEmployeeHobby;
use App\JobEmployeeFutureVision;
use App\JobEmployeeResearch;
use App\JobEmployeeTraining;
use App\JobEmployeeCertification;
use App\JobEmployeetblPreferredJob;
use App\JobEmployeeAcademic;
use App\JobCountry;
use App\JobProvince;
use App\JobDistrict;
use App\JobTehsil;
use App\JobTown;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobEmployeeProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProfilePersonal()
    {
       $ocp_obj =  new Occupation();
       $occupations =  $ocp_obj->getListOccupation();
       
       $ocp_obj =  new subOccupation();
       $sub_occupations =  $ocp_obj->getListSubOccupation();
       
       $countries = JobCountry::getCoungtryList();
       $provinces = JobProvince::getProvinceList();
       $districts = JobDistrict::getDistrictList();
       $tehsils = JobTehsil::getTehsilList();
       
       $title = 'REGISTER PROFILE';
       return view('employee.profilePersonal', compact('title','occupations','sub_occupations','countries','provinces','districts','tehsils'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         dd($request->all());
//          exit;
        //validate data of form
        $this->validate(request(), [

            'cnic'                          => 'required',
            'guardian_type'                         => 'required',
            'guardian_name'                      => 'required',
            //'type'                          => 'required',
            'gender_id'                        => 'required',
            'dob'                      => 'required',
            'marital_status'                       => 'required',
            'is_disability'                      => 'required',
            'disability'                       => 'required',
            'profession_id'                    => 'required',
            'sub_profession_id'                      => 'required',
            'experience'        => 'required',
            'present_address'        => 'required',
            'present_country_id'        => 'required',
            'present_province_id' => 'required',
            'present_district_id'       => 'required',
            'present_tehsil_id'       => 'required',
            'present_city_name'       => 'required',
       


        ]);

        //making object of Model Institute (class)
        $empData = new JobEmployee;

//        $uploadedLogoPath = '';
//        //uploading training center logo
//        if($file = $request->file('training_institute_logo')){
//
//            $name            = $file->getClientOriginalName();
//            $destinationPath = public_path('/images/institute/');
//            $file->move($destinationPath, $name);
//            $uploadedLogoPath        = $name; // this uploadedLogoPath will be use to insert in db
//
//        }

        //insert data after making a object of related Model
        $empData->cnic     = request('cnic');
        $empData->guardian_type    = request('guardian_type');
        $empData->guardian_name    = request('guardian_name');
        $empData->gender_id     = request('gender_id');
        $empData->dob        = request('dob');
        $empData->id_type    = request('id_type');
        $empData->marital_status    = request('marital_status');
        $empData->is_disability        = request('is_disability');
        $empData->disability       = request('disability');
        $empData->profession_id    = request('profession_id');
        $empData->sub_profession_id   = request('sub_profession_id');
        $empData->experience          = request('experience');
        $empData->present_address     = request('present_address');
        $empData->present_country_id  = request('present_country_id');
        $empData->present_province_id  = request('present_province_id');
        $empData->present_district_id   = request('present_district_id');
        $empData->present_tehsil_id     = request('present_tehsil_id');
        $empData->present_city_name     = request('present_city_name');
        $empData->permanent_address     = request('permanent_address');
        $empData->permanent_country_id  = request('permanent_country_id');
        $empData->permanent_province_id   = request('permanent_province_id');
        $empData->permanent_district_id   = request('permanent_district_id');
        $empData->permanent_tehsil_id     = request('permanent_tehsil_id');
        $empData->permanent_city_name     = request('permanent_city_name');
        $empData->mobile    = request('mobile');
        $empData->email    = request('email');
        
        $empData->created_at                    = Carbon::now();
    //    $empData->created_by                    = '';
        //dd($empData);
        //inserting the data in table
        $empData->save();

        //session()->flash('success', 'Employee Details are successfully Saved!');
        return redirect('/employee/profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAcademics(Request $request)
    {
       //  dd($request->all());
        //  exit;
        //validate data of form
        $this->validate(request(), [

            'is_literate'  => 'required',
            'degree_level_id'  => 'required',
            'degree_area_id'  => 'required',
            'institute_id'  => 'required',
            'other_institute'  => 'required',
            'other_institute_name'  => 'required',
            'institute_location'  => 'required',
            'province_id'  => 'required',
            'district_id'  => 'required',
            'local_city'  => 'required',
            'country_id'  => 'required',
            'major_subject'  => 'required',
            'start_date'  => 'required',
            'end_date'  => 'required',
            'grading_type'  => 'required',
            'obtained_markes'  => 'required',
           
       


        ]);

        //making object of Model Institute (class)
        $empData = new JobEmployeeAcademic;

//        $uploadedLogoPath = '';
//        //uploading training center logo
//        if($file = $request->file('training_institute_logo')){
//
//            $name            = $file->getClientOriginalName();
//            $destinationPath = public_path('/images/institute/');
//            $file->move($destinationPath, $name);
//            $uploadedLogoPath        = $name; // this uploadedLogoPath will be use to insert in db
//
//        }

        //insert data after making a object of related Model
        $empData->is_literate     = request('is_literate');
        $empData->degree_level_id    = request('degree_level_id');
        $empData->degree_area_id    = request('degree_area_id');
        $empData->institute_id     = request('institute_id');
        $empData->other_institute     = request('other_institute');
        $empData->other_institute_name     = request('other_institute_name');
        $empData->institute_location     = request('institute_location');
        $empData->province_id     = request('province_id');
        $empData->district_id     = request('district_id');
        $empData->local_city     = request('local_city');
        $empData->country_id     = request('country_id');
        $empData->start_date     = date('Y-m-d', strtotime(request('start_date')));
        $empData->end_date     = date('Y-m-d', strtotime(request('end_date')));
        $empData->grading_type     = request('grading_type');
        $empData->obtained_markes     = request('obtained_markes');
        $empData->created_at                    = Carbon::now();
    //    $empData->created_by                    = '';
        //dd($empData);
        //inserting the data in table
        $empData->save();

        //session()->flash('success', 'Employee Details are successfully Saved!');
        return redirect('/employee/profile');
    }
    public function storeExperience(Request $request)
    {
       //  dd($request->all());
       //   exit;
        //validate data of form
        $this->validate(request(), [

            'province_id'  => 'required',
            'district_id'  => 'required',
            'local_city'  => 'required',
            'country_id'  => 'required',
            'state_city'  => 'required',
           

        ]);

        //making object of Model Institute (class)
        $empData = new JobEmployeeExperience;

//        $uploadedLogoPath = '';
//        //uploading training center logo
//        if($file = $request->file('training_institute_logo')){
//
//            $name            = $file->getClientOriginalName();
//            $destinationPath = public_path('/images/institute/');
//            $file->move($destinationPath, $name);
//            $uploadedLogoPath        = $name; // this uploadedLogoPath will be use to insert in db
//
//        }

        //insert data after making a object of related Model
        $empData->organization_type     = request('organization_type');
        $empData->organization_name    = request('organization_name');
        $empData->origin_organization    = request('origin_organization');
        $empData->province_id    = request('province_id');
        $empData->district_id    = request('district_id');
        $empData->local_city    = request('local_city');
        $empData->country_id    = request('country_id');
        $empData->state_city    = request('state_city');
        $empData->designation    = request('designation');
        $empData->still_work    = request('still_work');
        $empData->start_date     = date('Y-m-d', strtotime(request('start_date')));
        $empData->end_date     = date('Y-m-d', strtotime(request('end_date')));
      
    
        $empData->created_at                    = Carbon::now();
    //    $empData->created_by                    = '';
        //dd($empData);
        //inserting the data in table
        $empData->save();

        //session()->flash('success', 'Employee Details are successfully Saved!');
        return redirect('/employee/profile');
    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  \App\JobEmployee  $jobEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(JobEmployee $jobEmployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobEmployee  $jobEmployee
     * @return \Illuminate\Http\Response
     */
    public function edit(JobEmployee $jobEmployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobEmployee  $jobEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobEmployee $jobEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobEmployee  $jobEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobEmployee $jobEmployee)
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\EmployerRegistration  $employerRegistration
     * @return \Illuminate\Http\Response
     */
    public function storeSkills(Request $request){
        
//        echo "<pre>";
//        print_r($request->all());
//        echo"</pre>";
//        exit;
        //dd($request->all());
        //validate data of form
        $this->validate(request(), [

            'skill_name'                     => 'required|array',
            'skill_level_id'                     => 'required|array',
            'skill_summary'                     => 'required|array',
            
            'training_title'                     => 'required|array',
            'tr_institute_type'                     => 'required|array',

          
  
           // 'logo.*'                        => 'required|image|mimes:jpeg,png,jpg|max:1048',

        ]);
        
       
        
        try {
            
            #save skills input array
            foreach ($request->all()['skill_name'] as $key => $value) {
                $data_skill =  array();
                $data_skill['skill_name'] =  $value;
                $data_skill['skill_name'] =  $request->all()['skill_name'][$key];
                $data_skill['skill_level_id'] =  $request->all()['skill_level_id'][$key];
                $data_skill['skill_summary'] =  $request->all()['skill_summary'][$key];
                $data_skill['employee_id'] =  '1';
            //pass request data for Employer Registration skill  MODEL 
                $skill_data = JobEmployeeSkill::insertData( $data_skill );
            //dd($employer_data);
              } 
            //session()->flash('success', 'Employee Details are successfully Saved!');
              
              
              
            #save Training  input array
            foreach ($request->all()['training_title'] as $key => $value) {
                $data_training =  array();
                $data_training['training_title'] =  $value;
                $data_training['tr_institute_type'] =  $request->all()['tr_institute_type'][$key];
                $data_training['tr_institute_origin'] =  $request->all()['tr_institute_origin'][$key];
                $data_training['tr_province_id'] =  $request->all()['tr_province_id'][$key];
                $data_training['tr_district_id'] =  $request->all()['tr_district_id'][$key];
                $data_training['tr_local_city'] =  $request->all()['tr_local_city'][$key];
                $data_training['tr_institute_name_id'] =  $request->all()['tr_institute_name_id'][$key];
                $data_training['tr_institute_name_other'] =  $request->all()['tr_institute_name_other'][$key];
                $data_training['tr_country_id'] =  $request->all()['tr_country_id'][$key];
                $data_training['tr_state_name'] =  $request->all()['tr_state_name'][$key];
                $data_training['foreign_institute_name'] =  $request->all()['foreign_institute_name'][$key];
                $data_training['validity_type'] =  $request->all()['validity_type'][$key];
                $data_training['validity_date'] =  date('Y-m-d', strtotime($request->all()['validity_date'][$key]));
                $data_training['employee_id'] =  '1';
            //pass request data for Employer Registration skill  MODEL 
                $training_obj = JobEmployeeTraining::insertData( $data_training );
            //dd($employer_data);
              } 
              
              
            #save certification  input array
            foreach ($request->all()['certification_id'] as $key => $value) {
                $data_training =  array();
                $data_training['certification_id'] =  $value;
                $data_training['certification_name_other'] =  $request->all()['certification_name_other'][$key];
                $data_training['institute_type'] =  $request->all()['institute_type'][$key];
                $data_training['province_id'] =  $request->all()['province_id'][$key];
                $data_training['district_id'] =  $request->all()['district_id'][$key];
                $data_training['local_city'] =  $request->all()['local_city'][$key];
                $data_training['institute_name_id'] =  $request->all()['institute_name_id'][$key];
                $data_training['institute_name_other'] =  $request->all()['institute_name_other'][$key];
                $data_training['country_id'] =  $request->all()['country_id'][$key];
                $data_training['state_name'] =  $request->all()['state_name'][$key];
                $data_training['foreign_institute_name'] =  $request->all()['foreign_institute_name'][$key];
                $data_training['validity_type'] =  $request->all()['validity_type'][$key];
                $data_training['validity_date'] =  $request->all()['validity_date'][$key];
                $data_training['employee_id'] =  '1';
            //pass request data for Employer Registration skill  MODEL 
                $training_obj = JobEmployeeCertification::insertData( $data_training );
            //dd($employer_data);
              } 
              
          
            if($skill_data != 0){

                return redirect('/home');

            }
            
        } catch (Exception $e) {

            dd($e);
            
        }

    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\EmployerRegistration  $storeMiscellaneous
     * @return \Illuminate\Http\Response
     */
    public function storeMiscellaneous(Request $request){
        //dd($request->all());
        //validate data of form
        $this->validate(request(), [

            'achievement_name'                     => 'required|array',
            'hobby_name'                     => 'required|array',
            'vision_name'                     => 'required|array',

        ]);
        
        try {
            
            #save Achievement input array
            foreach ($request->all()['achievement_name'] as $key => $value) {
                $data_ach =  array();
                $data_ach['employee_id'] =  '1';
                $data_ach['achievement_name'] =  $value;
                //pass request data for Employer Registration Achievement MODEL 
                $Achievement_obj = JobEmployeeAchievement::insertData( $data_ach );
            } 
        
              
            #save Hobby input array
            foreach ($request->all()['hobby_name'] as $key => $value) {
                $data_hob =  array();
                $data_hob['employee_id'] =  '1';
                $data_hob['hobby_name'] =  $value;
                //pass request data for Employer Registration Hobby MODEL 
                $hob_obj = JobEmployeeHobby::insertData( $data_hob );
            } 
              
            #save vision input array
            foreach ($request->all()['vision_name'] as $key => $value) {
                $data_f =  array();
                $data_f['employee_id'] =  '1';
                $data_f['vision_name'] =  $value;
                //pass request data for Employer Registration vision MODEL 
                $v_obj = JobEmployeeFutureVision::insertData( $data_f );
            } 
       
    
          
            if($v_obj != 0){

                return redirect('/employee/profile');

            }
            
        } catch (Exception $e) {

            dd($e);
            
        }

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\EmployerRegistration  $storeMiscellaneous
     * @return \Illuminate\Http\Response
     */
    public function storeResearch(Request $request){
        //dd($request->all());
        //validate data of form
        $this->validate(request(), [

            'research_title'                     => 'required|array',
            'research_venue'                     => 'required|array',
            'research_date'                     => 'required|array',
            'research_link'                     => 'required|array',

        ]);
        
        try {
            
            #save research input array
            foreach ($request->all()['research_title'] as $key => $value) {
                $data_ach =  array();
                $data_ach['employee_id'] =  '1';
                $data_ach['research_title'] =  $value;
                $data_ach['research_venue'] =  $request->all()['research_venue'][$key];
                $data_ach['research_date'] =  $request->all()['research_date'][$key];
                $data_ach['research_link'] =  $request->all()['research_link'][$key];
                //pass request data for Employer Registration Achievement MODEL 
                $obj = JobEmployeeResearch::insertData( $data_ach );
            } 
        
            if($obj != 0){

                return redirect('/employee/profile');

            }
            
        } catch (Exception $e) {

            dd($e);
            
        }

    }
    
       /**
     * Display the specified resource.
     *
     * @param  \App\EmployerRegistration  $storeMiscellaneous
     * @return \Illuminate\Http\Response
     */
    public function storePreferredJob(Request $request){
        //dd($request->all());
        //validate data of form
        $this->validate(request(), [

            'job_title'                     => 'required',
            'career_level'                     => 'required',
            'expected_salary'                     => 'required',
            'last_salary'                     => 'required',

        ]);
        
        try {
            
            #save research input array
            $obj = JobEmployeetblPreferredJob::insertData( $request->all() );
        
            if($obj != 0){

                return redirect('/employee/profile');

            }
            
        } catch (Exception $e) {

            dd($e);
            
        }

    }
    
    
}
