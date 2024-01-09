<?php

require_once "ConexionBD.php";

class UsuariosM extends ConexionBD{
    public function IniciarSesionM($tablaBD, $datosC){
        $conexionBD = new ConexionBD();
        $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE libreta = :libreta");

        $pdo ->bindParam(":libreta", $datosC["libreta"], PDO::PARAM_STR);

        $pdo->execute();

        return $pdo -> fetch();
        
        // $pdo = null;
        // $pdo = close();
    }
}

?>