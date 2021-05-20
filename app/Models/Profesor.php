<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellidos', 'email', 'localidad'];

    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class);
    }
}
