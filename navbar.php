<?php
function navbar() {
    $nvbar = "<nav class=\"navbar\" role=\"navigation\"><div class=\"container-fluid justify-content-md-center\">
        <div class=\"row\">
            <div class=\"col-12 p-5\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link link-cust\" href=\"index.php\">Listar Personas</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link link-cust\" href=\"armartarjeta.php\">Armar Tarjeta</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link link-cust\" href=\"formulario.php\">Secreto</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>";
    return $nvbar;
}
?>