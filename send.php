<?php  
include 'conexion.php';

// Verificar si todos los campos del formulario han sido enviados
if (empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password'])) {
    echo "<script>alert('Por favor, rellene todos los campos');</script>";
    echo "<script>window.location.replace('indexpagina.php');</script>";
    exit(); // Termina la ejecución del script
}

$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$correo = $_POST['email'];
$contrasena = $_POST['password'];

$consulta = "SELECT correo FROM usuario WHERE correo = '$correo'";
$resultado = mysqli_query($conex, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    echo "<script>alert('El usuario ya está registrado');</script>";
    echo "<script>window.location.replace('sesion.php');</script>";
    exit(); // Termina la ejecución del script
}

// Si el usuario no está registrado y todos los campos están llenos, procedemos a insertar los datos
$query = "INSERT INTO usuario(nombre, apellido, correo, contrasena)
          VALUES ('$nombre', '$apellido', '$correo', '$contrasena')";

$ejecutar = mysqli_query($conex, $query);

echo "<script>window.location.replace('indexpagina.php');</script>";
?>
