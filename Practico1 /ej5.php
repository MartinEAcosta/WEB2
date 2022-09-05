<?php

if(empty($_POST['peso']) || empty($_POST['altura'])){
  echo"<p> Debes ingresar un peso y altura </p>";
}
else{
    $peso = $_POST['peso'];
    $alt = $_POST['altura'];
    $imc  = $peso / $alt;

    if($imc < 18.5){
        echo "<p> Se encuentra por debajo del IMC </p>";
    }
    elseif($imc <= 25 ){
        echo "<p> Sus valores de IMC son normales </p>";
    }
    elseif($imc >= 26){
        echo "<p> Su IMC indica sobrepeso </p>";

    }
    elseif($imc >= 30){
        echo "<p> Tiene obesidad segun el IMC";
    }
    echo "<p> Su peso es $peso y su altura $alt </p>";

}