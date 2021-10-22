<?php 


function generarPacientes() {
    $lPacientes = array();
    $lPacientes[] = array("nombre" => "Federico", "apellido" => "Coronel","dni" => 30464323,"edad" => 38, "mail" => "fcoronel1510gmail.com");
    $lPacientes[] = array("nombre" => "Federico", "apellido" => "Coronel","dni" => 30464323,"edad" => 38, "mail" => "fcoronel1510gmail.com");
    $lPacientes[] = array("nombre" => "Federico", "apellido" => "Coronel","dni" => 30464323,"edad" => 38, "mail" => "fcoronel1510gmail.com");
    $lPacientes[] = array("nombre" => "Federico", "apellido" => "Coronel","dni" => 30464323,"edad" => 38, "mail" => "fcoronel1510gmail.com");
    $lPacientes[] = array("nombre" => "Federico", "apellido" => "Coronel","dni" => 30464323,"edad" => 38, "mail" => "fcoronel1510gmail.com");
    $lPacientes[] = array("nombre" => "Federico", "apellido" => "Coronel","dni" => 30464323,"edad" => 38, "mail" => "fcoronel1510gmail.com");
    $lPacientes[] = array("nombre" => "Federico", "apellido" => "Coronel","dni" => 30464323,"edad" => 38, "mail" => "fcoronel1510gmail.com");
    $lPacientes[] = array("nombre" => "Federico", "apellido" => "Coronel","dni" => 30464323,"edad" => 38, "mail" => "fcoronel1510gmail.com");
    $lPacientes[] = array("nombre" => "Federico", "apellido" => "Coronel","dni" => 30464323,"edad" => 38, "mail" => "fcoronel1510gmail.com");
    $lPacientes[] = array("nombre" => "Federico", "apellido" => "Coronel","dni" => 30464323,"edad" => 38, "mail" => "fcoronel1510gmail.com");
    $lPacientes[] = array("nombre" => "Federico", "apellido" => "Coronel","dni" => 30464323,"edad" => 38, "mail" => "fcoronel1510gmail.com");
    return $lPacientes;
}
function displayArray($unArray) {
    for($i = 0; $i<count($unArray); $i++) {
        echo "<div class=row><div class=\"col-12 col-sm-2\">".$unArray[$i]["nombre"]."</div>";
        echo "<div class=\"col-12 col-sm-2\">".$unArray[$i]["apellido"]."</div>";
        echo "<div class=\"col-12 col-sm-2\">".$unArray[$i]["dni"]."</div>";
        echo "<div class=\"col-12 col-sm-2\">".$unArray[$i]["edad"]."</div>";
        echo "<div class=\"col-12 col-sm-4\">".$unArray[$i]["mail"]."</div>";
        echo "</div>";

    }
}


function login($u, $e, $c) {  //son parametros para definir la funcion
    $validoUs ="Federico";
    $emailValido ="fcoronel1510@gmail.com";
    $passValida ="e10adc3949ba59abbe56e057f20f883e";
    if ($u == $validoUs && $e == $emailValido && $c == $passValida) {
        return "Logueo exitoso";
    }
     else 
     {
        header("Location: index.php");
    }
}

/* Variable tipo STATIC: Estan siempre en el interior de una funcion y tienen la caracteristica que guardan 
memoria en su ejecucion previa. 

/* Las variables  que se crean dentro de una funcion tienen vigencia dentro de la propia funcion. 
Esto significa que no son accesibles, ni visibles desde el exterior. Cualquier variables dentro de la funcion
no es visible dentro del programa */

// echo calcularNeto($bruto);
