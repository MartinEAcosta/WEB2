<?php 


if(empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['años'])){
    
    echo "<p> Debe completar los campos</p>";
}
else{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $años = $_POST['años'];

    echo "Bienvenido $nombre $apellido de años $años";
}