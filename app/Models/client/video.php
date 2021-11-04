<?php

namespace App\Models\client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = [
        "link_id", "categories_id", "content", "title"
    ];

}
