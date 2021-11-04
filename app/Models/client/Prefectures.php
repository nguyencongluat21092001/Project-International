<?php

namespace App\Models\client;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prefectures extends Model
{
    use HasFactory;

    use Notifiable;

    protected $table = "prefectures";
    
    protected $fillable = [
        "name"
    ];
}
