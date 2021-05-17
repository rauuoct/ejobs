<?php

namespace App\Http\Controllers;

use App\JobEmployee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobEmployeeController extends Controller
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
    public function create()
    {
        
        
        $title = 'REGISTER EMPLOYEE';
        return view('employee.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request->all());
        //  exit;
        //validate data of form
        $this->validate(request(), [

            'full_name'                          => 'required',
            'gender_id'                         => 'required',
            'dob'                      => 'required',
            //'type'                          => 'required',
            'id_type'                        => 'required',
            'cnic'                      => 'required',
            'marital_status'                       => 'required',
            'is_literate'                      => 'required',
            'degree_level'                       => 'required',
            'degree_area'                    => 'required',
            'profession_id'                      => 'required',
            'sub_profession_id'        => 'required',
            'experience'        => 'required',
            'present_address'        => 'required',
            'province_id' => 'required',
            'district_id'       => 'required',
            'tehsil_id'       => 'required',
            'city_id'       => 'required',
            'city_id'       => 'required',
            'email'       => 'email',
          // 'email'       => 'required|image|mimes:jpeg,png,jpg|max:1048',
           // 'profile_image'       => 'required|image|mimes:jpeg,png,jpg|max:1048',

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
        $empData->full_name                          = request('full_name');
        $empData->gender_id                         = request('gender_id');
        $empData->dob                      = request('dob');
      //  $empData->type                          = request('type');
        $empData->id_type                        = request('id_type');
        $empData->cnic                      = request('cnic');
        $empData->marital_status                        = request('marital_status');
        $empData->is_literate                       = request('is_literate');
        $empData->degree_level                       = request('degree_level');
        $empData->degree_area                      = request('degree_area');
        $empData->profession_id                       = request('profession_id');
        $empData->sub_profession_id                         = request('sub_profession_id');
        $empData->experience                    = request('experience');
        $empData->present_address                      = request('present_address');
        $empData->province_id        = request('province_id');
        $empData->district_id        = request('district_id');
        $empData->tehsil_id        = request('tehsil_id');
        $empData->city_id = request('city_id');
        $empData->mobile       = request('mobile');
        $empData->email       = request('email');
        //$empData->training_institute_logo       = $uploadedLogoPath;
        $empData->created_at                    = Carbon::now();
        //dd($empData);
        //inserting the data in table
        $empData->save();

        //session()->flash('success', 'Employee Details are successfully Saved!');
        return redirect('/home');
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
}
