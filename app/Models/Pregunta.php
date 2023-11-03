<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pregunta extends Model
{
    use HasFactory;

    protected $table = 'preguntas';

    /**
     * Get the seccion that owns the Pregunta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seccion(): BelongsTo
    {
        return $this->belongsTo(Seccion::class, 'id_seccion', 'id');
    }
    /**
     * Get all of the respuestas for the Pregunta
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function respuestas(): HasMany
    {
        return $this->hasMany(Respuesta::class, 'id_pregunta', 'id');
    }

    
}
