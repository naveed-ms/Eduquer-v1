<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class educational_qualification extends Model
{
    protected $table = 'educational_qualification';
    protected $fillable = [
        'user_id',
        'degree_name',
        'no_of_years',
        'school_name',
        'country',
        'state',
        'city',
        'grade',
        'transcript'
    ];
}
