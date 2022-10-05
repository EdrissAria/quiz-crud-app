<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question_id',
        'option',
        'answer'
    ];

    /**
     * The every option belongs to a question.
     *
     * @function question
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
