<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCountry extends Model
{
    protected $fillable = [
        'country_id',
        'country_name',
        'is_active',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
    public    $timestamps = false;
    protected $primaryKey = 'country_id';
    protected $table      = 'tbl_job_country';
    
    
 public static function getCoungtryList() {
   //  return JobCountry::pluck('country_name', 'country_id')->toArray();
     return JobCountry::get(['country_name', 'country_id']);
 }
    
}
