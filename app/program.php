<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    protected $table = 'program';
    protected $fillable = [
        'user_id',
        // 'city',
        'country_of_choice',
        'university',
        'program',
        'intake_program'
    ];
}
