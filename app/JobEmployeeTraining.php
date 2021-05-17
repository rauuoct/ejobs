<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class JobEmployeeTraining extends Model
{
   
        protected $fillable = [
                            'training_title',
                            'tr_institute_type',
                            'tr_institute_origin',
                            'tr_province_id',
                            'tr_district_id',
                            'tr_local_city',
                            'tr_institute_name_id',
                            'tr_institute_name_other',
                            'tr_country_id',
                            'tr_state_name',
                            'foreign_institute_name',
                            'validity_type',
                            'validity_date',
                            'created_by',
                            'created_at',
                            'updated_at',
                            'updated_by'
    					];
	public $timestamps    = false;
	protected $table      = 'tbl_job_employee_training_workshop';
	protected $primaryKey = 'employee_training_id';

    public static function insertData($request_data){
    
        // echo '---';
        // dd($request_data['logo']);
        // echo '---';

        $uploadedLogoPath = [];

        if(!empty($request_data['logo'])){

          //  $uploadedLogoPath = upload_image($request_data['logo'], '/images/employer/');
            
        }

            
        $skill_data = JobEmployeeTraining::insertGetId([

            
      
            "employee_id"                     => $request_data['employee_id'],
            "training_title"                     => $request_data['training_title'],
            "tr_institute_type"                        => $request_data['tr_institute_type'],
            "tr_institute_origin"                => $request_data['tr_institute_origin'],
            "tr_province_id"                        => $request_data['tr_province_id'],
            "tr_district_id"                        => $request_data['tr_district_id'],
            "tr_local_city"                        => $request_data['tr_local_city'],
            "tr_institute_name_id"                        => $request_data['tr_institute_name_id'],
            "tr_institute_name_other"                        => $request_data['tr_institute_name_other'],
            "tr_country_id"                        => $request_data['tr_country_id'],
            "tr_state_name"                        => $request_data['tr_state_name'],
            "foreign_institute_name"                        => $request_data['foreign_institute_name'],
            "validity_type"                        => $request_data['validity_type'],
            "validity_date"                        => $request_data['validity_date'],
            //"logo"                          => implode('|', $uploadedLogoPath),
            "created_at"                    =>   Carbon::now(),
            "created_by"                    => '1',

        ]);
        
        return $skill_data;
    
    }
    
    
}
