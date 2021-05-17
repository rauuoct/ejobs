<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class JobEmployeeCertification extends Model
{
   
        protected $fillable = [
                            'employee_certification_id',
                            'employee_id',
                            'certification_id',
                            'certification_name_other',
                            'institute_type',
                            'province_id',
                            'district_id',
                            'local_city',
                            'institute_name_id',
                            'institute_name_other',
                            'country_id',
                            'state_name',
                            'validity_type',
                            'validity_date',
                            'created_by',
                            'created_at',
                            'updated_at',
                            'updated_by'
    					];
	public $timestamps    = false;
	protected $table      = 'tbl_job_employee_certification';
	protected $primaryKey = 'employee_certification_id';

    public static function insertData($request_data){
    
        // echo '---';
        // dd($request_data['logo']);
        // echo '---';

        $uploadedLogoPath = [];

        if(!empty($request_data['logo'])){

          //  $uploadedLogoPath = upload_image($request_data['logo'], '/images/employer/');
            
        }
       
            
        $data = JobEmployeeCertification::insertGetId([

            
      
            "employee_id"                     => $request_data['employee_id'],
            "certification_id"                => $request_data['certification_id'],
            "certification_name_other"        => $request_data['certification_name_other'],
            "institute_type"                  => $request_data['institute_type'],
            "province_id"                     => $request_data['province_id'],
            "district_id"                     => $request_data['district_id'],
            "local_city"                     => $request_data['local_city'],
            "institute_name_id"             => $request_data['institute_name_id'],
            "institute_name_other"          => $request_data['institute_name_other'],
            "country_id"                     => $request_data['country_id'],
            "state_name"                     => $request_data['state_name'],
            "validity_type"                 => $request_data['validity_type'],
            "validity_date"                 => date('Y-m-d', strtotime($request_data['validity_date'])),
            //"logo"                          => implode('|', $uploadedLogoPath),
            "created_at"                    =>   Carbon::now(),
            "created_by"                    => '1',

        ]);
        
        return $data;
    
    }
    
    
}
