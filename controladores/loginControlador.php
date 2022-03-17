<?php
    if($peticionAjax){
        require_once "../modelos/loginModelo.php";
    }else{
        require_once "./modelos/loginModelo.php";
    }

    class loginControlador extends loginModelo{
        /* controlador para iniciar sesion en el sistema */
        public function iniciar_sesion_controlador(){
            $usuario=mainModel::limpiar_cadena($_POST['usuario_log']);
            $usuario_number=intval($usuario);
            $clave=mainModel::limpiar_cadena($_POST['clave_log']);

            /*comprobar campos vacios*/
            if($usuario=="" || $clave=="") {
                echo 
                '<script>
                    Swal.fire({
                        title: "Ocurrio un error inesperado",
                        text: "No ha llenado todos los campos que son requeridos",
                        icon: "error",
                        confirmButtonText: "Aceptar"
                    });
                </script>';
                exit();
            }

            $clave=mainModel::encryption($clave);

            $datos_login=[
               "Usuario"=>$usuario_number,
               "Clave"=>$clave 
            ];

            $datos_cuenta=loginModelo::iniciar_sesion_modelo($datos_login);

            if($datos_cuenta->rowCount()==1){
                $row=$datos_cuenta->fetch();
                session_start(['name'=>'SEL']);

                $_SESSION['id_sel']=$row['usuario_dni'];
                $_SESSION['nombre_sel']=$row['persona_nombres'];
                $_SESSION['apaterno_sel']=$row['persona_apaterno'];
                $_SESSION['privilegio_sel']=$row['usuario_privilegio'];
                $_SESSION['token_spm']=md5(uniqid(mt_rand(),true));
                return header("Location:".SERVERURL."home/");
            }else{
                echo 
                '<script>
                    Swal.fire({
                        title: "Ocurrio un error inesperado",
                        text: "EL USUARIO o CLAVE son incorrectos",
                        icon: "error",
                        confirmButtonText: "Aceptar"
                    });
                </script>';
            }
        }/* fin de controlador*/

        /* controlador para forzar cierre de sesion */
        public function forzar_cierre_sesion_controlador(){
            session_unset();
            session_destroy();
            if(headers_sent()){
                return "<script>
                    window.location.href = '".SERVERURL."login/';
                </script>";
            }else{
                return header("Location:".SERVERURL."login/");
            }
        }/* fin de controlador */

         /* controlador cerrar sesion */
         public function cierre_sesion_controlador(){
            session_start(['name'=>'SEL']);
            $token=mainModel::decryption($_POST['token']);
            $usuario=mainModel::decryption($_POST['usuario']);
            if ($token==$_SESSION['token_spm'] && $_SESSION['id_sel']) {
                session_unset();
                session_destroy();
                $alerta=[
                    "Alerta"=>"redireccionar",
                    "URL"=>SERVERURL."login/"
                ];
            } else {
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"No se pudo cerra la sesion en el sistema",
                    "Tipo"=>"error"
                ];
            }
            echo json_encode($alerta); 
            
         }/* fin de controlador */
    }