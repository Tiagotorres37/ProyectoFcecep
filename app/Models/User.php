<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fecha_de_nacimiento',
        'edad',
        'rol_id',
        'empleador_id',
        'descripcion',
        'documento_id',
        'documento',
        'fondos_pension_id',
        'institucion_id',
        'idioma_id',
        'ciudad_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function empleador()
    {
        return $this->belongsTo(User::class, 'empleador_id');
    }

    public function publicaciones()
    {
        return $this->hasMany(Publicacion::class);
    }

    public function idioma()
    {
        return $this->belongsTo(Idioma::class);
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class);
    }

    public function fondos_pension()
    {
        return $this->belongsTo(FondoPension::class);
    }

    public function eps()
    {
        return $this->belongsTo(Eps::class);
    }

    public function institucion(){
        return $this->belongsTo(Institucion::class);
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_id');
    }
}
