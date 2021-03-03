<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class basic_info extends Model
{
    protected $table = 'basic_info';
    protected $fillable = [
        'date_of_birth',
        'user_id',
        'country_of_birth',
        'nationality',
        'country_of_education',
        'highest_education',
        'grade',
        'study_visa'
    ];
}
