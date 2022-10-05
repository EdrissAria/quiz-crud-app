<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'quiz_id',
        'question',
        'option_num'
    ];

    /**
     * The every question belongs to an quiz.
     *
     * @function quiz
     */
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

     /**
     * The question has many options
     *
     * @function option
     */
    public function option()
    {
        return $this->hasMany(Option::class);
    }
}
