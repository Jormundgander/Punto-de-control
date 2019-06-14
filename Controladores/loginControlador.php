<?php

    namespace Controladores;

    use Modelos\Login;

    if (isset($_POST)) {
            
        $letra_cedula = $_POST['letra_cedula'];
        $cedula       = $_POST['cedula'];
        $pass         = $_POST['pass'];

        $objeto = new Login;
        $usuariosRegistrados = $objeto->obtenerUsuariosRegistrados();

        //Recorremos el array con los registros obtenidos de la bd
        foreach ($usuariosRegistrados as $valor) {
            
            if ($valor['usuario_ci'] == $cedula && $valor['password'] == $pass) {
                
                require_once 'Vistas/index.php';
            
            }
        }
    }