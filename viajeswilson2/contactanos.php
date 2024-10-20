<?php
require_once('config.php');
require_once('controlador/contactanosController.php');
if(isset($_GET['i'])):
    $metodo = $_GET['i'];
    if(method_exists('ContactanosController',$metodo)):
        ContactanosController::{$metodo}();
    endif;
else:
    ContactanosController::contactanos();
endif;
?>