<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobProvince extends Model
{
    protected $fillable = [
        'province_id',
        'country_id',
        'province_name',
        'is_active',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
    public    $timestamps = false;
    protected $primaryKey = 'province_id';
    protected $table      = 'tbl_job_province';
    
     public static function getProvinceList() {
   //  return JobCountry::pluck('country_name', 'country_id')->toArray();
     return JobProvince::get(['province_name', 'province_id']);
 }
}
