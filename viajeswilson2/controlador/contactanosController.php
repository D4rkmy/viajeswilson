<?php
require_once('modelo/indexModel.php');
class ContactanosController{
    private $indexModel;
    public function __construct(){
        $this->indexModel = new IndexModel();
    }
    public static function Contactanos(){
        require_once("vista/contactanos.php");
    }  
}
?>