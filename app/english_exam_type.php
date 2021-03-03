<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class english_exam_type extends Model
{
    protected $table = 'english_exam_type';
    protected $fillable = [
        'user_id',
        'exam_type',
        'ielts_reading',
        'ielts_listening',
        'ielts_writing',
        'ielts_speaking',
        'gmat_verbal_score',
        'gmat_verbal_rank',
        'gmat_quo_score',
        'gmat_quo_rank',
        'gmat_writing_score',
        'gmat_writing_rank',
        'gmat_total_score',
        'gmat_total_rank',
        'toefl_reading',
        'toefl_listening',
        'toefl_writing',
        'toefl_speaking'
    ];
}
