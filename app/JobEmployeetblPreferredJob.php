<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class JobEmployeetblPreferredJob extends Model
{
   
        protected $fillable = [
                            'employee_certification_id',
                            'employee_id',
                            'job_title',
                            'career_level',
                            'expected_salary',
                            'last_salary',
                            'created_by',
                            'created_at',
                            'updated_at',
                            'updated_by'
    					];
	public $timestamps    = false;
	protected $table      = 'tbl_job_employee_preferred_job';
	protected $primaryKey = 'employee_preferred_job_id';

    public static function insertData($request_data){
    
        // echo '---';
        // dd($request_data['logo']);
        // echo '---';

        $uploadedLogoPath = [];

        if(!empty($request_data['logo'])){

          //  $uploadedLogoPath = upload_image($request_data['logo'], '/images/employer/');
            
        }
       
            
        $data = JobEmployeetblPreferredJob::insertGetId([

            
      
            "employee_id"                     => '1',
            "job_title"                       => $request_data['job_title'],
            "career_level"                    => $request_data['career_level'],
            "expected_salary"                 => $request_data['expected_salary'],
            "last_salary"                     => $request_data['last_salary'],
            "created_at"                      =>   Carbon::now(),
            "created_by"                      => '1',

        ]);
        
        return $data;
    
    }
    
    
}
