<?php

    namespace Controladores;

    use Modelos\Login;

     /*if (isset($_POST)) {*/
        /*$letra_cedula = $_POST['letra_cedula'];
        $cedula       = $_POST['cedula'];
        $pass         = $_POST['pass'];

        $objeto = new Login;
        $usuariosRegistrados = $objeto->obtenerUsuariosRegistrados();

        //Recorremos registros obtenidos de la bd y lo comparamos con lo que hemos recibido del Frontend
        foreach ($usuariosRegistrados as $valor) {
            
            if ($valor['usuario_ci'] == $cedula && $valor['password'] == $pass) {

                /*
                /* Redirección al index, pasamos la variable url con valor 'home' vía GET, así una vez que
                /* el usuario se logee entrará en la interfaz home y se podrá visualizar la posición actual 
                /* en la que se encuentra a través de la url
                /*
                /* Nota: Como estamos trabajando indexado y con jquery él capturará eso que envíamos vía GET,
                /* él recibirá 'homeControlador', aquí envíamos 'home' y el archivo index le agrega el sufijo
                /* 'Controlador' debido a esto se utiliza un condicional en el Frontend
                */
  /*             header('Location:index.php?url=home');
            
            } else {
                echo $autenticacion = 'Cédula o contraseña incorrectos';
            }
        }
    }*/