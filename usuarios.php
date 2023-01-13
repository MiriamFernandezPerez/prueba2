<?php

class Usuario
{

    public function __construct($conexion = '')
    {
        if (gettype($conexion) === 'object') {
            $this->db = $conexion;
            $sql = 'SELECT count(*) as id FROM usuarios';
            $respuesta = $this->consulta($sql);
        }
    }

    public function conexion($conexion)
    {
        $this->__construct($conexion);
    }
    public function consulta($sql)
    {
        $db = $this->db;
        $smt = $db->query($sql);
        return $smt;
    }


    public function comprobarUsuario($usuario)
    {
        $db = $this->db;
        $smt = $db->query('SELECT * FROM usuarios where nombre="' . $usuario . '"');
        if ($smt) {
            return  $smt->fetch_all();
        } else {
            return "error";
        }
    }
}
