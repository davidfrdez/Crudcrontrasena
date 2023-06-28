<?php

require_once("../DB/DB.php");
class DAO
{


    public function __construct()
    {
    }

    public function Cn()
    {
        $CN = new conection();
        $BD = $CN->Conexion();
        return $BD;
    }

    public function SetUser($usuario, $pass,$rol){
        $cn = $this->Cn();
        $query = "INSERT INTO UsuariosAPP (Usuario,Contrasena,Rol) VALUE ('$usuario','$pass','$rol');";
        $res = mysqli_query($cn,$query);
        if ($res ==true) {
           return "ok";
        }else{
            echo mysqli_error($cn);
            return "error";
        }
    }
    public function TrearData(){
        $data = array();
        $cn = $this->Cn();
        $query = "SELECT * FROM UsuariosAPP ;";
        $res = mysqli_query($cn,$query);
        if (mysqli_num_rows($res) > 0) {
            while ($file = mysqli_fetch_array($res)) {
                $dto = new stdClass();
                $dto->id = $file["Id"];
                $dto->Usuario = $file["Usuario"];
                $dto->Contraseña = $file["Contrasena"];
                $dto->Rol = $file["Rol"];
                $data[] = $dto;
            }
            return $data;
        } else {
            echo mysqli_error($cn);
            return 0;
        }
    }
    public function Editar($id){
        $cn = $this->Cn();
        $query = "SELECT * FROM UsuariosAPP Where Id = $id ;";
        $res = mysqli_query($cn,$query);
        if ($res && mysqli_num_rows($res) > 0) {
            $data = mysqli_fetch_object($res);
            return $data;
        }
        return [];
    }
    public function edit($id, $pass,$rol){
        $cn = $this->Cn();
        $query = "UPDATE UsuariosAPP SET Contrasena='$pass', Rol=$rol WHERE Id= $id";
        $res = mysqli_query($cn,$query);
        if ($res ==true) {
           return "ok";
        }else{
            echo mysqli_error($cn);
            return "error";
        }
    }
    
    public function delete($id){
        $cn = $this->Cn();
        $query = "DELETE FROM UsuariosAPP WHERE Id=$id";
        $res = mysqli_query($cn,$query);
        if ($res ==true) {
           return "ok";
        }else{
            echo mysqli_error($cn);
            return "error";
        }
    }
    public function TrearRol(){
        $data = array();
        $cn = $this->Cn();
        $query = "SELECT * FROM Roles ;";
        $res = mysqli_query($cn,$query);
        if (mysqli_num_rows($res) > 0) {
            while ($file = mysqli_fetch_array($res)) {
                $dto = new stdClass();
                $dto->id = $file["Id"];
                $dto->Rol = $file["Rol"];
                $data[] = $dto;
            }
            return $data;
        } else {
            echo mysqli_error($cn);
            return 0;
        }
    }
}
