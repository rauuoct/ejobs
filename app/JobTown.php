<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTown extends Model
{
    protected $fillable = [
        'town_id',
        'tehsil_id',
        'town_name',
        'is_active',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
    public    $timestamps = false;
    protected $primaryKey = 'town_id';
    protected $table      = 'tbl_job_town';
}
