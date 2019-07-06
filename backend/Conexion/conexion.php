<?php

require_once "config.php";
class conexion
{
    protected $conexion;
    protected $Charset=DB_CHARTSET;
    public function __construct()
    {
        try{
            $this->conexion=new PDO(DB_DSN,DB_USER,DB_PASS);
            $this->conexion->query("SET NAMES '$this->Charset'");
        }catch (Exception $e){
            echo "Error de conexion ".$e;
        }
    }
}