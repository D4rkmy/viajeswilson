<?php
require_once('modelo/indexModel.php');
class ExperienciasController{
    private $indexModel;
    public function __construct(){
        $this->indexModel = new IndexModel();
    }
    public static function Experiencias(){
        require_once("vista/experiencias.php");
    }  
}
?>