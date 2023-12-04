<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegistroAmp extends Model
{
    use HasFactory;
    protected $table = 'registros_amp';

    /**
     * Get the pregunta that owns the RegistroAmp
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pregunta(): BelongsTo
    {
        return $this->belongsTo(Pregunta::class, 'pregunta_id', 'id');
    }
}

