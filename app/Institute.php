<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    
    protected $fillable = [
    						'name',
                                                'type',
                                                'timing',
    						'status',
    						'psda_reg',
    						'reg_no',
    						'address',
                                                'town_id',
    						'location',
    						'website',
    						'email',
    						'phone_type',
    						'phone_no',
    						'authorized_person_type',
    						'authorized_person_name',
    						'authorized_person_cnic',
    						'authorized_person_designation',
    						'authorized_person_phone',
    						'authorized_person_email',
    						'training_institute_logo',
    						'created_at',
                            'updated_at',
                            'updated_by'
    					];
	public $timestamps    = false;
	protected $table      = 'tbl_job_training_institute';
	protected $primaryKey = 'training_institute_id';

}
