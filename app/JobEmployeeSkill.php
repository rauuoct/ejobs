<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class JobEmployeeSkill extends Model
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
	protected $table      = 'tbl_job_employee_skill';
	protected $primaryKey = 'employee_skill_id';

    public static function insertData($request_data){
    
        // echo '---';
        // dd($request_data['logo']);
        // echo '---';

        $uploadedLogoPath = [];

        if(!empty($request_data['logo'])){

          //  $uploadedLogoPath = upload_image($request_data['logo'], '/images/employer/');
            
        }

            
        $skill_data = JobEmployeeSkill::insertGetId([

            
      
            "employee_id"                     => $request_data['employee_id'],
            "skill_name"                        => $request_data['skill_name'],
            "skill_level_id"                => $request_data['skill_level_id'],
            "skill_summary"                        => $request_data['skill_summary'],
            //"logo"                          => implode('|', $uploadedLogoPath),
            "created_at"                    =>   Carbon::now(),
            "created_by"                    => '1',

        ]);
        
        return $skill_data;
    
    }
    
    
}
