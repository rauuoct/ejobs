<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    
    protected $fillable = [
                            'occupation_name',
                            'created_at',
                            'created_by',
                            'updated_at',
                            'updated_by'
    					];
	public $timestamps    = false;
	protected $table      = 'tbl_job_occupation';
	protected $primaryKey = 'occupation_id';
        
        
        
    public function getListOccupation()
    {
        return $this->get(['occupation_id','occupation_name'])->toArray();
    }

}
