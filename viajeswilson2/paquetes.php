<?php
require_once('config.php');
require_once('controlador/paquetesController.php');
if(isset($_GET['i'])):
    $metodo = $_GET['i'];
    if(method_exists('PaquetesController',$metodo)):
        PaquetesController::{$metodo}();
    endif;
else:
    PaquetesController::paquetes();
endif;
?>