<?php

class Conexion {

    static public function conectar(){

        try {
           $conn = new PDO("mysql:host=localhost; 
                                  dbname=test_db1",

                                //   iokxowfr_dbprestamo3
                                //   "iokxowfr_dbprestamo3",
                                "root",
                                //   "2192Daa6251981*.*",
                                "123!@#",
                                  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
           return $conn;
        } catch (PDOException $e) {
            echo 'Fallo la conexion: '.$e->getMessage();
        }
    }




}