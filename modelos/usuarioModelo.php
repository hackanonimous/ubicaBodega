<?php
    require_once "mainModel.php";
    class usuarioModelo extends mainModel(){
        /*modelo agregar usuario*/
        protected static function agregar_usuario_modelo($datos){
            $sql=mainModel::conectar()->prepare("INSER INTO tusuario");

        }
    }