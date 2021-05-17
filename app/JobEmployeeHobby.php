<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class JobEmployeeHobby extends Model
{
   
        protected $fillable = [
                            'employee_id',
                            'hobby_name',
                            'created_by',
                            'updated_at',
                            'updated_by'
    					];
	public $timestamps    = false;
	protected $table      = 'tbl_job_employee_hobbies';
	protected $primaryKey = 'employee_achievement_id';

    public static function insertData($request_data){

        $data = JobEmployeeHobby::insertGetId([
            "employee_id"                     => $request_data['employee_id'],
            "hobby_name"                        => $request_data['hobby_name'],
            "created_at"                    =>   Carbon::now(),
            "created_by"                    => '1',
        ]);
        
        return $data;
    
    }
    
    
}
