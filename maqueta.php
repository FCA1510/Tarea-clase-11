<?php
include('funcionesCero.php'); /*Todas las funciones que estan incluidad en funcionesCero.php 
van a estar incluidas en maqueta.php */
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/33f85b4315.js" crossorigin="anonymous"></script>

    <title>Sobre mí</title>
</head>

<body>
    <div class="container-fluid">
        <main>
            <table class="table">
            <?php
            $lPacientes = generarPacientes();
            generarPacientes($lPacientes);
            ?>
            </table>
        </main>
        <footer></footer>
    </div>



</body>

</html>