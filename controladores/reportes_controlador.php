<?php

class Reportescontrolador
{

    /*===================================================================*/
    //LISTAR REPORTE POR CLIENTE
    /*===================================================================*/
    static public function ctrReportePorCliente($cliente_id)
    {
        $reporteporCliente =  ReportesModelo::mdlReportePorCliente($cliente_id);
        return $reporteporCliente;
    }


    /*===================================================================*/
    //LISTAR REPORTE CUOTAS PAGADAS
    /*===================================================================*/
    static public function ctrCuotasPagadasReport($fecha_ini,$fecha_fin,$id_usuario)
    {
        $reportecuotasPagadas =  ReportesModelo::mdlCuotasPagadasReport($fecha_ini,$fecha_fin,$id_usuario);
        return $reportecuotasPagadas;
    }


    /*===================================================================*/
    //LISTAR REPORTE PIVOT
    /*===================================================================*/
    static public function ctrReportePivot()
    {
        $reportePivot =  ReportesModelo::mdlReportePivot();
        return $reportePivot;
    }


    /*===================================================================*/
    //SELECT USUARIO RECORD 
    /*===================================================================*/
    static public function ctrListarSelectUsuario()
    {
        $selectUsuario = ReportesModelo::mdlListarSelectUsuario();
        return $selectUsuario;
       
    }


    /*===================================================================*/
    //SELECT AÑOS RECORD 
    /*===================================================================*/
    static public function ctrListarSelectAnio()
    {
        $selectAnio = ReportesModelo::mdlListarSelectAnio();
        return $selectAnio;
       
    }



    /*===================================================================*/
    //LISTAR  REPORTE RECOR POR USUARIO
    /*===================================================================*/
    static public function ctrReporteRecordUsu($id_usuario, $anio)
    {
        $reportepoRecord =  ReportesModelo::mdlReporteRecordUsu($id_usuario, $anio);
        return $reportepoRecord;
    }


     /*===================================================================*/
    //LISTAR REPORTE POR USUARIO CON RANGO DE FECHAS
    /*===================================================================*/
    static public function ctrReportXUsuario($fecha_ini,$fecha_fin,$id_usuario)
    {
        $reportecuotasPagadasUsua =  ReportesModelo::mdlReportXUsuario($fecha_ini,$fecha_fin,$id_usuario);
        return $reportecuotasPagadasUsua;
    }

    /*===================================================================*/
    //LISTAR REPORTE PIVOT
    /*===================================================================*/
    static public function ctrReportePivotPorDia($fecha_ini,$fecha_fin)
    {
        $reportePivotDia =  ReportesModelo::mdlReportePivotPorDia($fecha_ini,$fecha_fin);
        return $reportePivotDia;
    }
}
