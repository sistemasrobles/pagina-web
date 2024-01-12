<?php

use App\proyectos;
function proyectos_menu(){

    $pro_helper=proyectos::where('tipo_proyecto_grupo','=','1')->where('estado_proyecto','=','1')->get();
    return $pro_helper;
}

?>
