<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $cod_dpto
 * @property integer $pcia_dpto
 * @property string $nom_dpto
 * @property integer $cod_ope_dpto
 * @property integer $ur_ope_dpto
 * @property string $secc_ope_dpto
 * @property string $fecha_cga_dpto
 * @property string $hora_cga_dpto
 * @property string $created_at
 * @property string $updated_at
 */
class Departamento extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_dpto';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['pcia_dpto', 'nom_dpto', 'cod_ope_dpto', 'ur_ope_dpto', 'secc_ope_dpto', 'fecha_cga_dpto', 'hora_cga_dpto', 'created_at', 'updated_at'];
}
