<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'basic_five_math_question'; // Specify the table name

    protected $fillable = [
        'question_no',
        'question',
        'options',
        'answer',
        'info',
    ];

    protected $casts = [
        'options' => 'array', // You can also use 'json' if you prefer JSON format
    ];
    
}
