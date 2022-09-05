<?php require 'templates/header.html'; ?>
<?php 
    //EJ 4
    require 'templates/ej4.html'; ?>

<?php 

    $items = [];
    $itmax = 250;
    for($i = 1; $i<= 200; $i++){
        array_push($items, $i);
    }
    if(isset($_GET['cant'])){
        for($i = 0; $i<$_GET['cant'];$i++){
            echo "<li> item $items[$i] </li>";
        }
    }else if(isset($_GET['todo'])){
            foreach($items as $item){
                echo "<li> item $item </li>";
            }
    }


    // ARREGLO INDEXADO POR POSICIONES 
    $indexado = "<h1> Generada con un arreglo indexado.</h1>";
    $estudiantes = array ("Juan", "Carlos", "Cruz");
    echo $indexado;

    echo "<ul>";
    foreach($estudiantes as $estudiante){
        echo "<li> $estudiante </li>";

    }
    echo "</ul>";
    
    ?>
<?php
    // ARREGLO ASOCIATIVO PARECIDO A JSON
    $asociativo = "<h1> Generada a partir de un arreglo asociativo. </h1>";
    $perfil = [
        "Juan" => 15,
        "Carlos" => 33,
        "Cruz" => 50,
    ];
    echo $asociativo;

    echo "<ul>";
    foreach($perfil as $nombre => $edad){
        echo "<li> $nombre de $edad años </li>";

    }
    echo "</ul>";


    ?>

    <?php require 'templates/form.html';?>

    <?php require 'templates/ej5.html';?>

    


<?php require 'templates/footer.html';?>