<?php
if (isset($_GET["data"])) {
    $data = unserialize(urldecode($_GET["data"]));
    $id = $data->Id;
    $usuario = $data->Usuario;
    $contrasena = $data->Contrasena;
    $rol =$data->Rol;
}
require_once("../Controllers/TraerRoles.php");
$traer = new TraerRoles();
$Fac = $traer->Rol();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Styles/Index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <div class="title">
        <p>Editar Usuario</p>
    </div>
    <div class="container">
        <form action="../Controllers/SaveEdit.php" method="GET">
            <div class="Login">
                <div class="mb-3">
                    <input style="visibility: hidden;" type="text" class="form-control" name="id" required value="<?php echo $id ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usario" required disabled value="<?php echo $usuario ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text" class="form-control" name="pass" required >
                </div>
                <div class="mb-3">
                    <label>Rol</label>
                    <select class="form-select" name="Rol" required >
                        <option value="" selected disabled>Seleccione..</option>
                        <?php
                        for ($i = 0; $i <  count($Fac); $i++) { ?>
                            <option value="<?php echo $Fac[$i]->id ?>"><?php echo $Fac[$i]->Rol ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Rol</label>
                    <input type="text" class="form-control" name="Rol" required value="<?php echo $rol ?>">
                </div> -->
                <div class="butosn">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button  class="btn btn-secondary" onclick="Regresar()">Regresar</button>
                </div>
            </div>


        </form>
    </div>
</body>

</html>
<script>
    function Regresar() {
        location.href = "Tabla.php";
    }
</script>