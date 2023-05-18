<?php

require_once "conexion.php";



class AdminPrestamosModelo
{

    /*===================================================================*/
    //LISTAR PRESTAMOS POR ID DEL USUARIO
    /*===================================================================*/
    //static public function mdlListarPrestamoPorUsuario($id_usuario)
    static public function mdlListarPrestamoPorUsuario()
    {

        try {

            $stmt = Conexion::conectar()->prepare("SELECT pc.pres_id ,
                                                            pc.nro_prestamo,
                                                            pc.cliente_id,
                                                            c.cliente_nombres,
                                                            pc.pres_monto,
                                                            pc.pres_interes,
                                                            pc.pres_cuotas,
                                                            pc.fpago_id,
                                                            fp.fpago_descripcion,
                                                            pc.id_usuario,
                                                            u.usuario,		
                                                            -- DATE(pc.pres_fecha_registro) as fecha,
                                                            DATE_FORMAT(pc.pres_fecha_registro, '%d/%m/%Y') as fecha,
                                                            pc.pres_aprobacion as estado,
                                                            '' as opciones,
                                                            pc.pres_monto_cuota,
															ROUND(pc.pres_monto_interes,2) as pres_monto_interes,
															ROUND(pc.pres_monto_total,2) as pres_monto_total,
															pc.pres_cuotas_pagadas,
                                                            pc.nombre_img,
									                    	pc.imagen_p,
                                                            pc.pres_mora	          
                                                            from prestamo_cabecera pc
                                                            INNER JOIN clientes c on
                                                            pc.cliente_id = c.cliente_id
                                                            INNER JOIN forma_pago fp on 
                                                            pc.fpago_id = fp.fpago_id
                                                            INNER JOIN usuarios u on
                                                            pc.id_usuario = u.id_usuario
                                                            ");

            //$stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);


            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            return 'Excepción capturada: ' .  $e->getMessage() . "\n";
        }


        $stmt = null;
    }


    /*===================================================================*/
    //VER DETALLE DL PRESTAMO EN MODAL
    /*===================================================================*/
    static public function mdlDetallePrestamo($nro_prestamo)
    {
        $stmt = Conexion::conectar()->prepare('call SP_VER_DETALLE_PRESTAMO(:nro_prestamo)');
        $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }



    /*===================================================================*/
    //PAGAR CUOTA DEL PRESTAMO
    /*===================================================================*/
    static public function mdlPagarCuota($nro_prestamo, $pdetalle_nro_cuota,  $pdetalle_monto_cuota,$id_usuario, $nombre_user)
    {
        $date = date("Y-m-d H:i:s");
        //print_r($nro_boleta);
        try {
            //ACTUALIZAMOS  EL DETALLE DEL PRESTAMO
            $stmt = Conexion::conectar()->prepare("UPDATE prestamo_detalle SET pdetalle_estado_cuota = 'pagada', pdetalle_fecha_registro = CURRENT_TIME(), pdetalle_monto_cuota = :pdetalle_monto_cuota, id_usuario = :id_usuario, nombre_user = :nombre_user   where nro_prestamo = :nro_prestamo   and pdetalle_nro_cuota = :pdetalle_nro_cuota  ");

            $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
            $stmt->bindParam(":pdetalle_nro_cuota", $pdetalle_nro_cuota, PDO::PARAM_STR);
            $stmt->bindParam(":pdetalle_monto_cuota", $pdetalle_monto_cuota, PDO::PARAM_STR);
            $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);
            $stmt->bindParam(":nombre_user", $nombre_user, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $stmt = null;

                $stmt = Conexion::conectar()->prepare('call SP_CAMBIAR_ESTADO_CABECERA(:nro_prestamo)'); //AL PAGAR TODAS LAS CUOTAS CAMBIA DE ESTADO A FINALIZADO
                $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);

                if ($stmt->execute()) {

                    $stmt = null;

                    $stmt = Conexion::conectar()->prepare('call SP_MONTO_POR_CUOTA_PAGADA_D(:nro_prestamo, :pdetalle_nro_cuota)'); //CALCULAR MONTO RESTANTE 
                    $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
                    $stmt->bindParam(":pdetalle_nro_cuota", $pdetalle_nro_cuota, PDO::PARAM_STR);

                    if ($stmt->execute()) {
                        $resultado = "ok";
                    } else {
                        $resultado = "error";
                    }
                } else {
                    $resultado = "Error al registrar ";
                }
            }
        } catch (Exception $e) {
            $resultado = 'Excepción capturada: ' .  $e->getMessage() . "\n";
        }

