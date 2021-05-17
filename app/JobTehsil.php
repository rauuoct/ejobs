<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTehsil extends Model
{
    protected $fillable = [
        'tehsil_id',
        'district_id',
        'tehsil_name',
        'tehsil_code',
        'is_active',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
    public    $timestamps = false;
    protected $primaryKey = 'tehsil_id';
    protected $table      = 'tbl_job_tehsil';
    
    
   public static function getTehsilList() {
     return JobTehsil::get(['tehsil_name', 'tehsil_id']);
 }
}
