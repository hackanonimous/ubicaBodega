<?php
    require_once "mainModel.php";
    class personaModelo extends mainModel{
        /*modelo agregar persona*/
        protected static function agregar_persona_modelo($datos){
            $sql=mainModel::conectar()->prepare("INSER INTO tpersona(persona_dni,persona_nombres,persona_apaterno,persona_amaterno,persona_nacimiento,persona_telefono,persona_mail) VALUES(:DNI,:Nombre,:APaterno,:AMaterno,:Nacimiento,:Telefono,:Mail)");

            $sql->bindParam(":DNI",$datos['DNI']);
            $sql->bindParam(":Nombre",$datos['Nombre']);
            $sql->bindParam(":APaterno",$datos['APaterno']);
            $sql->bindParam(":AMaterno",$datos['AMaterno']);
            $sql->bindParam(":Nacimiento",$datos['Nacimiento']);
            $sql->bindParam(":Telefono",$datos['Telefono']);
            $sql->bindParam(":Mail",$datos['Mail']);
            $sql->execute();
            return $sql;
        }
    }