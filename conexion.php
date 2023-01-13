<?php
class DBConnection
{

    public $conexion;
    private $server;
    private $base;
    private $usuario;
    private $contrasena;
    public function conectar()
    {
        try {
            $db = new mysqli($this->server, $this->usuario, $this->contrasena, $this->base);
            mysqli_set_charset($db, 'utf8');
            return $db;
        } catch (PDOException $e) {

            echo "ERROR: No puedes conectarte a la base de datos";
        }
    }

    public function __construct()
    {
        $this->cargarConfiguracion();
        $this->conexion = $this->conectar();
    }


    public function cargarConfiguracion()
    {
        $this->server = "localhost";
        $this->base = "aula_virtual";
        $this->usuario = "root";
        $this->contrasena = "";

        return;
    }
}
