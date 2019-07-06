<?php

require_once "../Conexion/conexion.php";
class usuario extends conexion
{
    private $NomUsuario;
    private $ApeUsuario;
    private $CorreoUsuario;
    private $FenacUsuario;
    private $EdadUsuario;
    private $SexoUsuario;
    private $PaisUsuario;
    private $RegionUsuario;
    private $CiudadUsuario;
    private $CelularUsuario;
    private $NickNameUsuario;
    private $ContraUsuario;

    /**
     * @return mixed
     */
    public function getNomUsuario()
    {
        return $this->NomUsuario;
    }

    /**
     * @param mixed $NomUsuario
     */
    public function setNomUsuario($NomUsuario): void
    {
        $this->NomUsuario = $NomUsuario;
    }

    /**
     * @return mixed
     */
    public function getApeUsuario()
    {
        return $this->ApeUsuario;
    }

    /**
     * @param mixed $ApeUsuario
     */
    public function setApeUsuario($ApeUsuario): void
    {
        $this->ApeUsuario = $ApeUsuario;
    }

    /**
     * @return mixed
     */
    public function getCorreoUsuario()
    {
        return $this->CorreoUsuario;
    }

    /**
     * @param mixed $CorreoUsuario
     */
    public function setCorreoUsuario($CorreoUsuario): void
    {
        $this->CorreoUsuario = $CorreoUsuario;
    }

    /**
     * @return mixed
     */
    public function getFenacUsuario()
    {
        return $this->FenacUsuario;
    }

    /**
     * @param mixed $FenacUsuario
     */
    public function setFenacUsuario($FenacUsuario): void
    {
        $this->FenacUsuario = $FenacUsuario;
    }
    /**
     * @return mixed
     */
    public function getEdadUsuario()
    {
        return $this->EdadUsuario;
    }

    /**
     * @param mixed $EdadUsuario
     */
    public function setEdadUsuario($EdadUsuario): void
    {
        $this->EdadUsuario = $EdadUsuario;
    }

    /**
     * @return mixed
     */
    public function getSexoUsuario()
    {
        return $this->SexoUsuario;
    }

    /**
     * @param mixed $SexoUsuario
     */
    public function setSexoUsuario($SexoUsuario): void
    {
        $this->SexoUsuario = $SexoUsuario;
    }

    /**
     * @return mixed
     */
    public function getPaisUsuario()
    {
        return $this->PaisUsuario;
    }

    /**
     * @param mixed $PaisUsuario
     */
    public function setPaisUsuario($PaisUsuario): void
    {
        $this->PaisUsuario = $PaisUsuario;
    }

    /**
     * @return mixed
     */
    public function getRegionUsuario()
    {
        return $this->RegionUsuario;
    }

    /**
     * @param mixed $RegionUsuario
     */
    public function setRegionUsuario($RegionUsuario): void
    {
        $this->RegionUsuario = $RegionUsuario;
    }

    /**
     * @return mixed
     */
    public function getCiudadUsuario()
    {
        return $this->CiudadUsuario;
    }

    /**
     * @param mixed $CiudadUsuario
     */
    public function setCiudadUsuario($CiudadUsuario): void
    {
        $this->CiudadUsuario = $CiudadUsuario;
    }

    /**
     * @return mixed
     */
    public function getCelularUsuario()
    {
        return $this->CelularUsuario;
    }

    /**
     * @param mixed $CelularUsuario
     */
    public function setCelularUsuario($CelularUsuario): void
    {
        $this->CelularUsuario = $CelularUsuario;
    }

    /**
     * @return mixed
     */
    public function getNickNameUsuario()
    {
        return $this->NickNameUsuario;
    }

    /**
     * @param mixed $NickNameUsuario
     */
    public function setNickNameUsuario($NickNameUsuario): void
    {
        $this->NickNameUsuario = $NickNameUsuario;
    }

    /**
     * @return mixed
     */
    public function getContraUsuario()
    {
        return $this->ContraUsuario;
    }

