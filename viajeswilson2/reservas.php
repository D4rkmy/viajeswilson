<?php
require_once('config.php');
require_once('controlador/reservasController.php');
if(isset($_GET['i'])):
    $metodo = $_GET['i'];
    if(method_exists('ReservasController',$metodo)):
        ReservasController::{$metodo}();
    endif;
else:
    ReservasController::reservas();
endif;
?>