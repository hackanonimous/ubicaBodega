<?php
    $peticionAjax = true;
    require_once "../config/App.php";
    if (isset($_POST['usuario_dni_reg'])) {
        /*Instanciamos al controlador*/
        require_once "../controladores/usuarioControlador.php";
        $ins_usuario=new usuarioControlador();

        /*Agregar un nuevo usuario*/
        if (isset($_POST['usuario_clave_1_reg']) && isset($_POST['usuario_clave_2_reg'])) {
            echo $ins_usuario->agregar_usuario_controlador();
        }
    }else{
        session_start(['name'=>'SEL']);
        session_unset();
        session_destroy();
        header("Location: ".SERVERURL."login/");
        exit;
    }