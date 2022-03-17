<?php
    require_once "mainModel.php";
    class usuarioModelo extends mainModel{
        /*modelo agregar persona*/
        protected static function agregar_usuario_modelo($datos){
            $sql=mainModel::conectar()->prepare("INSERT INTO tusuario(usuario_dni,usuario_clave,usuario_estado,usuario_privilegio) VALUES(:DNI,:Clave,:Estado,:Privilegio)");

            $sql->bindParam(":DNI",$datos['DNI']);
            $sql->bindParam(":Clave",$datos['Clave']);
            $sql->bindParam(":Estado",$datos['Estado']);
            $sql->bindParam(":Privilegio",$datos['Privilegio']);
            $sql->execute();
            return $sql;
        }
    }