<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobDistrict extends Model
{
    protected $fillable = [
        'district_id',
        'province_id',
        'district_name',
        'district_code',
        'is_active',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
    public    $timestamps = false;
    protected $primaryKey = 'district_id';
    protected $table      = 'tbl_job_district';
    
 public static function getDistrictList() {
     return JobDistrict::get(['district_name', 'district_id']);
 }
}
