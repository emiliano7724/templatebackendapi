<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @property integer $id_dm
 * @property integer $cod_dm
 * @property integer $nlegajo_dm
 * @property string $dir_dm
 * @property string $cpos_dm
 * @property string $loc_dm
 * @property integer $pcia_dm
 * @property integer $dpto_dm
 * @property string $barrio_dm
 * @property string $seccional_dm
 * @property string $fecha_ocup_dm
 * @property integer $cod_ope_dm
 * @property integer $ur_ope_dm
 * @property string $secc_ope_dm
 * @property string $fecha_cga_dm
 * @property string $hora_cga_dm
 * @property string $created_at
 * @property string $updated_at
 */
class Domicilio extends Model
{
    use SoftDeletes;
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_dm';

    /**
     * @var array
     */
    protected $fillable = ['cod_dm', 'nlegajo_dm', 'dir_dm', 'cpos_dm', 'loc_dm', 'pcia_dm', 'dpto_dm', 'barrio_dm', 'seccional_dm', 'fecha_ocup_dm', 'cod_ope_dm', 'ur_ope_dm', 'secc_ope_dm', 'fecha_cga_dm', 'hora_cga_dm', 'created_at', 'updated_at'];



    public function scopePorLegajo($query, $legajo) // para  agregar al query la condicion de busqueda por legajo
    {
        return $query->where('nlegajo_dm', $legajo);
    }

    public function personal()
    {
        return $this->belongsTo(Personal::class,'nlegajo_dm','nlegajo_ps');
    }

    public function localidad()
    {
        return $this->belongsTo(Localidad::class,'cpos_dm','nro_cpos');
    }
    public function provincia()
    {
        return $this->belongsTo(Provincia::class,'pcia_dm','cod_pcias');
    }
    public function departamento()
    {
        return $this->belongsTo(Departamento::class,'dpto_dm','cod_dpto');
    }
   
}
