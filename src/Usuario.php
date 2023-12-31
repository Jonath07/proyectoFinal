<?php

namespace YocoTec;

use PDO;

class Usuario{

    private $config;
    private $cn = null;

    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini');

        $this->cn = new \PDO($this->config['dns'], $this->config['usuario'], $this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'

        ));

    }

    public function login($clave){

        $sql = "SELECT nombre_usuario FROM `tbl_usuarios` WHERE password_usuario = :clave";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":clave" => $clave
        );
        
        if($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }

    

}