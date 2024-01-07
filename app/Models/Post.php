<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tema;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'texto',
        'usuario_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function tema()
    {
        return $this->belongsToMany(Tema::class)->withTimestamps();
    }
}
