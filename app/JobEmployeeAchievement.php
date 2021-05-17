<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class JobEmployeeAchievement extends Model
{
   
        protected $fillable = [
                            'employee_id',
                            'skill_name',
                            'skill_level_id',
                            'skill_summary',
                            'created_by',
                            'updated_at',
                            'updated_by'
    					];
	public $timestamps    = false;
	protected $table      = 'tbl_job_employee_achievement';
	protected $primaryKey = 'employee_achievement_id';

    public static function insertData($request_data){
    
        // echo '---';
        // dd($request_data['logo']);
        // echo '---';

        $data = JobEmployeeAchievement::insertGetId([
            "employee_id"                     => $request_data['employee_id'],
            "achievement_name"                        => $request_data['achievement_name'],
            "created_at"                    =>   Carbon::now(),
            "created_by"                    => '1',
        ]);
        
        return $data;
    
    }
    
    
}
