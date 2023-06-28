<?php 
require_once("../Clases/DAO.php");
class Edit{

    function __construct(){

    }
    public function EditarContraseña(){
        $acpt = $_POST["id"];
        $info = new DAO();
        $data = $info->Editar($acpt);
        if($data != ""){
            header("Location: ../View/Editar.php?data=".urlencode(serialize($data)));
            exit;
        } else {
            echo 0;
        }
    }
}
$ds = new Edit();
$ds->EditarContraseña()
?>