<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobEmployeeAcademic extends Model
{
       protected $fillable = [
        'is_literate',
        'degree_level_id',
        'degree_area_id',
        'institute_id',
        'other_institute',
        'other_institute_name',
        'institute_location',
        'province_id',
        'district_id',
        'local_city',
        'country_id',
        'major_subject',
        'start_date',
        'end_date',
        'grading_type',
        'obtained_markes'
    ];
    public    $timestamps = false;
    protected $primaryKey = 'employee_academic_id';
    protected $table      = 'tbl_job_employee_academic';
}
