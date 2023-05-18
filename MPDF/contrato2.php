<?php
require_once __DIR__ . '/vendor/autoload.php';
require '../conexion_reportes/r_conexion.php';
require './numeroletras/CifrasEnLetras.php';
//Incluímos la clase cifras
$v = new CifrasEnLetras();
$mpdf = new \Mpdf\Mpdf();
$query = "SELECT CONCAT(
                  CASE WEEKDAY(pres_fecha_registro)
                      WHEN 0 THEN 'Lunes'
                      WHEN 1 THEN 'Martes'
                      WHEN 2 THEN 'Miarcoles'
                      WHEN 3 THEN 'Jueves'
                      WHEN 4 THEN 'Viernes'
                      WHEN 5 THEN 'Sabado'
                      ELSE 'Domingo'
                  END,
                  ' ',
                  DATE_FORMAT(pres_fecha_registro, '%d de ')
                ) AS fecha_en_letras,
                             
                pc.pres_id,
                pc.nro_prestamo,
                pc.cliente_id,
                c.cliente_nombres,
                c.cliente_dni,
                c.cliente_direccion,
                pc.pres_monto,
                pc.pres_mora,
                pc.pres_interes,
                pc.pres_cuotas,
                pc.pres_fecha_registro,
                DAY(pc.pres_fecha_registro ) as dia,
                MONTH(pc.pres_fecha_registro ) as mes,
                YEAR(pc.pres_fecha_registro ) as anio,
                case month(pc.pres_fecha_registro) 
                                    WHEN 1 THEN 'Enero'
                                    WHEN 2 THEN  'Febrero'
                                    WHEN 3 THEN 'Marzo' 
                                    WHEN 4 THEN 'Abril' 
                                    WHEN 5 THEN 'Mayo'
                                    WHEN 6 THEN 'Junio'
                                    WHEN 7 THEN 'Julio'
                                    WHEN 8 THEN 'Agosto'
                                    WHEN 9 THEN 'Septiembre'
                                    WHEN 10 THEN 'Octubre'
                                    WHEN 11 THEN 'Noviembre'
                                    WHEN 12 THEN 'Diciembre'
                END mesnombre,
                pc.fpago_id,
                fp.fpago_descripcion,
               
                DATE_FORMAT(pc.pres_f_emision, '%d/%m/%Y') as pres_f_emision,
                DATE_FORMAT(pc.pres_fecha_registro, '%d/%m/%Y') as pres_fecha_registro,
                pc.pres_aprobacion AS estado,
                pc.pres_monto_cuota,
                pc.pres_monto_interes,
                pc.pres_monto_total,
                pc.pres_mora,
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

