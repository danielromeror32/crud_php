
<?php 
session_start();

if (isset($_SESSION["usuario"])) {
    echo "Usuario: " . $_SESSION["user"] . " Estatus " . $_SESSION["status"];
}else {
    echo "no hay datos";
}

?>