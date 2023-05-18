<?php

require_once __DIR__ . '/vendor/autoload.php';
require '../conexion_reportes/r_conexion.php';
require 'numeroletras/CifrasEnLetras.php';
//Incluímos la clase pago
$v=new CifrasEnLetras(); 
$mpdf = new \Mpdf\Mpdf();
$query = "SELECT	
                pc.pres_id,
                pc.nro_prestamo,
                pc.cliente_id,
                c.cliente_nombres,
                c.cliente_dni,
                pc.pres_monto,
                pc.pres_interes,
                pc.pres_cuotas,
               -- pc.pres_fecha_registro,
                DATE_FORMAT(pc.pres_fecha_registro, '%d/%m/%Y') as pres_fecha_registro,
                pc.fpago_id,
                fp.fpago_descripcion,
                -- pc.pres_f_emision ,
                DATE_FORMAT(pc.pres_f_emision, '%d/%m/%Y') as pres_f_emision,
                pc.pres_aprobacion AS estado,
                pc.pres_monto_cuota,
                pc.pres_monto_interes,
                pc.pres_monto_total,
                pc.pres_cuotas_pagadas,
                empresa.confi_id,
                empresa.confi_razon,
                empresa.confi_ruc,
                empresa.confi_direccion,
                empresa.config_correo,
                pc.moneda_id,
                mo.moneda_nombre,
                mo.moneda_simbolo,
                pc.pres_monto_restante,
                pc.pres_cuotas_restante,
                pc.pres_estado,
				         pc.id_usuario,
				        u.usuario
                FROM
                prestamo_cabecera pc
                INNER JOIN clientes c ON pc.cliente_id = c.cliente_id
                INNER JOIN forma_pago fp ON pc.fpago_id = fp.fpago_id
                INNER JOIN moneda mo ON pc.moneda_id = mo.moneda_id
				INNER JOIN usuarios u ON pc.id_usuario = u.id_usuario,
                empresa 
                WHERE
                pc.nro_prestamo = '".$_GET['codigo']."'";

