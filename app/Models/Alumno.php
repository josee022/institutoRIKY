<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Alumno extends Model
{
    use HasFactory;

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    // public function nota_por_criterio($ccee_id)
    // {
    //     return $this->notas()
    //         ->where('ccee_id', $ccee_id)
    //         ->max('nota');
    // }

    public function notas_por_criterios()
    {
        return $this->notas()
            ->select(DB::raw('alumno_id, ccee_id, max(nota) AS nota'))
            ->groupBy(['alumno_id', 'ccee_id'])
            ->get();
    }
}
