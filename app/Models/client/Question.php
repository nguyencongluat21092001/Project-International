<?php

namespace App\Models\client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = "user_question";
    
    protected $fillable = [
        "user_id", "question_id", "item_id", "value", "group_question"
    ];

    public function User()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
