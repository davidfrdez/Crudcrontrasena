<?php 
require "../Clases/DAO.php";

class  TraerRoles{

    public $productos;
    function __construct(){

    }
    public function Rol(){
        $con = new DAO();
        $productos = $con->TrearRol();
        return $productos;
      }
}

?>