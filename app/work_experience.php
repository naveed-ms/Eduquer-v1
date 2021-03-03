<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work_experience extends Model
{
    protected $table = 'work_experience';
    protected $fillable = [
        'user_id',
        'company_name',
        'country',
        'state',
        'city',
        'start_date',
        'end_date',
        'title',
        'job_description'
    ];
}
