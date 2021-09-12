<?php
    class Usuario extends Conectar
    {
        public function login()
        {
            $conectar = parent::Conexion();
            parent::set_names();

            if (isset($_POST["enviar"])) {
                $correo = $_POST["email"];
                $password = $_POST["password"];

                if (empty($correo) and empty($password)) {
                    header("Location:" . Conectar::ruta() . "index.php|m=2");
                    exit();
                }else {
                    $sql = "SELECT * FROM usuarios WHERE Email=? AND Password=? AND Inactivo=0";
                    $cmd = $conectar->prepare($sql);
                    $cmd->bindValue(1, $correo);
                    $cmd->bindValue(2, $password);
                    $cmd->execute();

                    $result = $cmd->fetch();

                    if (is_array($result) and count($result) > 0) {
                        $_SESSION["usuarioId"] = $result["Id"];
                        $_SESSION["nombreUsuario"] = $result["Nombre"] . " " . $result["ApellidoPaterno"] . " " . $result["ApellidoMaterno"];
                        $_SESSION["email"] = $result["Email"];
                        header("Location:" . Conectar::ruta() . "views/UsuHome/");
                        exit();
                    }
                    else {
                        header("Location:" . Conectar::ruta() . "index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }

?>