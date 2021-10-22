<?php


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);

if (file_exists("archivo.txt")) {
    //Leer el archivo y almacenar su contenido json en  $jSonClientes
    $jsonClientes = file_get_contents("archivo.txt");

    //Convertir el json en array $aClientes
    $aClientes = json_decode($jsonClientes, true);
} else {
    $aClientes = array();
}

$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : "";

if ($_POST) {
    $nombre = trim($_REQUEST["txtNombre"]);
    $apellido = trim($_REQUEST["txtApellido"]);
    $profesion = trim($_REQUEST["txtProfesion"]);
    $descripcion = trim($_REQUEST["txtDescripcion"]);
    $imagen = "";

    if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
        $nombreAleatorio = date("Ymdhmsi"); //2021010420453710
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $nombreArchivo = $_FILES["archivo"]["name"];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $imagen = "$nombreAleatorio.$extension";
        move_uploaded_file($archivo_tmp, "imagenes/$imagen");
    }

    if ($id != "") {
        //Actualizar cliente
        if ($_FILES["archivo"]["error"] !== UPLOAD_ERR_OK) {
            $imagen = $aClientes[$id]["imagen"];
        } else {
            //Si está subiendo una nueva imagen, debe eliminar la imagen anterior
            unlink("imagenes/" . $aClientes[$id]["imagen"]);
        }

        $aClientes[$id] = array("nombre" => $nombre,
            "apellido" => $apellido,
            "profesion" => $profesion,
            "descripcion" => $descripcion,
            "imagen" => $imagen
        );
    } else {
        //Insertar nuevo cliente
        $aClientes[$id] = array("nombre" => $nombre,
        "apellido" => $apellido,
        "profesion" => $profesion,
        "descripcion" => $descripcion,
        "imagen" => $imagen
    );
    }
    //Convertir el array a json y almacenarlo en una variable $jSonClientes
    $jsonClientes = json_encode($aClientes);

    //Almacenar el contenido de la variable json en el archivo.txt
    file_put_contents("archivo.txt", $jsonClientes);
    header("Location: index.php");
}

if ($id != "" && isset($_REQUEST["do"]) && $_REQUEST["do"] == "eliminar") {
    unset($aClientes[$id]);
    $jsonClientes = json_encode($aClientes);
    file_put_contents("archivo.txt", $jsonClientes);
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>

   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armar Tarjeta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/33f85b4315.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5 text-center">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <?php if (isset($msg) && $msg != "") : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $msg; ?>
                            </div>
                        <?php endif; ?>
                        <div class="col-12 form-group">
                            <label for="txtNombre">Nombre: *</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" required value="<?php echo isset($aClientes[$id]["nombre"]) ? $aClientes[$id]["nombre"] : ""; ?>">
                        </div>
                        <div class="col-12 form-group">
                            <label for="txtApellido">Apellido: *</label>
                            <input type="text" id="txtapellido" name="txtApellido" class="form-control" required value="<?php echo isset($aClientes[$id]["apellido"]) ? $aClientes[$id]["apellido"] : ""; ?>">

                        </div>
                        <div class="col-12 form-group">
                            <label for="txtProfesion">Profesion:</label>
                            <input type="text" id="txtProfesion" name="txtProfesion" class="form-control" value="<?php echo isset($aClientes[$id]["profesion"]) ? $aClientes[$id]["profesion"] : ""; ?>">

                        </div>
                        <div class="col-12 form-group">
                            <label for="txtDescripcion">Descripcion: *</label>
                            <textarea class="form-control form-cust" name="txtDescripcion"></textarea>


                        </div>
                        <div class="col-12 form-group">
                            <label for="txtCorreo">Archivo adjunto:</label>
                            <input type="file" id="archivo" name="archivo" class="form-control-file" accept=".jpg, .jpeg, .png">
                            <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-3">
                            <button type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover border">
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Profesion</th>
                        <th>Descripcion</th>
                    </tr>
                    <?php foreach ($aClientes as $pos => $cliente) : ?>
                        <tr>
                        <td><img src="imagenes/<?php echo $cliente["imagen"]; ?>" class="img-thumbnail"></td>
                        <td><?php echo $cliente["nombre"]; ?></td>
                        <td><?php echo $cliente["apellido"]; ?></td>
                        <td><?php echo $cliente["profesion"]; ?></td>
                        <td><?php echo $cliente["descripcion"]; ?></td>
                        <td style="width: 110px;">
                            <a href="<?php echo "?id=$pos"; ?>"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo "?id=$pos&do=eliminar"; ?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </table>
                <a href="index.php"><i class="fas fa-plus"></i></a>
            </div>
        </div>
    </div>
</body>

</html>