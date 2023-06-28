<?php
require_once("../Controllers/TraerData.php");
$traer = new TraerDatas();
$Fac = $traer->TraerData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Styles/Index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion</title>
</head>

<body>





    <div class="title">
        <p>Usuarios</p>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Rol</th>
                    <!-- <th scope="col">Estado</th> -->
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>

                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($Fac); $i++) { ?>
                    <tr>
                        <td><?php echo $Fac[$i]->id ?></td>
                        <td><?php echo $Fac[$i]->Usuario ?></td>
                        <td><input type="password" disabled value="<?php echo $Fac[$i]->Contraseña ?>" /></td>
                        <td><?php echo $Fac[$i]->Rol ?></td>
                        <td>
                            <form action="../Controllers/Edit.php" method="POST">
                                <button name="id" value="<?php echo $Fac[$i]->id ?>" type="submit" class="btn btn-warning">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="../Controllers/delete.php" method="POST">
                                <button name="id" value="<?php echo $Fac[$i]->id ?>" type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="butosn">
            <button class="btn btn-secondary" onclick="Regresar()">Regresar</button>
            <button class="btn btn-primary" onclick="Insertar()">Insertar</button>
        </div>

    </div>
</body>
</html>
<script>
    function Regresar(){
        location.href = "index.php";
    }
    function Insertar(){
        location.href = "Insert.php";
    }
</script>