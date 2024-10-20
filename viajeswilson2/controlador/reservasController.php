<?php
require_once('modelo/indexModel.php');
class ReservasController{
    private $indexModel;
    public function __construct(){
        $this->indexModel = new IndexModel();
    }
    public static function Reservas(){
        require_once("vista/reservas.php");
    }  
}
?>