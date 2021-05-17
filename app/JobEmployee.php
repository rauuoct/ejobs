<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobEmployee extends Model
{
    protected $fillable = [
        'employee_id',
        'user_id',
        'full_name',
        'email',
        'mobile',
        'dob',
        'age',
        'year',
        'gender_id',
        'marital_status',
        'father_name',
        'account_type',
        'domicile_distrcit_id',
        'occupation_distrcit_id',
        'tehsil_id',
        'town_id',
        'address',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'cnic',
        'b_form_no',
        'is_literate',
        'degree_level',
        'degree_area',
        'profession_id',
        'sub_profession_id',
        'experience',
        'province_id',
        'district_id',
        'city_id',
        'id_type'
    ];
    public    $timestamps = false;
    protected $primaryKey = 'employee_id';
    protected $table      = 'tbl_job_employee';
}
