<?php
    $peticionAjax = true;
    require_once "../config/App.php";
        /*Instanciamos al controlador*/
        require_once "../controladores/listarSelectControlador.php";
        $ins_persona=new listarSelectControlador();

        /*Agregar un nuevo usuario*/
            echo $ins_persona-> listar_personas_controlador();
