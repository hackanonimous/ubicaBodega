<?php
    if($peticionAjax){
        require_once "../modelos/usuarioModelo.php";
    }else{
        require_once "./modelos/usuarioModelo.php";
    }

    class usuarioControlador extends usuarioModelo{
        /*limpiamos los campos pasados por post*/
        public function agregar_usuario_controlador(){
            $dni=mainModel::limpiar_cadena($_POST['usuario_dni_reg']);
            $clave1=mainModel::limpiar_cadena($_POST['usuario_clave_1_reg']);
            $clave2=mainModel::limpiar_cadena($_POST['usuario_clave_2_reg']);
            $estado=mainModel::limpiar_cadena($_POST['usuario_estado_reg']);
            $privilegio=mainModel::limpiar_cadena($_POST['usuario_privilegio_reg']);

            /*verificamos que no tengamos ningun dato requerido como vacio*/
            if($dni=="" || $clave1=="" || $clave2==""){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"Uno de los campos de contraseña no ha sido llenado",
                    "Tipo"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }


            /*verificamos contraseña*/
            if($clave1!=$clave2){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"La claves ingresadas no coninciden",
                    "Tipo"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }else{
                $clave=mainModel::encryption($clave1);
            }

            /*Compromabos que no se repitan los datos*/
            $check_dni=mainModel::consulta_simple("SELECT usuario_dni FROM tusuario WHERE usuario_dni='$dni'");
            if($check_dni->rowCount()>0){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"El DNI ingresado ya se ecuentra registrado en el sistema",
                    "Tipo"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }

            
            $datos_
        }/*fin de controlador*/
    }