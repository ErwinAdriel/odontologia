<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'turnos';
    public $timestamps = false;
    protected $with = ['medico', 'paciente'];

    /**
     * Get the medico te Turno
     *
     * @return \Illuminate\Medicobase\Eloquns\BelongsTo
     */
    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico', 'id');
    }

    /**
     * Get the paciente te Turno
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id');
    }

}
