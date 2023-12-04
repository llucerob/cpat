<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Registro extends Model
{
    use HasFactory;

    protected $table = 'registros';
    /**
     * Get the user that owns the Registro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    /**
     * Get all of the comments for the Registro
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resultados(): HasMany
    {
        return $this->hasMany(RegistroAmp::class, 'registro_id', 'id');
    }

    


}
