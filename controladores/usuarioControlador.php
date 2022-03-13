<?php
    if($peticionAjax){
        require_once "../modelos/usuarioModel.php";
    }else{
        require_once "modelos/usuarioModel.php";
    }

    class usuarioControlador extends usuarioModel(){
        /*controlador agregar usuario*/
        public function agregar_usuario_controlador(){
            
        }
    }