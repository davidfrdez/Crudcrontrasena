<?php

require_once("../Clases/DAO.PHP");


class SetEdit
{


    public $user;

    function __construct()
    {
    }
    public function EditUSer()
    {
        $sd = $_GET["id"];
        $pass = $_GET['pass'];
        $rol = $_GET['Rol'];
        $dao = new DAO();
        $res = $dao->edit($sd,$pass,$rol);
        if ($res == "ok") {
            header("Location: ../View/Tabla.php");
        } else {
            echo '<script>alert("No se guardo")</script>';
        }
    }
}
$algo = new SetEdit();
$algo->EditUSer();
?>