    /**
     * @param mixed $ContraUsuario
     */
    public function setContraUsuario($ContraUsuario): void
    {
        $this->ContraUsuario = $ContraUsuario;
    }

    public function __construct()
    {
        parent::__construct();
    }
    public function RegistrarUsuario(){
        try{
            $query="INSERT INTO usuario(NOMBRESUSUARIO, APELLIDOSUSUARIO, CORREOUSUARIO, FENACUSUARIO, EDADUSUARIO, SEXOUSUARIO, CIUDADUSUARIO, REGIONUSUARIO, PAISUSUARIO, NUMFONOUSUARIO, FOTOPERFILUSUARIO, NOMUSUARIO, CONTRAUSUARIO) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $result=$this->conexion->prepare($query);
            $result->bindParam(1,$this->NomUsuario,PDO::PARAM_STR);
            $result->bindParam(2,$this->ApeUsuario,PDO::PARAM_STR);
            $result->bindParam(3,$this->CorreoUsuario,PDO::PARAM_STR);
            $result->bindParam(4,$this->FenacUsuario,PDO::PARAM_STR);
            $result->bindParam(5,$this->EdadUsuario,PDO::PARAM_INT);
            $result->bindParam(6,$this->SexoUsuario,PDO::PARAM_INT);
            $result->bindParam(7,$this->CiudadUsuario,PDO::PARAM_STR);
            $result->bindParam(8,$this->RegionUsuario,PDO::PARAM_STR);
            $result->bindParam(9,$this->PaisUsuario,PDO::PARAM_STR);
            $result->bindParam(10,$this->CelularUsuario,PDO::PARAM_STR);
            $result->bindParam(11,$this->NomUsuario,PDO::PARAM_STR);
            $result->bindParam(12,$this->NickNameUsuario,PDO::PARAM_STR);
            $result->bindParam(13,$this->ContraUsuario,PDO::PARAM_STR);
            $result->execute();
            return true;
        }catch (Exception $e){
            return false;
        }
    }
    public function VerificarNickName($nicknuevousu){
        try{
            $query="SELECT COUNT(*) FROM usuario WHERE nomusuario=?";
            $result=$this->conexion->prepare($query);
            $result->bindParam(1,$nicknuevousu,PDO::PARAM_STR);
            $result->execute();
            $datos=$result->fetchAll();
            return $datos;
        }catch (Exception $e){
            return $e;
        }
    }
    public function logueo(){
        try{
            $query="SELECT idusuario,nomusuario FROM usuario WHERE nomusuario=? AND contrausuario=?";
            $result=$this->conexion->prepare($query);
            $result->bindParam(1,$this->NickNameUsuario,PDO::PARAM_STR);
            $result->bindParam(2,$this->ContraUsuario,PDO::PARAM_STR);
            $result->execute();
            $datos=$result->fetchAll();

            if (count($datos)>0){
                session_start();
                $_SESSION["usuario"]=$datos[0][1];
            }
            return $datos;

        }catch (Exception $e){
            return $e;
        }
    }
    public function CerrarSession(){
        try{
            session_start();
            if ($_SESSION["usuario"]!=""){
                $_SESSION["usuario"]="";
            }
            return 0;
        }catch (Exception $e){
            return $e;
        }
    }
    public function DevolverNombre($idusu){
        try{
            $query="SELECT CONCAT(nombresusuario,' ',apellidosusuario) FROM usuario where idusuario=?";
            $resultado=$this->conexion->prepare($query);
            $resultado->bindParam(1,$idusu,PDO::PARAM_INT);
            $resultado->execute();
            $datos=$resultado->fetchAll();
            return $datos;
        }catch (Exception $e){
            return $e;
        }
    }
    public  function CrearNuevoPost(){
        $query="INSERT INTO post(textopost, usuario) VALUES (?,?)";
        $ejecucion=$this->conexion->prepare($query);

    }
}