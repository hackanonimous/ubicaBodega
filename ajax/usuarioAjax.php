<?php
    $peticionAjax = true;
    require_once "../config/App.php";
    if () {
        /*Instanciamos al controlador*/
        require_once "../controladores/usuarioControlador.php";
        $ins_usuario=new usuarioControlador();
    }else{
        session_start(['name'=>'SEL']);
        session_unset();
        session_destroy();
        header("Location: ".SERVER."login/");
    }