<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'admin_id',
        'type',
        'time',
        'language',
        'question_num',
        'status'
    ];

    /**
     * The every quiz belongs to an admin.
     *
     * @function admin
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    /**
     * The quiz has many questions
     *
     * @function question
     */
    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
