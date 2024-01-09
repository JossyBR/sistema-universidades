<?php

class UsuariosC{

    static public function IniciarSesionC(){
        if(isset($_POST["libreta"])){
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["libreta"]) && preg_match('/^[a-zA-Z0-9.]+$/', $_POST["clave"])){
                $tablaBD = "usuarios";
                $datosC = array("libreta"=>$_POST["libreta"], "clave"=>$_POST["clave"]);
                $resultado = UsuariosM::IniciarSesionM($tablaBD, $datosC);

                if($resultado["libreta"] == $_POST["libreta"] && $resultado["clave"] == $_POST["clave"]){
                    $_SESSION["Ingresar"] == true;

                    echo '<script>
                        window.location = "inicio";
                    </script>';
                }else {
                    echo '<br> <div class="alert alert-danger">Error al Ingresar</div>';
                }
            }
        }

    }
}
?>
