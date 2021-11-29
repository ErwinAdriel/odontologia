<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';
    public $timestamps = false;
    protected $with = ['especialidad', 'cargo'];

    /**
     * Get the user that owns the Medico
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class, 'id_especialidad', 'id');
    }

    /**
     * Get the user that owns the Medico
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'id_cargo', 'id');
    }

    
}
