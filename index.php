<?php
include("navbar.php");
include("funcionesCero.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/33f85b4315.js" crossorigin="anonymous"></script>

    <title>Portfolio Fede Coronel Alegre</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <?php echo navbar(); ?>
        </header>
    </div>
    <div class="container-fluid">
        <main>
            <!---PRIMERA FILA  ---->
            <?php
            $unArray = generarPacientes();
            displayArray($unArray);
            ?>
            
        </main>

        <footer class="fixed-bottom">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <p class="text-center">FCA/2021</p>
                </div>
                <div class="col-12 col-sm-4">
                    <p class="text-center"><i class="fab fa-whatsapp">+54116665555</i></p>
                </div>
                <div class="col-12 col-sm-4">
                    <p class="text-center"><i class="fab fa-internet-explorer"></i>depcsuite.com</p>
                </div>
            </div>
        </footer>
</body>

</html>

</html>