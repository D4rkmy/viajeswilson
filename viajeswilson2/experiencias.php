<?php
require_once('config.php');
require_once('controlador/experienciasController.php');
if(isset($_GET['i'])):
    $metodo = $_GET['i'];
    if(method_exists('ExperienciasController',$metodo)):
        ExperienciasController::{$metodo}();
    endif;
else:
    ExperienciasController::experiencias();
endif;
?>