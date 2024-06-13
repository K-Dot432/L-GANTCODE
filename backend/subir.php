<?php
session_start(); // Inicia la sesión
include('conexionimg.php');

if(isset($_POST['Guardar'] )){
    $imagen = $_FILES['imagen']['name'];
    $nombre=  $_POST['nombre'];
    $descripcion= $_POST['descripcion'];  

    if(isset($imagen) && $imagen != "" ){
        $tipo = $_FILES['imagen']['type'];
        $temp= $_FILES['imagen']['tmp_name'];

        if(!((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp')) )){
            $_SESSION['mensaje']= 'solo se permiten archivos jpeg, gif, webp';
            $_SESSION['tipo']= 'danger';
            header('location:../subir2.php');
        }else{
            $query = "INSERT INTO imagenes (imagen, nombre, descripcion) VALUES ('$imagen', '$nombre', '$descripcion')";
            $resultado= mysqli_query($con, $query);

            if($resultado){
                $destino = 'imagenes/'.$imagen;
                move_uploaded_file($temp, $destino);
                $_SESSION['mensaje']= 'se ha subido correctamente';
                $_SESSION['tipo']= 'success';
                header('location:../subir2.php');
            }else{
                $_SESSION['mensaje']= 'ocurrio un error';
                $_SESSION['tipo']=' danger';
            }
        }
    }
}
