<?php

namespace App\Http\Controllers;

use App\Institute;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InstituteController extends Controller
{

    public function index()
    {
        //
    }

    public function create(){
        
        $title = 'Training Institute';
        return view('institute.create', compact('title'));

    }

    public function store(Request $request){

        //dd($request->all());
        //validate data of form
        $this->validate(request(), [

            'name'                          => 'required',
            'email'                         => 'required',
            'phone_no'                      => 'required',
            'type'                          => 'required',
            'status'                        => 'required',
            'psda_reg'                      => 'required',
            'town_id'                       => 'required',
            'location'                      => 'required',
            'website'                       => 'required',
            'phone_type'                    => 'required',
            'phone_no'                      => 'required',
            'authorized_person_type'        => 'required',
            'authorized_person_name'        => 'required',
            'authorized_person_cnic'        => 'required',
            'authorized_person_designation' => 'required',
            'authorized_person_phone'       => 'required',
            'authorized_person_email'       => 'required',
            'training_institute_logo'       => 'required|image|mimes:jpeg,png,jpg|max:1048',

        ]);

        //making object of Model Institute (class)
        $instituteData = new Institute;

        $uploadedLogoPath = '';
        //uploading training center logo
        if($file = $request->file('training_institute_logo')){

            $name            = $file->getClientOriginalName();
            $destinationPath = public_path('/images/institute/');
            $file->move($destinationPath, $name);
            $uploadedLogoPath        = $name; // this uploadedLogoPath will be use to insert in db

        }

        //insert data after making a object of related Model
        $instituteData->name                          = request('name');
        $instituteData->email                         = request('email');
        $instituteData->phone_no                      = request('phone_no');
        $instituteData->type                          = request('type');
        $instituteData->status                        = request('status');
        $instituteData->psda_reg                      = request('psda_reg');
        $instituteData->reg_no                        = request('reg_no');
        $instituteData->address                       = request('address');
        $instituteData->town_id                       = request('town_id');
        $instituteData->location                      = request('location');
        $instituteData->website                       = request('website');
        $instituteData->email                         = request('email');
        $instituteData->phone_type                    = request('phone_type');
        $instituteData->phone_no                      = request('phone_no');
        $instituteData->authorized_person_type        = request('authorized_person_type');
        $instituteData->authorized_person_name        = request('authorized_person_name');
        $instituteData->authorized_person_cnic        = request('authorized_person_cnic');
        $instituteData->authorized_person_designation = request('authorized_person_designation');
        $instituteData->authorized_person_phone       = request('authorized_person_phone');
        $instituteData->authorized_person_email       = request('authorized_person_email');
        $instituteData->training_institute_logo       = $uploadedLogoPath;
        $instituteData->created_at                    = Carbon::now();
        //dd($instituteData);
        //inserting the data in table
        $instituteData->save();

        //session()->flash('success', 'Employee Details are successfully Saved!');
        return redirect('/home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function show(Institute $institute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function edit(Institute $institute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institute $institute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institute $institute)
    {
        //
    }
}
