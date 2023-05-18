<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


require_once __DIR__ . '/vendor/autoload.php';
require '../conexion_reportes/r_conexion.php';
//require 'numeroletras/CifrasEnLetras.php';
//Incluímos la clase pago
//$v=new CifrasEnLetras(); 
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [80, 120]]);
$query = "SELECT caja.caja_id, 
				caja.caja_descripcion, 
				caja.caja_monto_inicial, 
				caja.caja_prestamo, 
				caja.caja_monto_ingreso,
				caja.caja__monto_egreso, 
				DATE_FORMAT(caja.caja_f_apertura, '%d/%m/%Y') as caja_f_apertura,
				DATE_FORMAT(caja.caja_f_cierre, '%d/%m/%Y') as caja_f_cierre, 
				caja.caja_count_ingreso, 
				caja.caja_count_egreso, 
				caja.caja_count_prestamo,
				caja.caja_monto_total, 
				caja.caja_hora_apertura, 
				caja.caja_estado, 
				caja.caja_hora_cierre, 
				empresa.confi_razon,
				empresa.config_correo,
				caja.caja_interes
				FROM
				caja,
				empresa
				WHERE caja.caja_id =   '" . $_GET['codigo'] . "'";

$estado = "";

$resultado = $mysqli->query($query);
while ($row1 = $resultado->fetch_assoc()) {
	$estado = $row1['caja_estado'];
	$correoEmpresa = $row1['config_correo'];
	$razon = $row1['confi_razon'];


	//para ver el logo en la i,presion
	//<h3 style="text-align:center;display: inline-block;margin: 0px;padding: 0px; "><img src="../'.$row1['config_foto'].'" width="45px"></h3><br>

	$html .= '
<style>
		@page {
		margin: 10mm;
		margin-header: 0mm;
		margin-footer: 0mm;
		odd-footer-name: html_myfooter1;
		}

</style>	
	<h5 style="text-align:center;display: inline-block;margin: 0px;padding: 0px; ">' . $row1['confi_razon'] . '</h5><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arqueo de Caja<br>
	-----------------------------------------<br>
	
	<h6 style="display: inline-block;margin: 0px;padding: 0px;  font-size:11px">Ticket N.:&nbsp; 000' . $row1['caja_id'] . '&nbsp;</h6>
	<h6 style="display: inline-block;margin: 0px;padding: 0px;  font-weight:normal;">Apertura&nbsp;:&nbsp; ' . $row1['caja_f_apertura'] . ' - ' . $row1['caja_hora_apertura'] . '</h6>
	<h6 style="display: inline-block;margin: 0px;padding: 0px;  font-weight:normal;">Cierre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; ' . $row1['caja_f_cierre'] . ' - ' . $row1['caja_hora_cierre'] . '</h6>
	
		 
	------------------------------------------<br>
	<h6 style="display: inline-block;margin: 0px;padding: 0px;  font-weight:normal;">Monto Apertura&nbsp; : &nbsp;&nbsp;&nbsp;S/.  ' . $row1['caja_monto_inicial'] . '</h6> 
	<h6 style="display: inline-block;margin: 0px;padding: 0px;  font-weight:normal;">Monto Interes&nbsp; : &nbsp;&nbsp;&nbsp;S/.  '.$row1['caja_interes'].'</h6> 
	<h6 style="display: inline-block;margin: 0px;padding: 0px;  font-weight:normal;">Monto Prestamo&nbsp;&nbsp;: &nbsp;&nbsp;S/. ' . $row1['caja_prestamo'] . '&nbsp;(' . $row1['caja_count_prestamo'] . ')</h6>
	<h6 style="display: inline-block;margin: 0px;padding: 0px;  font-weight:normal;">Monto Ingresos&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;S/.  ' . $row1['caja_monto_ingreso'] . '&nbsp;&nbsp;(' . $row1['caja_count_ingreso'] . ')</h6>
	<h6 style="display: inline-block;margin: 0px;padding: 0px;  font-weight:normal;">Monto Egresos&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;S/.  ' . $row1['caja__monto_egreso'] . '&nbsp;&nbsp;(' . $row1['caja_count_egreso'] . ')</h6></b>
	------------------------------------------<br>
	<h6 style="display: inline-block;margin: 0px;padding: 0px;  font-size:11px">Monto Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;S/.  ' . $row1['caja_monto_total'] . ' </h6>
	

	';
}


$mpdf->WriteHTML(utf8_encode($html));
//$file='pdf_caja/'.time().'.pdf';
$caja = $estado; //abierto - cerrado
$correo = $correoEmpresa; // correo de la empresa
$nom_empresa= $razon;
$pdf = $mpdf->Output("", 'S');
$mpdf->Output();
//D: ABRIR EXPLORA DE ARCHIVOS PARA GUARDAR
//F: GUARDAR EN RUTA MPDF $mpdf->Output($file, 'F');
sendEmail($pdf, $correo,$nom_empresa);

function sendEmail($pdf, $correo,$nom_empresa)
{
	$mail = new PHPMailer(true);

	try {
		$mail = new PHPMailer();
		//Server settings
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;
		//Enable SMTP authentication
		$mail->Username   = $correo;                     //SMTP username
		$mail->Password   = '';                               //CLAVE DE CORREO
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom($correo, $nom_empresa); //DE:
		$mail->addAddress($correo, 'Correo Developer'); //PARA:
		$mail->addStringAttachment($pdf, "attachment.pdf"); //ARCHIVO PDF

		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Documento PDF de Cierre de Caja ';


		$mail->Body    = 'Este es el Documento Pdf del Cierre de Caja - SIPREST  ';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo 'Correo Enviado';
	} catch (Exception $e) {
		echo "Error al enviar el correo: {$mail->ErrorInfo}";
	}
}
