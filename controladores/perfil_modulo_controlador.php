<?php

class PerfilModuloControlador{


    /*===================================================================*/
    //REGISTRAR PERFIL MODULO
    /*===================================================================*/
    static public function ctrRegistrarPerfilModulo($array_idModulos, $idPerfil, $id_modulo_inicio){
        $registroPerfilModulo = PerfilModuloModelo::mdlRegistrarPerfilModulo($array_idModulos, $idPerfil, $id_modulo_inicio);
        return $registroPerfilModulo;
    }

}