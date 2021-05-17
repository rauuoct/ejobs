<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class JobEmployeeResearch extends Model
{
            protected $fillable = [
                            'employee_id',
                            'research_title',
                            'research_venue',
                            'research_date',
                            'research_link',
                            'created_by',
                            'created_at',
                            'updated_at',
                            'updated_by'
    					];
	public $timestamps    = false;
	protected $table      = 'tbl_job_employee_research';
	protected $primaryKey = 'employee_research_id';

    public static function insertData($request_data){

        $data = JobEmployeeResearch::insertGetId([
            "employee_id"                     => $request_data['employee_id'],
            "research_title"                        => $request_data['research_title'],
            "research_venue"                        => $request_data['research_venue'],
            "research_date"                        => date('Y-m-d', strtotime($request_data['research_date'])),
            "research_link"                        => $request_data['research_link'],
            "created_at"                    =>   Carbon::now(),
            "created_by"                    => '1',
        ]);
        
        return $data;
    
    }
}
