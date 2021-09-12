<?php
    session_start();
    
    class Conectar
    {
        protected $dbh;

        protected function Conexion()
        {
            try {
                //cadena de conexion
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=certidicados", "root", "");
                return $conectar;

            } catch (Throwable $error) {
                print "Error BD!: " . $error->getMessage() . "<br/>";
                die();
            }
        }

        //para evitar problemas con las ñ o tildes
        public function set_names()
        {
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        //ruta principal del proyecto
        public static function ruta()
        {
            return "http://localhost:90/";
        }
    }


?>