$resultado = $mysqli->query($query);
while ($row1 = $resultado->fetch_assoc()) {
  $totalpagar=($row1['pres_monto']);
    //$totalcuota=($row1['pres_monto_cuota']);

	//Convertimos el total en letras
	$letra=($v->convertirEurosEnLetras($totalpagar,));
        //$letra=($v->convertirEurosEnLetras($totalcuota,));
  
	

    $html = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contrato</title>
    <link rel="stylesheet"  media="all" /> 

<style>
     
      div #content 
      {
        padding-left: 500px;
        margin-top: 500px;
        font-size: 50px;
      }

  </style>

    
  </head>

  

  <body>


    <div class="content" style="text-align:center;">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>D NYD Y ASOCIADOS TU SOLUCION, S.R.L.</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;C/ Juan L&oacute;pez, No.18, Respaldo Los Tres Ojos, Mun. Santo Domingo Este, Provincia Santo Domingo RNC No. 1-32-10982-1</p> 
        
        <h4> PAGAR&Eacute; NOTARIAL <!--N&ordm; &nbsp;' . $row1['nro_prestamo'] . ' --> </h4>
    </div>
    <br><br>
   
    <div class="content" style="text-align:justify-all;" >                    


 <!--' . $row1['pres_fecha_registro'].'   '.$row1['fecha_en_letras'].' '.$row1['mesnombre'].' del '.$row1['anio'].'-->

        <p align="justify">

        En la ciudad de Santo Domingo, Distrito Nacional, Capital de la Rep&uacute;blica Dominicana, a los (' . $row1['dia'] . ') d&iacute;a del mes de ' . $row1['mesnombre'] .'  del a&ntilde;o (' . $row1['anio'] . '), por ante mi Dr. MANUEL EMILIO MENDEZ BATISTA, Abogado Notario-P&uacute;blico, de los del n&uacute;mero del Distrito Nacional, dominicano, mayor de edad, portador de la c&eacute;dula de identidad y electoral No.001-0908981-3, miembro activo del Colegio Dominicano de Notarios, matricula No.2058, con estudio profesional abierto en la Avenida Dr. Defill&oacute;, no. 37, Bella Vista, Distrito Nacional, <b>COMPARECEN</b> libre y voluntariamente de una parte el (la) se&ntilde;or (a) <b>' . $row1['cliente_nombres'] . ' </b> <b>(DEUDOR)</b> dominicano, mayor de edad, portador de la c&eacute;dula de identidad y electoral numero ' . $row1['cliente_dni'] . ', domiciliado y residente en la <b>' . $row1['cliente_direccion'] . ' </b>, y de la otra parte el se&ntilde;or <b>DANIEL MATOS MATOS</b>, dominicano, mayor de edad, portador de la cedula de identidad y electoral numero 402-1448402-0, domiciliado en esta ciudad de Santo Domingo Este, Santo Domingo, quien se denominar&aacute; en el presente acto en calidad de <b>ACREEDOR</b>, personas a quienes doy fe de haber identificado por sus respectivos documentos de identidad personal, <b>Y ME HAN DECLARADO</b> los comparecientes que el prop&oacute;sito de su comparecencia ante m&iacute;, en calidad de Notario P&uacute;blico, es hacer constar de manera aut&eacute;ntica, cada uno por separado y conjuntamente, todo lo que a continuaci&oacute;n se consigna:

        PRIMERO: Que el (la) se&ntilde;or, (a) <b>' . $row1['cliente_nombres'] . ' </b> declara que, en fecha d&iacute;a (' . $row1['dia'] . ') del mes de ' . $row1['mesnombre'] . ' del a&ntilde;o (' . $row1['anio'] . '), <b>SE HA DECLARADO FORMALMENTE DEUDOR</b> del se&ntilde;or <b>DANIEL MATOS MATOS,</b> por la suma de  <b>('.strtoupper($letra). ' ('.$row1['moneda_simbolo'].' '.$row1['pres_monto'].'),</b> monedas de curso legal que han recibido y aceptado <b>LOS DEUDORES,</b> comprometi&eacute;ndose a pagar en <b>'.$row1['pres_cuotas'].' CUOTAS</b> de <b>('.$row1['moneda_simbolo'].' '.$row1['pres_monto_cuota'].') PESOS DOMINICANOS,</b> el (la) se&ntilde;or (a) <b>' . $row1['cliente_nombres'] . ', </b> el <b>d&iacute;a (' . $row1['dia'] . ') del mes de '.$row1['mesnombre'].' del a&ntilde;o (' . $row1['anio'] . ')</b>, Sin que medie retraso alguno en el cumplimiento de sus obligaciones, y en caso de producirse atraso en dichos pagos, <b>EL DEUDOR,</b> se obliga a pagar de manera adicional el <b>'.$row1['pres_mora'].'%</b> por ciento ' . $row1['fpago_descripcion'] . ' por cada cuota vencida a titulo de cl&aacute;usula penal indemnizatoria a favor del se&ntilde;or <b>DANIEL MATOS MATOS</b>, porcentaje que se obliga y acepta pagar conjuntamente con el valor adeudado. <b>SEGUNDO</b>: convienen las partes que, en caso de incumplimiento de una cualquiera de las cuotas convenidas ser&aacute; facultad discrecional y unilateral del <b>ACREEDOR</b> aplicar cualquier pago a recibir en el orden siguiente: <b>PRIMERO</b>: A los gastos y honorarios en que incurra <b>EL ACREEDOR</b> originados en el incumplimiento de las obligaciones por parte de <b>EL DEUDOR, SEGUNDO:</b> a la cl&aacute;usula penal consentida <b>TERCERO:</b> a la deuda principal reconocida en el art&iacute;culo primero del presente acto, acordando adem&aacute;s las partes, conforme a las declaraciones ofrecidas al notario infrascrito que, en caso de atraso de dos cuotas, <b>EL DEUDOR,</b> perder&aacute; a opci&oacute;n del se&oacute;or <b>DANIEL MATOS MATOS,</b> el beneficio del plazo otorgado mediante el presente acto, en virtud de lo cual ser&aacute; exigible la totalidad del pago de los valores adeudados. <b>CUARTO:</b> Que en virtud de todo lo anterior y para seguridad y garant&iacute;a de los valores reconocidos como deudor, el (la) se&ntilde;or (a) <b>' . $row1['cliente_nombres'] . ', </b> reconocen, confieren y otorgan al presente Pagare Notarial, todas las prerrogativas contenidas en el Art. 545, del C&oacute;digo de Procedimiento Civil de la Rep&uacute;blica Dominicana; y en consecuencia otorga en garant&iacute;a todos sus bienes muebles e inmuebles presentes y futuros, <b>QUINTO:</b> Queda establecido que <b>EL DEUDOR,</b> en caso de ejecuci&oacute;n del presente Pagare Notarial, deber&aacute; cubrir los gastos de registro, de procedimiento y honorarios en que se incurra, independientemente del capital adeudado, los intereses y comisiones generados. <b>SEXTO:</b> los comparecientes declaran que hacen formal elecci&oacute;n de domicilio en las respectivas direcciones indicadas anteriormente. <b>SEPTIMO:</b> los comparecientes declaran que hacen formal elecci&oacute;n de domicilio en las respectivas direcciones indicadas anteriormente. El presente acto ha sido <b>HECHO Y PASADO</b> en presencia continua e interrumpida de los se&ntilde;ores <b>JADINSON DIGNOCLATE PEREZ TERRERO</b> y <b>ANGEL MANUEL MATOS,</b> dominicanos, mayores de edad, titulares de la c&eacute;dulas de identidad y electoral Nos. 069-0009562-8 y 402-4565180-3 domiciliados y residentes en esta ciudad de Santo Domingo Este, Santo Domingo, Rep&uacute;blica Dominicana, testigos instrumental, requeridos al efecto, libre de tachas y excepciones establecidas por la ley, quien despu&eacute;s de la lectura integra dada por m&iacute; en alta voz del presente acto, procedieron a firmar junto con los suscribientes como se&ntilde;al de aceptaci&oacute;n del presente pagar&eacute; Notarial por ante m&iacute; y junto conmigo, notario infrascrito, QUE CERTIFICA Y DOY FE. El mismo d&iacute;a mes y a&ntilde;o precedentemente indicado.



<br><br><br>


        <!--
        <p align="left">Se   suscribe   el   presente   contrato, en   ' . $row1['confi_direccion'] . ',       ' . $row1['dia'] . '   de ' . $row1['mesnombre'] . ' del ' . $row1['anio'] . '. </p>--> 

        <p align="center"> </p>
        <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ______________________________________________ &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>DEUDOR</b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>

          <br><br>

          <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ______________________________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>DANIEL MATOS MATOS</b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Acreedor&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>

          <br><br>

          <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ______________________________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>JADINSON DIGNOCLATE PEREZ TERRERO</b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Testigo&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>

          <br><br>

          <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ______________________________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<b>ANGEL MANUEL MATOS</b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Testigo&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>

          <br><br>

        <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ______________________________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<b>DR. MANUEL EMILIO MENDEZ BATISTA</b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Notario P&uacute;blico&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
        

    </div>


  <!-- 
    '.$row1['confi_razon'].' '.$row1['cliente_dni'].'
  --> 
    ';
    $html .= '
  
  </body>
</html>';
}
//$css = file_get_contents('css/style_coti.css');
// $mpdf->WriteHTML($css,1);
//$mpdf->WriteHTML(1);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output();
