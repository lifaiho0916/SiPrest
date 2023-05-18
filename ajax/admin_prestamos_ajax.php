<?php

require_once "../controladores/admin_prestamos_controlador.php";
require_once "../modelos/admin_prestamos_modelo.php";

class AjaxAdminPrestamos
{

    public $pdetalle_nro_cuota;
    public $nro_prestamo;
    public $pdetalle_monto_cuota;
    public $id_usuario;
    public $nombre_user;
    public $pdetalle_dias_mora;
    public $pdetalle_mora;


    /*===================================================================*/
    //LISTAR PRESTAMOS POR ID DEL USUARIO
    /*===================================================================*/
    public function ajaxListarPrestamoPorUsuario()
    {
        $listPrestamosporUsuario = AdminPrestamosControlador::ctrListarPrestamoPorUsuario();
        echo json_encode($listPrestamosporUsuario, JSON_UNESCAPED_UNICODE);
    }
    /*public function ajaxListarPrestamoPorUsuario($id_usuario)
    {
        $listPrestamosporUsuario = AdminPrestamosControlador::ctrListarPrestamoPorUsuario($id_usuario);
        echo json_encode($listPrestamosporUsuario, JSON_UNESCAPED_UNICODE);
    }*/


    /*===================================================================*/
    //VER DETALLE DEL PRESTAMO
    /*===================================================================*/
    public function ajaxDetallePrestamo($nro_prestamo)
    {
        $detallePrestamo = AdminPrestamosControlador::ctrDetallePrestamo($nro_prestamo);
        echo json_encode($detallePrestamo, JSON_UNESCAPED_UNICODE);
    }



    /*===================================================================*/
    //PAGAR CUOTA DEL PRESTAMO
    /*===================================================================*/
    public function ajaxPagarCuota()
    {
        $PagarCuota = AdminPrestamosControlador::ctrPagarCuota($this->nro_prestamo, $this->pdetalle_nro_cuota, $this->pdetalle_monto_cuota, $this->id_usuario, $this->nombre_user);
        echo json_encode($PagarCuota);
    }


    /*===================================================================*/
    //OBTENER CUOTAS PAGADAS
    /*===================================================================*/
    public function ajaxObtenerCuotasPagadas($nro_prestamo)
    {
        $CuotasPagadas = AdminPrestamosControlador::ctrObtenerCuotasPagadas($nro_prestamo);
        echo json_encode($CuotasPagadas, JSON_UNESCAPED_UNICODE);
    }


    /*===================================================================*/
    // LIQUIDAR PRESTAMO
    /*===================================================================*/
    public function ajaxLiquidarPrestamo($nro_prestamo, $pdetalle_nro_cuota)
    {
        $LiquidarPrestamo = AdminPrestamosControlador::ctrLiquidarPrestamo($nro_prestamo, $pdetalle_nro_cuota);
        echo json_encode($LiquidarPrestamo);
        //var_dump($LiquidarPrestamo);
    }

    /*===================================================================*/
    //PAGAR CUOTA DEL PRESTAMO MANU
    /*===================================================================*/
    public function ajaxPagarCuotaManu()
    {
        $PagarCuotaManu = AdminPrestamosControlador::ctrPagarCuotaManu($this->nro_prestamo, $this->pdetalle_nro_cuota, $this->pdetalle_monto_cuota);
        echo json_encode($PagarCuotaManu);
    }

    /*===================================================================*/
    //FINALIZAR EL PRESTAMO 
    /*===================================================================*/
    public function ajaxFinalizaPrest()
    {
        $FinalizaPrest = AdminPrestamosControlador::ctrFinalizaPrest($this->nro_prestamo);
        echo json_encode($FinalizaPrest);
    }


    /*===================================================================
     //ACTUALIZAR FOTO DE LA GARANTIA
    ====================================================================*/
    public function ajaxActualizaFoto($data, $imagen = null)
    {
        $ActualizaFoto = AdminPrestamosControlador::ctrActualizaFoto($data, $imagen);
        echo json_encode($ActualizaFoto);
    }

      /*===================================================================*/
    //OBTENER DIAS MORA
    /*===================================================================*/
    public function ajaxObtenerDiasMora($nro_prestamo, $pdetalle_nro_cuota){
        $Diasmora = AdminPrestamosControlador::ctrObtenerDiasMora($nro_prestamo, $pdetalle_nro_cuota);
        echo json_encode($Diasmora, JSON_UNESCAPED_UNICODE);
    }

    /*===================================================================*/
    //PAGAR MORA
    /*===================================================================*/
    public function ajaxPagarMora()
    {
        $PagarMora = AdminPrestamosControlador::ctrPagarMora($this->nro_prestamo, $this->pdetalle_nro_cuota, $this->pdetalle_monto_cuota, $this->pdetalle_dias_mora, $this->pdetalle_mora);
        echo json_encode($PagarMora);
    }
}




