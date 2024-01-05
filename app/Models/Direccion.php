<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Direccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'calle',
        'numero',
        'cod_postal',
        'municipio',
        'usuario_id',
    ];
    protected $table = 'direcciones';

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
