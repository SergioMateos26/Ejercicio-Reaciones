<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Tema extends Model
{
    use HasFactory;

    protected $fillable = [
        'tema',
    ];

    public function post()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}
