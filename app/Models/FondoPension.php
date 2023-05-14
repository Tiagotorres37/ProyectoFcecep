<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FondoPension extends Model
{
    use HasFactory;

    protected $table = 'fondos_pension';

    protected $fillable = ['id','nombre'];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
