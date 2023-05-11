<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $table = 'publicaciones';

    protected $fillable = ['id','titulo','descripcion','salario','empleador_id'];

    public function empleador()
    {
        return $this->belongsTo(User::class, 'empleador_id');
    }
}