        return $resultado;
        $stmt = null;
    }


    /*===================================================================*/
    //OBTENER CUOTAS PAGADAS
    /*===================================================================*/
    static public function mdlObtenerCuotasPagadas($nro_prestamo)
    {
        $stmt = Conexion::conectar()->prepare('call SP_CUOTAS_PAGADAS(:nro_prestamo)');
        $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }


    /*===================================================================*/
    //LIQUIDAR PRESTAMO
    /*===================================================================*/
    static public function mdlLiquidarPrestamo($nro_prestamo, $array_cuota)
    {

        try {

            $stmt = Conexion::conectar()->prepare("UPDATE prestamo_detalle SET pdetalle_estado_cuota = 'pagada', pdetalle_fecha_registro = CURRENT_TIME() where nro_prestamo = :nro_prestamo   and pdetalle_nro_cuota = :pdetalle_nro_cuota  ");

            $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
            $stmt->bindParam(":pdetalle_nro_cuota", $array_cuota, PDO::PARAM_INT);


            if ($stmt->execute()) {
                $stmt = null;
                $stmt = Conexion::conectar()->prepare('call SP_LIQUIDAR_PRESTAMO (:nro_prestamo, :pdetalle_nro_cuota)'); //CALCULAR MONTO RESTANTE 
                $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
                $stmt->bindParam(":pdetalle_nro_cuota", $array_cuota, PDO::PARAM_INT);




                if ($stmt->execute()) {

                    $stmt = null;
                    $stmt = Conexion::conectar()->prepare('call SP_CAMBIAR_ESTADO_CABECERA(:nro_prestamo)'); //AL PAGAR TODAS LAS CUOTAS CAMBIA DE ESTADO A FINALIZADO
                    $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);



                    if ($stmt->execute()) {

                        $resultado = "ok";
                    } else {
                        $resultado = "error";
                    }
                } else {
                    $resultado = "Error al registrar ";
                }
            }
        } catch (Exception $e) {
            $resultado = 'Excepción capturada: ' .  $e->getMessage() . "\n";
        }
        return $resultado;
        //var_dump($resultado);
        $stmt = null;
    }


     /*===================================================================*/
    //PAGAR CUOTA DEL PRESTAMO
    /*===================================================================*/
    static public function mdlPagarCuotaManu($nro_prestamo, $pdetalle_nro_cuota,  $pdetalle_monto_cuota)
    {
        $date = date("Y-m-d H:i:s");
        //print_r($nro_boleta);
        try {
            //ACTUALIZAMOS  EL DETALLE DEL PRESTAMO
            $stmt = Conexion::conectar()->prepare("UPDATE prestamo_detalle SET  pdetalle_monto_cuota = :pdetalle_monto_cuota   where nro_prestamo = :nro_prestamo   and pdetalle_nro_cuota = :pdetalle_nro_cuota  ");

            $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
            $stmt->bindParam(":pdetalle_nro_cuota", $pdetalle_nro_cuota, PDO::PARAM_STR);
            $stmt->bindParam(":pdetalle_monto_cuota", $pdetalle_monto_cuota, PDO::PARAM_STR);

           /* if ($stmt->execute()) {
                $stmt = null;

                $stmt = Conexion::conectar()->prepare('call SP_CAMBIAR_ESTADO_CABECERA(:nro_prestamo)'); //AL PAGAR TODAS LAS CUOTAS CAMBIA DE ESTADO A FINALIZADO
                $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);*/

                if ($stmt->execute()) {

                    $stmt = null;

                    $stmt = Conexion::conectar()->prepare('call SP_MONTO_POR_CUOTA_PAGADA_D(:nro_prestamo, :pdetalle_nro_cuota)'); //CALCULAR MONTO RESTANTE 
                    $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
                    $stmt->bindParam(":pdetalle_nro_cuota", $pdetalle_nro_cuota, PDO::PARAM_STR);

                    if ($stmt->execute()) {
                        $resultado = "ok";
                    } else {
                        $resultado = "error";
                    }
                } else {
                    $resultado = "Error al registrar ";
                }
           // }
        } catch (Exception $e) {
            $resultado = 'Excepción capturada: ' .  $e->getMessage() . "\n";
        }

        return $resultado;
        $stmt = null;
    }



     /*===================================================================*/
    //PAGAR CUOTA DEL PRESTAMO MANUAL (SIGUIENTE CUOTA)
    /*===================================================================*/
    static public function mdlFinalizaPrest($nro_prestamo)
    {
        $date = date("Y-m-d H:i:s");
        //print_r($nro_boleta);
        try {
            //ACTUALIZAMOS  EL DETALLE DEL PRESTAMO
            $stmt = Conexion::conectar()->prepare("UPDATE prestamo_detalle SET pdetalle_estado_cuota = 'pagada', pdetalle_fecha_registro = CURRENT_TIME(), pdetalle_monto_cuota = '0'   where nro_prestamo = :nro_prestamo and pdetalle_estado_cuota = 'pendiente' ");

            $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
           
            if ($stmt->execute()) {
                $stmt = null;

                $stmt = Conexion::conectar()->prepare('call SP_CAMBIAR_ESTADO_CABECERA(:nro_prestamo)'); //AL PAGAR TODAS LAS CUOTAS CAMBIA DE ESTADO A FINALIZADO
                $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);

                    if ($stmt->execute()) {
                        $resultado = "ok";
                    } else {
                        $resultado = "error";
                    }
                
            }else{
                $resultado = "error";
            }
        } catch (Exception $e) {
            $resultado = 'Excepción capturada: ' .  $e->getMessage() . "\n";
        }

        return $resultado;
        $stmt = null;
    }


     /*=============================================
    Peticion UPDATE: para ACTUALIZAR DATOS
    =============================================*/
    static public function mdlActualizaFoto( $data, $imagen)
    {


        try {
            $stmt = Conexion::conectar()->prepare("UPDATE prestamo_cabecera SET nombre_img = :nombre_img , imagen_p = :imagen_p where nro_prestamo =  :nro_prestamo ");

            $stmt->bindParam(":nro_prestamo", $data["nro_prestamo"], PDO::PARAM_STR);
            $stmt->bindParam(":nombre_img", $data["nombre_img"], PDO::PARAM_STR);
            $stmt->bindParam(":imagen_p",$imagen["nuevoNombre"], PDO::PARAM_STR);
            //var_dump($data["celular"]);

          /* if ($stmt->execute()) {
                $stmt = null;
               */
               
                //GUARDAMOS LA IMAGEN EN LA CARPETA
                if($imagen){
                                
                    $guardarImagen = new AdminPrestamosModelo();

                    $guardarImagen->guardarImagen($imagen["folder"], $imagen["ubicacionTemporal"], $imagen["nuevoNombre"]);

                }else {
                  //  $guardarImagen = new ProductosModelo();

                   
                }

               // $resultado = "ok";
               
                 if ($stmt->execute()) {
                    
                     $resultado = "ok";
                 } else {
                     $resultado = "error";
                    //var_dump($stmt);
                 }
           // } else {
              //  $resultado = "error";
           // }
        } catch (Exception $e) {
            $resultado = 'Excepción capturada: ' .  $e->getMessage() . "\n";
        }

        return $resultado;

        $stmt = null;


    }

    public function guardarImagen($folder, $ubicacionTemporal, $nuevoNombre){
        file_put_contents(strtolower($folder.$nuevoNombre), file_get_contents($ubicacionTemporal));
    }


    
     /*===================================================================*/
    //OBTENER CUOTAS PAGADAS
    /*===================================================================*/
    static public function mdlObtenerDiasMora($nro_prestamo, $pdetalle_nro_cuota)
    {
        $stmt = Conexion::conectar()->prepare('call SP_LISTAR_MORA_PRESTAMO_CUOTA(:nro_prestamo, :pdetalle_nro_cuota)');
        $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
        $stmt->bindParam(":pdetalle_nro_cuota", $pdetalle_nro_cuota, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }


         /*===================================================================*/
    //PAGAR CUOTA DEL PRESTAMO
    /*===================================================================*/
    static public function mdlPagarMora($nro_prestamo, $pdetalle_nro_cuota,  $pdetalle_monto_cuota, $pdetalle_dias_mora, $pdetalle_mora)
    {
        $date = date("Y-m-d H:i:s");
        //print_r($nro_boleta);
        try {
            //ACTUALIZAMOS  EL DETALLE DEL PRESTAMO
            $stmt = Conexion::conectar()->prepare("UPDATE prestamo_detalle SET  pdetalle_monto_cuota = :pdetalle_monto_cuota, pdetalle_dias_mora = :pdetalle_dias_mora,  pdetalle_mora = :pdetalle_mora  where nro_prestamo = :nro_prestamo   and pdetalle_nro_cuota = :pdetalle_nro_cuota  ");

            $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
            $stmt->bindParam(":pdetalle_nro_cuota", $pdetalle_nro_cuota, PDO::PARAM_STR);
            $stmt->bindParam(":pdetalle_monto_cuota", $pdetalle_monto_cuota, PDO::PARAM_STR);
            $stmt->bindParam(":pdetalle_dias_mora", $pdetalle_dias_mora, PDO::PARAM_STR);
            $stmt->bindParam(":pdetalle_mora", $pdetalle_mora, PDO::PARAM_STR);

           /* if ($stmt->execute()) {
                $stmt = null;

                $stmt = Conexion::conectar()->prepare('call SP_CAMBIAR_ESTADO_CABECERA(:nro_prestamo)'); //AL PAGAR TODAS LAS CUOTAS CAMBIA DE ESTADO A FINALIZADO
                $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);*/

                if ($stmt->execute()) {

                    $stmt = null;

                    $stmt = Conexion::conectar()->prepare('call SP_MONTO_POR_CUOTA_PAGADA_D(:nro_prestamo, :pdetalle_nro_cuota)'); //CALCULAR MONTO RESTANTE 
                    $stmt->bindParam(":nro_prestamo", $nro_prestamo, PDO::PARAM_STR);
                    $stmt->bindParam(":pdetalle_nro_cuota", $pdetalle_nro_cuota, PDO::PARAM_STR);

                    if ($stmt->execute()) {
                        $resultado = "ok";
                    } else {
                        $resultado = "error";
                    }
                } else {
                    $resultado = "Error al registrar ";
                }
           // }
        } catch (Exception $e) {
            $resultado = 'Excepción capturada: ' .  $e->getMessage() . "\n";
        }

        return $resultado;
        $stmt = null;
    }

}
