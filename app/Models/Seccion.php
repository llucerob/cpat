<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Seccion extends Model
{
    use HasFactory;
    protected $table = 'secciones';

    /**
     * Get all of the comments for the Seccion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function preguntas(): HasMany
    {
        return $this->hasMany(Pregunta::class,'id_seccion', 'id');
    }
    
    /**
     * Get all of the respuestas for the Seccion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function respuestas(): HasManyThrough
    {
        return $this->hasManyThrough(Respuesta::class, Pregunta::class, 'id_seccion', 'id_pregunta', 'id', 'id');


    }


}

