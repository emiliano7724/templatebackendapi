<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $nlegajo_ps
 * @property string $imagen_ps
 * @property integer $cuil_ps
 * @property integer $grado_ps
 * @property string $cpoesc_ps
 * @property integer $ud_ps
 * @property float $norden_ps
 * @property string $subud_ps
 * @property string $nombre_ps
 * @property integer $sexo_ps
 * @property string $fec_nac_ps
 * @property integer $ndoc_ps
 * @property integer $ecivil_ps
 * @property integer $gposgre_ps
 * @property integer $srevista_ps
 * @property integer $sestado_ps
 * @property integer $sseract_ps
 * @property integer $sinciso_ps
 * @property string $nrodctores_ps
 * @property string $fec_dctobaja_ps
 * @property string $fec_baja_ps
 * @property string $fec_alta_ps
 * @property integer $prof1_ps
 * @property integer $prof2_ps
 * @property integer $prof3_ps
 * @property string $capacitacion_ps
 * @property string $convheof_ps
 * @property string $funcion_ps
 * @property integer $dte_org_ps
 * @property integer $dte_sgre_ps
 * @property string $nrodctoing_ps
 * @property string $fec_dctoing_ps
 * @property integer $ud2_ps
 * @property string $subud2_ps
 * @property string $funcion2_ps
 * @property integer $cod_ope_ps
 * @property integer $ur_ope_ps
 * @property string $secc_ope_ps
 * @property string $fecha_cga_ps
 * @property string $hora_cga_ps
 * @property string $created_at
 * @property string $updated_at
 * @property integer $cod_agrup_ps
 */
class Personal extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'personal';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'nlegajo_ps';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['imagen_ps', 'cuil_ps', 'grado_ps', 'cpoesc_ps', 'ud_ps', 'norden_ps', 'subud_ps', 'nombre_ps', 'sexo_ps', 'fec_nac_ps', 'ndoc_ps', 'ecivil_ps', 'gposgre_ps', 'srevista_ps', 'sestado_ps', 'sseract_ps', 'sinciso_ps', 'nrodctores_ps', 'fec_dctobaja_ps', 'fec_baja_ps', 'fec_alta_ps', 'prof1_ps', 'prof2_ps', 'prof3_ps', 'capacitacion_ps', 'convheof_ps', 'funcion_ps', 'dte_org_ps', 'dte_sgre_ps', 'nrodctoing_ps', 'fec_dctoing_ps', 'ud2_ps', 'subud2_ps', 'funcion2_ps', 'cod_ope_ps', 'ur_ope_ps', 'secc_ope_ps', 'fecha_cga_ps', 'hora_cga_ps', 'created_at', 'updated_at', 'cod_agrup_ps'];
}
