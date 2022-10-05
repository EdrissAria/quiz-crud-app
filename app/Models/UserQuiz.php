<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuiz extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'type',
        'language',
        'score',
        'stars',
    ];

     /**
     * The every quiz belongs to a user.
     *
     * @function user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
