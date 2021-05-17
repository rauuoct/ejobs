<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobEmployeeExperience extends Model
{
       protected $fillable = [
        'employee_id',
        'province_id',
        'district_id',
        'local_city',
        'country_id',
        'state_city',
        'file',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'organization_type',
        'organization_name',
        'origin_organization',
        'designation',
        'start_date',
        'end_name',
        'still_work',
        'job_responsibility'
    ];
    public    $timestamps = false;
    protected $primaryKey = 'employee_experience_id';
    protected $table      = 'tbl_job_employee_experience';
}
