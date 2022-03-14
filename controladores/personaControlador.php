<?php
    if($peticionAjax){
        require_once "../modelos/personaModelo.php";
    }else{
        require_once "./modelos/personaModelo.php";
    }

    class personaControlador extends personaModelo{
        /*limpiamos los campos pasados por post*/
        public function agregar_persona_controlador(){
            $dni=mainModel::limpiar_cadena($_POST['persona_dni_reg']);
            $nombre=mainModel::limpiar_cadena($_POST['persona_nombre_reg']);
            $apaterno=mainModel::limpiar_cadena($_POST['persona_apaterno_reg']);
            $amaterno=mainModel::limpiar_cadena($_POST['persona_amaterno_reg']);
            $nacimiento=mainModel::limpiar_cadena($_POST['persona_nacimiento_reg']);
            $celular=mainModel::limpiar_cadena($_POST['persona_celular_reg']);
            $email=mainModel::limpiar_cadena($_POST['persona_email_reg']);

            /*verificamos que no tengamos ningun dato requerido como vacio*/
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


            /*verificamos integridad de datos*/
            if(mainModel::verificar_datos("[0-9]{1,20}",$dni)){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"el DNI no coincide con el formato solicitado",
                    "Tipo"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }

            /*Compromabos que no se repitan los datos*/
            $check_dni=mainModel::ejecutar_consulta_simple("SELECT persona_dni FROM tpersona WHERE persona_dni='$dni'");
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


            $datos_persona_reg=[
                "DNI"=>$dni,
                "Nombre"=>$nombre,
                "APaterno"=>$apaterno,
                "AMaterno"=>$amaterno,
                "Nacimiento"=>$nacimiento,
                "Telefono"=>$celular,
                "Mail"=>$email
            ];
            $agregar_persona=personaModelo::agregar_persona_modelo($datos_persona_reg);
            if($agregar_persona->rowCount()==1){
                $alerta=[
                    "Alerta"=>"limpiar",
                    "Titulo"=>"Persona Registrado",
                    "Texto"=>"Los datos de persona fueron registrados con exito",
                    "Tipo"=>"success"
                ];
            }else{
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"No hemos podido registrar a la persona",
                    "Tipo"=>"error"
                ];
            }
            echo json_encode($alerta);
        }/*fin de controlador*/
    }