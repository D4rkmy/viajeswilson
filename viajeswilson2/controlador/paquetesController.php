<?php
require_once('modelo/indexModel.php');
class PaquetesController{
    private $indexModel;
    public function __construct(){
        $this->indexModel = new IndexModel();
    }
    public static function Paquetes(){
        require_once("vista/paquetes.php");
    }  
}
?>