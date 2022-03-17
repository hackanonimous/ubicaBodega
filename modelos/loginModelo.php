<?php
    require_once "mainModel.php";
    class loginModelo extends mainModel{
        /*Modelo para iniciar sesion*/
        protected static function iniciar_sesion_modelo($datos){
            $sql=mainModel::conectar()->prepare("SELECT*FROM tusuario a INNER JOIN tpersona b on a.usuario_dni = b.persona_dni WHERE a.usuario_dni = :Usuario AND a.usuario_clave = :Clave AND a.usuario_estado=1");
            $sql->bindParam(":Usuario",$datos['Usuario']);
            $sql->bindParam(":Clave",$datos['Clave']);
            $sql->execute();
            return $sql;
        }
    }