$resultado = $mysqli ->query($query);
while ($row1 = $resultado-> fetch_assoc()){
  $correoEmpresa = $row1['config_correo'];
	
	


$html = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
    <table style="border-collapse; " border="1" >
	    <thead >
	    	<tr>
            

	    		<th width="20%" style="border-top:0px; border-left:0px; border-bottom:0px; border-right:0px; "></th>

	    		<th width="50%" style="border-top:0px; border-left:0px; border-bottom:0px; border-right:0px; ">
                <h3 style="color:black; text-align:center;"><b><u>REPORTE DE CRONOGRAMA DE CUOTAS</u></b></h3><br>
               
	    		</th>

	    		<th width="30%" style="border-top:0px; border-left:0px; border-bottom:0px; border-right:0px; text-align:center;">
	    			
	    			<h3 style="color:black;">Nro :            '.$row1['nro_prestamo'].'</h3><br>
                 
	    		</th>
	    	</tr>
	    </thead>
    </table>
     

    </header>
 	<table  style="" class="round_table" >
	    <thead >
	    	<tr>
	    
	    		<th width="50%" style="  text-align:left; border-right:0px; ">
                        <h6 style="display: inline-block;margin: 0px;padding: 0px;  font-weight:normal;font-size:12px;color:black; ">Cliente &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; : &nbsp; &nbsp; &nbsp; '.$row1['cliente_nombres'].'</h6>	    			
	    			<br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Documento  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  : &nbsp; &nbsp; &nbsp; '.$row1['cliente_dni'].'</h6>
                    <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Fecha Prestamo&nbsp; &nbsp;: &nbsp; &nbsp; &nbsp; '.$row1['pres_fecha_registro'].'</h6><br>
                    <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Monto  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; &nbsp; &nbsp; '.$row1['moneda_simbolo'].'&nbsp;'.$row1['pres_monto'].'.00</h6>
                    <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Interes (%) &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; &nbsp; &nbsp; '.$row1['pres_interes'].'</h6>
                    <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Monto Interes &nbsp;&nbsp; &nbsp; &nbsp;: &nbsp; &nbsp; &nbsp; '.$row1['moneda_simbolo'].'&nbsp;'.$row1['pres_monto_interes'].'.00</h6>
                    <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Monto Total &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;: &nbsp; &nbsp; &nbsp; '.$row1['moneda_simbolo'].'&nbsp;'.$row1['pres_monto_total'].'.00</h6><br>

                    <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Monto Cuota &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; &nbsp; '.$row1['moneda_simbolo'].'&nbsp;'.$row1['pres_monto_cuota'].'</h6>
                    <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Nro Cuotas  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; &nbsp; '.$row1['pres_cuotas'].'</h6>
                    <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Forma de Pago&nbsp;&nbsp; &nbsp; &nbsp;: &nbsp; &nbsp; &nbsp; '.$row1['fpago_descripcion'].'</h6>
                    <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Moneda&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;: &nbsp; &nbsp; &nbsp; '.$row1['moneda_nombre'].'</h6>
	    			
	    			
	    		</th>
	    			
	    		</th>
	    		<th width="50%" style="text-align:right; border-left:0px;">
                <h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Usuario  &nbsp;&nbsp; &nbsp;  : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; '.$row1['usuario'].'</h6>
                <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Fecha  Emisi&oacute;n&nbsp; &nbsp; &nbsp;&nbsp; : &nbsp; &nbsp; &nbsp; '.$row1['pres_f_emision'].'</h6>   
                <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">Estado  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  : &nbsp; &nbsp; &nbsp; &nbsp; '.$row1['pres_estado'].'</h6><br>
                <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;"></h6>
                <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;"></h6>
                <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;"></h6>
                <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;"></h6><br>

                <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;"></h6>
                <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;"></h6>
                <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;"></h6>
                <br><h6 style="display: inline-block;margin: 0px;padding: 0px; font-weight:normal;font-size:12px;color:black;">  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; </h6>

	    			
	    		</th>

                

	    	</tr>
	    </thead>
    </table>
 
    <main>
      <table  style="border-collapse; " border="1" >
        <thead>
          <tr>
          
            <th style="color:black; background: #b9b6b6"><b>NRO CUOTA</b></th>
            <th style="color:black; background: #b9b6b6"><b>FECHA</b></th>
            <th style="color:black; background: #b9b6b6"><b>MONTO</b></th>
            <th style="color:black; background: #b9b6b6"><b>D. MORA</b></th>
            <th style="color:black; background: #b9b6b6"><b>MORA</b></th>
            <th style="color:black; background: #b9b6b6"><b>ESTADO</b></th>

          </tr>
        </thead>
        <tbody>';
        $query2 = "SELECT
                        pdetalle_id,
                        nro_prestamo,
                        pdetalle_nro_cuota,
                       -- DATE_FORMAT(pdetalle_fecha, '%d/%m/%y  %r') as fecha,
	                      DATE_FORMAT(pdetalle_fecha, '%d/%m/%Y') as fecha,
                        pdetalle_monto_cuota,
                        pdetalle_estado_cuota,
                        pdetalle_fecha_registro,
                        pdetalle_dias_mora,
                        pdetalle_mora 
                    FROM
                        prestamo_detalle
                    WHERE
                        nro_prestamo = '".$_GET['codigo']."' ";

						$contador=0;
						$resultado2 = $mysqli ->query($query2);
						while ($row2 = $resultado2-> fetch_assoc()){
							$contador++;

              if($row2['pdetalle_estado_cuota'] == "pagada") {

        $html.='<tr >
           
            <td class="desc" style="color:black; background: #dad4d4;">'.$row2['pdetalle_nro_cuota'].'</td>
            <td class="desc" style="color:black; background: #dad4d4;">'.$row2['fecha'].'</td>
            <td class="desc" style="color:black; background: #dad4d4;">'.round($row2['pdetalle_monto_cuota'],2).'</td>
            <td class="desc" style="color:black; background: #dad4d4;">'.$row2['pdetalle_dias_mora'].'</td>
            <td class="desc" style="color:black; background: #dad4d4;">'.$row2['pdetalle_mora'].'</td>
            <td class="desc" style="color:black; background: #dad4d4;">'.$row2['pdetalle_estado_cuota'].'</td>
            </tr>';
        }else{ 

          $html.='<tr >
           
            <td class="desc" style="color:black;">'.$row2['pdetalle_nro_cuota'].'</td>
            <td class="desc" style="color:black;">'.$row2['fecha'].'</td>
            <td class="desc" style="color:black;">'.round($row2['pdetalle_monto_cuota'],2).'</td>
            <td class="desc" style="color:black;">'.$row2['pdetalle_dias_mora'].'</td>
            <td class="desc" style="color:black;">'.$row2['pdetalle_mora'].'</td>
            <td class="desc" style="color:black;">'.$row2['pdetalle_estado_cuota'].'</td>
            </tr>';




        }
        
      }
  
        

          $html.='
           
        </tbody>
      </table>
     
      
    
    </main>
    <footer>

    </footer>
  </body>
</html>';
}
$css = file_get_contents('css/style_coti.css');
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output();