<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../Styles/Index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <script src="https://iceberg.co.jazztel.com:8080/nav/nav.js" type="module"></script>
    <link rel="stylesheet" href="https://iceberg.co.jazztel.com:8080/nav/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion IT</title>
</head>

<header>
        <div id="particles-js" class="pt"></div>
        <nav id="navIceberg" class="nav">
            <div id="iceberg_Img"></div>
            <div id="iceberg_DropDownList"></div>
        </nav>
    </header>

<div class="contenedorTarjetas">
    <div class="tarjetas">
        <div onclick="CrearUser()" class="tarte">
            <img src="https://cdn-icons-png.flaticon.com/256/10691/10691841.png" />
            <p>Crear Usuario</p>
        </div>
        <div onclick="info()" class="tarte">
            <img class="imgIT" src="https://cdn-icons-png.flaticon.com/256/1122/1122395.png" />
            <p>Tabla Contenido</p>
        </div>
    </div>

</div>
<script>
    function CrearUser() {
        location.href = "Insert.php";
    }

    function info() {
        location.href = "Tabla.php";
    }
</script>