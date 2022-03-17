<?php
    if($peticionAjax){
        require_once "../modelos/usuarioModelo.php";
    }else{
        require_once "./modelos/usuarioModelo.php";
    }
/*Controlador lista personas*/
class listarSelectControlador extends usuarioModelo{
    public function listar_personas_controlador(){
        $tabla="";
        $consulta="SELECT*FROM tpersona";
        $conexion=mainModel::conectar();
        $datos=$conexion->query($consulta);
        $datos=$datos->fetchAll();
        echo json_encode($datos);
    }
} 