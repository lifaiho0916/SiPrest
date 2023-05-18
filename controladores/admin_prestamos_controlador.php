<?php


class AdminPrestamosControlador
{

    /*===================================================================*/
    //LISTAR PRESTAMOS POR ID DEL USUARIO
    
    /*===================================================================*/
    static public function ctrListarPrestamoPorUsuario()
    {
        $listPrestamosporUsuario = AdminPrestamosModelo::mdlListarPrestamoPorUsuario();
        return $listPrestamosporUsuario;
    }
    /*static public function ctrListarPrestamoPorUsuario($id_usuario)
    {
        $listPrestamosporUsuario = AdminPrestamosModelo::mdlListarPrestamoPorUsuario($id_usuario);
        return $listPrestamosporUsuario;
    }*/


    /*===================================================================*/
    //VER DETALLE DEL PRESTAMO
    /*===================================================================*/
    static public function ctrDetallePrestamo($nro_prestamo)
    {
        $detallePrestamo =  AdminPrestamosModelo::mdlDetallePrestamo($nro_prestamo);
        return $detallePrestamo;
    }


    /*===================================================================*/
    //PAGAR CUOTA DEL PRESTAMOP
    /*===================================================================*/
    static public function ctrPagarCuota($nro_prestamo, $pdetalle_nro_cuota, $pdetalle_monto_cuota,$id_usuario, $nombre_user)
    {
        $PagarCuota = AdminPrestamosModelo::mdlPagarCuota($nro_prestamo, $pdetalle_nro_cuota, $pdetalle_monto_cuota,$id_usuario, $nombre_user);
        return $PagarCuota;
    }


    /*===================================================================*/
    //OBTENER CUOTAS PAGADAS
    /*===================================================================*/
    static public function ctrObtenerCuotasPagadas($nro_prestamo)
    {
        $CuotasPagadas = AdminPrestamosModelo::mdlObtenerCuotasPagadas($nro_prestamo);
        return $CuotasPagadas;
    }



    /*===================================================================*/
    // LIQUIDAR PRESTAMO
    /*===================================================================*/
    static public function ctrLiquidarPrestamo($nro_prestamo, $pdetalle_nro_cuota)
    {
        $array_cuota =  explode(",", $pdetalle_nro_cuota);
        //  $array_monto =   explode(",", $pdetalle_monto_cuota);
        //  $array_fecha =   explode(",", $pdetalle_fecha);

        for ($i = 0; $i < count($array_cuota); $i++) {
            $LiquidarPrestamo = AdminPrestamosModelo::mdlLiquidarPrestamo($nro_prestamo, $array_cuota[$i]); //llamamos al metodo del modelo
        }

        return $LiquidarPrestamo;

    }

     /*===================================================================*/
    //PAGAR CUOTA DEL PRESTAMO MANU
    /*===================================================================*/
    static public function ctrPagarCuotaManu($nro_prestamo, $pdetalle_nro_cuota, $pdetalle_monto_cuota)
    {
        $PagarCuotaManu = AdminPrestamosModelo::mdlPagarCuotaManu($nro_prestamo, $pdetalle_nro_cuota, $pdetalle_monto_cuota);
        return $PagarCuotaManu;
    }


    /*===================================================================*/
    //PAGAR CUOTA DEL PRESTAMO MANUAL (SIGUIENTE CUOTA)
    /*===================================================================*/
    static public function ctrFinalizaPrest($nro_prestamo)
    {
        $FinalizaPrest = AdminPrestamosModelo::mdlFinalizaPrest($nro_prestamo);
        return $FinalizaPrest;
    }

     /*===================================================================
     //ACTUALIZAR FOTO DE LA GARANTIA
    ====================================================================*/
    static public function ctrActualizaFoto( $data, $imagen){

        $ActualizaFoto = AdminPrestamosModelo::mdlActualizaFoto( $data, $imagen);
        return $ActualizaFoto;

    }

     /*===================================================================*/
    //OBTENER CUOTAS PAGADAS
    /*===================================================================*/
    static public function ctrObtenerDiasMora($nro_prestamo, $pdetalle_nro_cuota)
    {
        $Diasmora = AdminPrestamosModelo::mdlObtenerDiasMora($nro_prestamo, $pdetalle_nro_cuota);
        return $Diasmora;
    }

      /*===================================================================*/
    //PAGAR CUOTA DEL PRESTAMO MANU
    /*===================================================================*/
    static public function ctrPagarMora($nro_prestamo, $pdetalle_nro_cuota, $pdetalle_monto_cuota, $pdetalle_dias_mora, $pdetalle_mora)
    {
        $PagarMora = AdminPrestamosModelo::mdlPagarMora($nro_prestamo, $pdetalle_nro_cuota, $pdetalle_monto_cuota, $pdetalle_dias_mora, $pdetalle_mora);
        return $PagarMora;
    }
}
