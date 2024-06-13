<?php

$conex= mysqli_connect("localhost","root","","formulario");

if(mysqli_connect_errno()){
    echo'Este sitio está presentando problemas';
}
$conex -> set_charset("utf8");

?>
