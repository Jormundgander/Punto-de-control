<?php

    require_once 'Config/autoload.php';
    require_once 'Config/database.php';

    define('PATH_CONTROLADORES', 'Controladores/');

    if (isset($_GET['url'])) {

        //Convertimos String a Array
        $url = explode('/', $_GET['url']);

        if (file_exists(PATH_CONTROLADORES . $url[0] . 'Controlador.php')) {
        
            require_once PATH_CONTROLADORES . $url[0] . 'Controlador.php';

        } else {

            echo 'ERROR 404 => ' . $url[0] . 'Controlador.php' . ' |ARCHIVO NO EXISTENTE|';

        }

    } else {

        require_once PATH_CONTROLADORES.'indexControlador.php';
   
    }