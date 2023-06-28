<?php 
require_once("../Clases/DAO.php");
class delete{

    function __construct(){

    }

    public function deleteUser(){
        $acpt = $_POST["id"];
        $info = new DAO();
        $data = $info->delete($acpt);
        if($data != ""){
            header("Location: ../View/Tabla.php");
            exit;
        } else {
            echo 0;
        }
    }
}
$ds = new delete();
$ds->deleteUser();
?>