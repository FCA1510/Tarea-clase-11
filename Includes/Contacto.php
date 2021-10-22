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
        <header>
            <?php include_once("navbar.php"); ?>
        </header>
    </div>

    <div class="container-fluid">
        <main>
            <div class="row">
                <div class="col-12 col-sm-12 p-5">
                    <h1 class="text-cust">¡Contactame!</h1>
                    <p class="desc-cust">Comencemos a trabajar juntos</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="container p-5">
                        <div class="cont-cust">
                            <form action="..." method="POST">
                                <label>Nombre</label><input type="text" class="form-control form-cust" name="nombreUs">
                                <label>Email</label><input type="text" class="form-control form-cust" name="emailUs">
                                <label>Mensaje</label>
                                <textarea class="form-control form-cust" name="mensajeUS"></textarea>
                                <input class="btn btn-primary" type="submit" name="enviar" value="Mensajeame">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php include_once("footer.php"); ?>

</body>

</html>

</html>>