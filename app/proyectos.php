<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyectos extends Model
{
    protected $table='proyectos';
    protected $primaryKey='idproyecto';
    public $timestamps=true;
    protected $fillable=['img_fondo','img_interna','descripcion','rewrite','tipo_proyecto_grupo','estado_proyecto','img_banner','descripcion_banner','titulo_seccion','subtitulo_seccion','horario_atencion','telefono','whtspp_asessor','banner_form','avance','brochure','lat','long','distrito_proyecto','estado_label','link_lista_repro','masterplan','p_proyecto_relacionado','img_masterplan'];
    protected $guarded =['idproyecto'];
}
