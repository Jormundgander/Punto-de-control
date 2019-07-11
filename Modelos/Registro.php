<?php

namespace Modelos;

use Config\Conexion;

class Registro extends Conexion
{
    public function __construct()
    {
        Conexion::realizandoConexion();
    }

    public function registrarUsuarios($cedula, $pass, $pregunta_s, $respuesta_s)
    {
        $query = 'INSERT INTO usuarios (usuario_ci, pass, ) VALUES ('$cedula', '$pass', '$pregunta_s', '$respuesta_s')';
        $PDOStatement = Conexion::prepare($query);
        
        try {
            $PDOStatement->execute();
            return $usuariosRegistrados = $PDOStatement->fetchAll();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}