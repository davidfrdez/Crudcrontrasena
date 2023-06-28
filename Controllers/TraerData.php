<?php 
require "../Clases/DAO.php";

class  TraerDatas{

    public $productos;
    function __construct(){

    }
    public function TraerData(){
        $con = new DAO();
        $productos = $con->TrearData();
        return $productos;
      }
}

?>