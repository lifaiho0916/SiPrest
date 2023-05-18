<?php

require_once "conexion.php";


class ReportesModelo
{

    /*=============================================
    Peticion LISTAR PARA MOSTRAR DATOS EN DATATABLE CON PROCEDURE
    =============================================*/
    static public function mdlReportePorCliente($cliente_id)
    {
        $stmt = Conexion::conectar()->prepare('call SP_REPORTE_POR_CLIENTE(:cliente_id)');
        $stmt->bindParam(":cliente_id", $cliente_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }



    /*=============================================
    Peticion LISTAR PARA MOSTRAR DATOS EN DATATABLE CON PROCEDURE
    =============================================*/
    static public function mdlCuotasPagadasReport($fecha_ini,$fecha_fin,$id_usuario)
    {
        $stmt = Conexion::conectar()->prepare('call SP_REPORTE_LISTAR_CUOTAS_PAGADAS(:fecha_ini, :fecha_fin, :id_usuario)');
        $stmt->bindParam(":fecha_ini", $fecha_ini, PDO::PARAM_STR);
        $stmt->bindParam(":fecha_fin", $fecha_fin, PDO::PARAM_STR);
        $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }


     /*=============================================
    Peticion LISTAR PARA MOSTRAR DATOS EN DATATABLE CON PROCEDURE
    =============================================*/
    static public function mdlReportePivot()
    {
        $stmt = Conexion::conectar()->prepare('call SP_REPORTE_PIVOT()');
        //$stmt->bindParam(":cliente_id", $cliente_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    /*===================================================================*/
    //SELECT  USUARIOS RECORD  EN COMBO
    /*===================================================================*/
    static public function mdlListarSelectUsuario()
    {
        $stmt = Conexion::conectar()->prepare('call SP_LISTAR_SELECT_USUARIO_RECORD()');
        $stmt->execute();
        return $stmt->fetchAll();
    }


    /*===================================================================*/
    //SELECT AÑOS RECORD EN COMBO
    /*===================================================================*/
    static public function mdlListarSelectAnio()
    {
        $stmt = Conexion::conectar()->prepare('call SP_LISTAR_SELECT_ANIO_RECORD()');
        $stmt->execute();
        return $stmt->fetchAll();
    }



    /*===================================================================*/
     //LISTAR  REPORTE RECOR POR USUARIO
     /*===================================================================*/
    static public function mdlReporteRecordUsu($id_usuario, $anio)
    {
        $stmt = Conexion::conectar()->prepare('call SP_REPORTE_PRESTAMOS_POR_ANIO_AND_USUARIO(:id_usuario, :anio)');
        $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_INT);
        $stmt->bindParam(":anio", $anio, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

     /*=============================================
    Peticion LISTAR PARA MOSTRAR DATOS EN DATATABLE CON PROCEDURE
    =============================================*/
    static public function mdlReportXUsuario($fecha_ini,$fecha_fin,$id_usuario)
    {
        $stmt = Conexion::conectar()->prepare('call SP_REPORTE_LISTAR_POR_USUARIO(:fecha_ini, :fecha_fin, :id_usuario)');
       
        $stmt->bindParam(":fecha_ini", $fecha_ini, PDO::PARAM_STR);
        $stmt->bindParam(":fecha_fin", $fecha_fin, PDO::PARAM_STR);
        $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

     /*=============================================
    Peticion LISTAR PARA MOSTRAR DATOS EN DATATABLE CON PROCEDURE
    =============================================*/
    static public function mdlReportePivotPorDia($fecha_ini,$fecha_fin)
    {
        $stmt = Conexion::conectar()->prepare('call SP_LISTAR_PIVOT_POR_FECHAS(:fecha_ini, :fecha_fin)');
        $stmt->bindParam(":fecha_ini", $fecha_ini, PDO::PARAM_STR);
        $stmt->bindParam(":fecha_fin", $fecha_fin, PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->fetchAll();
      //  var_dump($stmt);
    }
}
