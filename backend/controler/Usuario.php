<?php
require_once "../modelo/usuario.php";
$retorno="";
$datos=json_decode(file_get_contents("php://input"),true);
$nuevousuario=new usuario();
switch ($datos["datos"]["Opcion"]){
    case 1:
        $nuevousuario->setNomUsuario($datos["datos"]["Nombre"]);
        $nuevousuario->setApeUsuario($datos["datos"]["Apellido"]);
        $nuevousuario->setCorreoUsuario($datos["datos"]["Correo"]);
        $nuevousuario->setFenacUsuario($datos["datos"]["Fecha"]);
//        $nuevousuario->setSexoUsuario(($datos["datos"]["Sexo"]=="Hombre")?true:false);
        $nuevousuario->setSexoUsuario(($datos["datos"]["Sexo"]=="Hombre")?0:1);
        $nuevousuario->setPaisUsuario($datos["datos"]["Pais"]);
        $nuevousuario->setRegionUsuario($datos["datos"]["Region"]);
        $nuevousuario->setCiudadUsuario($datos["datos"]["Ciudad"]);
        $nuevousuario->setEdadUsuario(23);
        $nuevousuario->setCelularUsuario($datos["datos"]["Celular"]);
        $nuevousuario->setNickNameUsuario($datos["datos"]["NickName"]);
        $nuevousuario->setContraUsuario($datos["datos"]["Contra"]);
        $retorno=['dato'=>$nuevousuario->RegistrarUsuario()];
        break;
    case 2:
        $nomusu=$datos["datos"]["NickName"];
        $retorno=$nuevousuario->VerificarNickName($nomusu);
        break;
    case 3:
        $nuevousuario->setNickNameUsuario($datos["datos"]["NickNameL"]);
        $nuevousuario->setContraUsuario($datos["datos"]["ContraL"]);
        $retorno=$nuevousuario->logueo();
        break;
    case 4:
        $retorno=$nuevousuario->CerrarSession();
        break;
    case 5:
        $retorno=$nuevousuario->DevolverNombre($datos["datos"]["IdUsu"]);
        break;
}

echo json_encode($retorno);
//var_dump($resultado);