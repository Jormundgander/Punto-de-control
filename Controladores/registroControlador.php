<?php

    namespace Controladores;

    use Modelos\Registro;

    if (isset($_POST)) {
        /*$cedula = $_POST['letra_cedula'] . $_POST['cedula'];
        $pass         = $_POST['pass'];
        $pregunta_s   = $_POST['pregunta_secreta'];
        $respuesta_s  = $_POST['respuesta_secreta'];

        $objeto = new Registro;
        $objeto->registrarUsuarios($cedula, $pass, $pregunta_s, $respuesta_s);

        
*/
    } else {
        
    }
    
    require_once 'Vistas/registroVista.php';