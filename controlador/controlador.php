<?php
session_start();

if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $usuario = $_POST["email"];
        $password = $_POST["password"];
        
        // Suponiendo que $conex es tu conexión a la base de datos
        // Reemplaza esto con tu código de conexión real
        $sql = $conex->query("SELECT * FROM usuario WHERE correo = '$usuario' AND contrasena = '$password'");
        
        if ($datos = $sql->fetch_object()) {
            $_SESSION["id"] = $datos->id;
            $_SESSION["name"] = $datos->nombre;
            $_SESSION["lastname"] = $datos->apellido;
            header("location: indexpagina.php");
            exit; // Importante para evitar que se ejecute más código después de la redirección
        } else {
            echo "<div>Acceso denegado papu</div>";
        }
    } else {
        echo "Campos vacíos";
    }
}
?>
