<?php
    $peticionAjax = true;
    require_once "../config/App.php";
    if(isset($_POST['token']) && isset($_POST['usuario'])){
        require_once "../controladores/loginControlador.php";
        $ins_login=new loginControlador();

        echo $ins_login->cierre_sesion_controlador();
    }else{
        session_start(['name'=>'SEL']);
        session_unset();
        session_destroy();
        header("Location: ".SERVERURL."login/");
        exit;
    }