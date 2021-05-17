<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class JobEmployeeFutureVision extends Model
{
   
        protected $fillable = [
                            'employee_id',
                            'vision_name',
                            'created_by',
                            'updated_at',
                            'updated_by'
    					];
	public $timestamps    = false;
	protected $table      = 'tbl_job_employee_future_vision';
	protected $primaryKey = 'employee_vision_id';

    public static function insertData($request_data){

        $data = JobEmployeeFutureVision::insertGetId([
            "employee_id"                     => $request_data['employee_id'],
            "vision_name"                        => $request_data['vision_name'],
            "created_at"                    =>   Carbon::now(),
            "created_by"                    => '1',
        ]);
        
        return $data;
    
    }
    
    
}
