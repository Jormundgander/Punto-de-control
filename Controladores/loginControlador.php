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

                /* 
                * Redirección al index, pasamos la variable url con valor 'home' vía GET, así una vez que
                * el usuario se logee entrará en la interfaz home y se podrá visualizar la posición actual 
                * en la que se encuentra a través de la url
                */
                header('Location:index.php?url=home');
            
            }
        }
    }