if (isset($_POST["accion"]) && $_POST["accion"] == 1) {             //LISTAR PRESTAMOS POR ID DEL USUARIO
    $listPrestamosporUsuario = new AjaxAdminPrestamos();
    $listPrestamosporUsuario->ajaxListarPrestamoPorUsuario();
    //$listPrestamosporUsuario->ajaxListarPrestamoPorUsuario($_POST["id_usuario"]);


} else if (isset($_POST['accion']) && $_POST['accion'] == 2) {       ///VER DETALLE DEL PRESTAMO
    $detallePrestamo = new AjaxAdminPrestamos();
    $detallePrestamo->ajaxDetallePrestamo($_POST["nro_prestamo"]);
} else if (isset($_POST['accion']) && $_POST['accion'] == 3) {       //PAGAR CUOTA DEL PRESTAMO
    $PagarCuota = new AjaxAdminPrestamos();
    $PagarCuota->nro_prestamo = $_POST["nro_prestamo"];
    $PagarCuota->pdetalle_nro_cuota = $_POST["pdetalle_nro_cuota"];
    $PagarCuota->pdetalle_monto_cuota = $_POST["pdetalle_monto_cuota"];
    $PagarCuota->id_usuario = $_POST["id_usuario"];
    $PagarCuota->nombre_user = $_POST["nombre_user"];
    $PagarCuota->ajaxPagarCuota();
} else if (isset($_POST['accion']) && $_POST['accion'] == 4) {        //OBTENER CUOTAS PAGADAS
    $CuotasPagadas = new AjaxAdminPrestamos();
    $CuotasPagadas->ajaxObtenerCuotasPagadas($_POST["nro_prestamo"]);
} else if (isset($_POST["accion"]) && $_POST["accion"] == 5) {        // LIQUIDAR PRESTAMO
    $LiquidarPrestamo = new AjaxAdminPrestamos();
    $LiquidarPrestamo->ajaxLiquidarPrestamo($_POST['nro_prestamo'],  $_POST['pdetalle_nro_cuota']);
} else if (isset($_POST['accion']) && $_POST['accion'] == 6) {       //PAGAR CUOTA DEL PRESTAMO MANUAL (SIGUIENTE CUOTA)
    $PagarCuotaManu = new AjaxAdminPrestamos();
    $PagarCuotaManu->nro_prestamo = $_POST["nro_prestamo"];
    $PagarCuotaManu->pdetalle_nro_cuota = $_POST["pdetalle_nro_cuota"];
    $PagarCuotaManu->pdetalle_monto_cuota = $_POST["pdetalle_monto_cuota"];
    $PagarCuotaManu->ajaxPagarCuotaManu();
} else if (isset($_POST['accion']) && $_POST['accion'] == 7) {       //FINALIZAR PRESTAMO (CUOTAS RESTANTES EN 0)
    $FinalizaPrest = new AjaxAdminPrestamos();
    $FinalizaPrest->nro_prestamo = $_POST["nro_prestamo"];
    $FinalizaPrest->ajaxFinalizaPrest();
}else if (isset($_POST['accion']) && $_POST['accion'] == 8) {


    $data = array(
        "nro_prestamo" => $_POST["nro_prestamo"],
        "nombre_img" => $_POST["nombre_img"]

    );

    if (isset($_FILES["archivo"]["name"])) {

        $imagen["ubicacionTemporal"] =  $_FILES["archivo"]["tmp_name"][0];

        //capturamos el nombre de la imagen
        $info = new SplFileInfo($_FILES["archivo"]["name"][0]);

        //generamos un nombre aleatorio y unico para la imagen
        $imagen["nuevoNombre"] = sprintf("%s_%d.%s", uniqid(), rand(100, 999), $info->getExtension());

        $imagen["folder"] = '../vistas/assets/img/garantias/';



        $ActualizaFoto = new AjaxAdminPrestamos();
        $ActualizaFoto->ajaxActualizaFoto($data, $imagen);
    } else {
        $ActualizaFoto = new AjaxAdminPrestamos();
        $ActualizaFoto->ajaxActualizaFoto($data);
    }
}
else if (isset($_POST['accion']) && $_POST['accion'] == 9) {        //OBTENER dias mora
    $Diasmora = new AjaxAdminPrestamos();
    $Diasmora->ajaxObtenerDiasMora($_POST["nro_prestamo"],$_POST["pdetalle_nro_cuota"]); 

}
else if (isset($_POST['accion']) && $_POST['accion'] == 10) {       //PAGAR CUOTA DEL PRESTAMO MANUAL (SIGUIENTE CUOTA)
    $PagarMora = new AjaxAdminPrestamos();
    $PagarMora->nro_prestamo = $_POST["nro_prestamo"];
    $PagarMora->pdetalle_nro_cuota = $_POST["pdetalle_nro_cuota"];
    $PagarMora->pdetalle_monto_cuota = $_POST["pdetalle_monto_cuota"];
    $PagarMora->pdetalle_dias_mora = $_POST["pdetalle_dias_mora"];
    $PagarMora->pdetalle_mora = $_POST["pdetalle_mora"];
    $PagarMora->ajaxPagarMora();

   
    
}
