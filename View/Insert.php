<?php
require_once("../Controllers/TraerRoles.php");
$traer = new TraerRoles();
$Fac = $traer->Rol();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Styles/Index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
    <div class="title">
        <p>Crear Usuario</p>
    </div>
    <div class="container">
        <form action="../Controllers/CrearUser.php" method="POST">
            <div class="Login">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usario" id="usuario" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" required>
                </div>
                <div class="mb-3">
                    <label>Rol</label>
                    <select class="form-select" name="Rol" required>
                        <option value="" selected disabled>Seleccione..</option>
                        <?php
                        for ($i = 0; $i <  count($Fac); $i++) { ?>

                            <option value="<?php echo $Fac[$i]->id ?>"><?php echo $Fac[$i]->Rol ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="butosn">
                    <button type="submit" class="btn btn-primary" onclick="Correcto()">Guardar</button>
                    <button class="btn btn-secondary" onclick="Regresar()">Regresar</button>
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

    function validarFormulario() {
        var rol = document.getElementById("rol").value;
        if (rol === "") {
            alert("Por favor, seleccione un rol.");
            return false;
        }
        return true;
    }
</script>