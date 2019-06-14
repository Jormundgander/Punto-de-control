<?php

namespace Modelos;

use Config\Conexion;

class Login extends Conexion
{
    public function __construct()
    {
        Conexion::realizandoConexion();
    }

    public function obtenerUsuariosRegistrados()
    {
        $query = 'SELECT * FROM usuarios';
        $PDOStatement = Conexion::prepare($query);
        
        try {
            $PDOStatement->execute();
            return $usuariosRegistrados = $PDOStatement->fetchAll();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}