<?php
    if($peticionAjax){
        require_once "../modelos/usuarioModelo.php";
    }else{
        require_once "./modelos/usuarioModelo.php";
    }

    class usuarioControlador extends usuarioModelo{
        /*controlador agregar usuario*/
        public function agregar_usuario_controlador(){
            $dni=mainModel::limpiar_cadena($_POST['usuario_dni_reg']);
            $dni_number=intval($dni);
            $clave1=mainModel::limpiar_cadena($_POST['usuario_clave_1_reg']);
            $clave2=mainModel::limpiar_cadena($_POST['usuario_clave_2_reg']);
            $estado=mainModel::limpiar_cadena($_POST['usuario_estado_reg']);
            $estado_number=intval($estado);
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
            $check_dni=mainModel::ejecutar_consulta_simple("SELECT usuario_dni FROM tusuario WHERE usuario_dni='$dni'");
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

            
            $datos_usuario_reg=[
               "DNI"=>$dni_number,
               "Clave"=>$clave,
               "Estado"=>$estado_number,
               "Privilegio"=>$privilegio
            ];
            $agregar_usuario=usuarioModelo::agregar_usuario_modelo($datos_usuario_reg);
            if ($agregar_usuario->rowCount()==1) {
                $alerta=[
                    "Alerta"=>"limpiar",
                    "Titulo"=>"Usuario registrado",
                    "Texto"=>"Los datos del usuario han sido registrado con exito",
                    "Tipo"=>"success"
                ];
            }else{
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"No hemos podido registrar el usuario",
                    "Tipo"=>"error"
                ];
            }
            echo json_encode($alerta);
        }/*fin de controlador*/

         /*controlador listado de usuario*/
         public function listar_usuario_controlador($privilegio,$id){
            $privilegio=mainModel::limpiar_cadena($privilegio);
            $id=mainModel::limpiar_cadena($id);

            $tabla="";

            $consulta="SELECT SQL_CALC_FOUND_ROWS usuario_dni,persona_nombres,persona_apaterno,persona_amaterno,usuario_estado,usuario_privilegio,persona_telefono,persona_mail FROM tusuario a INNER JOIN tpersona b on a.usuario_dni = b.persona_dni WHERE usuario_dni!='$id'";

            $conexion=mainModel::conectar();
            $datos=$conexion->query($consulta);
            $datos=$datos->fetchAll();

            $total=$conexion->query("SELECT FOUND_ROWS()");
            $total=(int)$total->fetchColumn();

            if($total>=1){
                foreach ($datos as $rows) {
                    if ($rows['usuario_estado']==1) {
                        $estado="Activo";
                    }else{
                        $estado="Inactivo";
                    }
                    $tabla .= '
                    <tr>
                        <td>'.$rows['usuario_dni'].'</td>
                        <td>'.$rows['persona_nombres'].' '.$rows['persona_apaterno'].' '.$rows['persona_amaterno'].'</td>
                        <td>'.$estado.'</td>
                        <td>'.$rows['usuario_privilegio'].'</td>
                        <td>'.$rows['persona_telefono'].'</td>
                        <td>'.$rows['persona_mail'].'</td>
                        <td>
                            <a href="'.SERVERURL.'usuarioUpdate/'.mainModel::encryption($rows['usuario_dni']).'/" class="btn btn-primary">
                                <i class="fas           fa-upload"></i>
                            </a>
                        </td>
                        <td>
                            <form class="FormularioAjax" action="'.SERVERURL.'ajax/usuarioAjax.php" method="POST" data-form="delete">
                                <input type="hidden" name="usuario_id_del" value="'.mainModel::encryption($rows['usuario_dni']).'">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    ';
                }
            }else{
                $tabla.='<tr class="text-center"><td colspan="9">No hay registros en el sistema</td></tr>';
            }
            return $tabla;

         }/*fin de controlador*/

          /*controlador eliminar usuario*/
          public function eliminar_usuario_controlador(){
            /* recibiendo id del usuario*/
            $id=mainModel::decryption($_POST['usuario_id_del']);
            $id=mainModel::limpiar_cadena($id);

            /*comprobando el usuario en BD*/
            $check_usuario=mainModel::ejecutar_consulta_simple("SELECT usuario_dni FROM tusuario WHERE usuario_dni='$id'");
            if($check_usuario->rowCount()<=0){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"El usuario que intenta eliminar no existe en el sistema",
                    "tipo"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }

            /*comprobando el usuario en BD*/
            $check_licencia=mainModel::ejecutar_consulta_simple("SELECT licencia_usuario FROM tlicencia WHERE licencia_usuario='$id' LIMIT 1");
            if($check_licencia->rowCount()>0){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"No podemos eliminar este usuario debido a que tiene mas de una licencia emitida con este usuario, recomendamos deshabilitar el usuario si ya no sera utilizado",
                    "tipo"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }

            /*comprobando privilegios*/
            session_start(['name'=>'SEL']);
            if($_SESSION['privilegio_sel']!=1){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"No tienes los permisos necesarios para realizar esta operacion",
                    "tipo"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }

            $eliminar_usuario=usuarioModelo::eliminar_usuario_modelo($id);
            if($eliminar_usuario->rowCount()==1){
                $alerta=[
                    "Alerta"=>"recargar",
                    "Titulo"=>"Usuario eliminado",
                    "Texto"=>"El usuario ha sido eliminado del sistema exitosamente",
                    "tipo"=>"success"
                ];
            }else{
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"No hemos podido eliminar el usuario, por favor intente nuevamente",
                    "tipo"=>"error"
                ];
            }
            echo json_encode($alerta);

          }/* fin de controlador */
    }