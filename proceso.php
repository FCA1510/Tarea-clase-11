<?php
$nombreUsuario = $_POST["nombreUs"];
$emailUsuario = $_POST["emailUs"];
$passUs = md5($_POST["passUs"]);
$validoUs ="Federico";
$emailValido ="fcoronel1510@gmail.com";
$passValida ="e10adc3949ba59abbe56e057f20f883e";
if($nombreUsuario == $validoUs && $emailUsuario == $emailValido && $passUs == $passValida) {
    echo "Logueo exitoso";
}
else {
    echo "Datos invalidos";
}
?>