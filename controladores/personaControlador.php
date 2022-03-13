<?php
    if($peticionAjax){
        require_once "../modelos/personaModelo.php";
    }else{
        require_once "./modelos/personaModelo.php";
    }

    class personaControlador extends personaModelo{
        public function agregar_persona_controlador(){
            $dni=mainModel::limpiar_cadena($_POST['persona_dni_reg']);
            $nombre=mainModel::limpiar_cadena($_POST['persona_nombre_reg']);
            $apaterno=mainModel::limpiar_cadena($_POST['persona_apaterno_reg']);
            $amaterno=mainModel::limpiar_cadena($_POST['persona_amaterno_reg']);
            $nacimiento=mainModel::limpiar_cadena($_POST['persona_nacimiento_reg']);
            $celular=mainModel::limpiar_cadena($_POST['persona_celular_reg']);
            $email=mainModel::limpiar_cadena($_POST['persona_email_reg']);

            if($dni=="" || $nombre=="" || $apaterno=="" || $amaterno=""){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"Uno de los datos obligatorios esta vacio",
                    "Tipo"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }
        }
    }