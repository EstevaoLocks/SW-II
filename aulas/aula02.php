<?php

    $nota = 7;
    if ($nota >= 6){
        echo "Aprovado!";
    } else {
        echo "Reprovado!";
    }
    echo "<br><br>";
    for ($i = 1; $i <= 5; $i++){
        echo "Número: " . $i . (($i % 2 > 0) ? " ==> Aprovado" : " ==> Reprovado") . "<br>";
        // if ($i % 2 > 0){
        //     echo "Aprovado! <br>";
        // } else {
        //     echo "Reprovado! <br>";
        // }
    }


?>