<?php
    $peticionAjax = true;
    require_once "../config/App.php";
    if (isset($_POST['persona_dni_reg'])) {
        /*Instanciamos al controlador*/
        require_once "../controladores/personaControlador.php";
        $ins_usuario=new personaControlador();

        /*Agregar un nuevo usuario*/
        if (isset($_POST['persona_dni_reg']) && isset($_POST['persona_nombre_reg'])) {
            echo $ins_usuario->agregar_persona_controlador();
        }
    }else{
        session_start(['name'=>'SEL']);
        session_unset();
        session_destroy();
        header("Location: ".SERVER."login/");
        exit;
    }