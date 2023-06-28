<?php

require_once("../Clases/DAO.PHP");


class SetUser
{


    public $user;

    function __construct()
    {
    }
    public function Crearuser()
    {
        $usuario = $_POST['usario'];
        $pass = $_POST['pass'];
        $Rol = $_POST['Rol'];
        $dao = new DAO();
        $res = $dao->SetUser($usuario, $pass,$Rol);
        if ($res == "ok") {
            header("Location: ../View/Tabla.php");
        } else {
            echo '<script>alert("No se guardo")</script>';
        }
    }
}
$algo = new SetUser();
$algo->Crearuser();
?>