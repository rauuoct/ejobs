<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subOccupation extends Model
{
    
    protected $fillable = [
                            'sub_occupation_id',
                            'occupation_id',
                            'sub_occupation_name',
                            'created_at',
                            'created_by',
                            'updated_at',
                            'updated_by'
    					];
	public $timestamps    = false;
	protected $table      = 'tbl_job_sub_occupation';
	protected $primaryKey = 'occupation_id';
        
        
        
    public function getListSubOccupation()
    {
        return $this->get(['sub_occupation_id','occupation_id','sub_occupation_name'])->toArray();
    }

}
