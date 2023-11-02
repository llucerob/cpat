<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    
}
