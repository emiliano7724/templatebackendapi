<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_cpos
 * @property string $nro_cpos
 * @property integer $pcia_cpos
 * @property integer $dpto_cpos
 * @property string $loc_cpos
 * @property integer $cod_ope_cpos
 * @property integer $ur_ope_cpos
 * @property string $secc_ope_cpos
 * @property string $fecha_cga_cpos
 * @property string $hora_cga_cpos
 * @property string $obs_cpos
 * @property string $created_at
 * @property string $updated_at
 */
class Localidad extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'codpostales';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_cpos';

    /**
     * @var array
     */
    protected $fillable = ['nro_cpos', 'pcia_cpos', 'dpto_cpos', 'loc_cpos', 'cod_ope_cpos', 'ur_ope_cpos', 'secc_ope_cpos', 'fecha_cga_cpos', 'hora_cga_cpos', 'obs_cpos', 'created_at', 'updated_at'];
}
