<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    
    <?php
        $nota1 = 8;
        $nota2 = 7;
        $nota3 = 9;

        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "Nota 1: " . $nota1 . "<br>";
        echo "Nota 2: " . $nota2 . "<br>";
        echo "Nota 3: " . $nota3 . "<br>";
        echo "Média: $media". (($media >= 7) ? " -> Aprovado!" : " -> Reprovado!");

    ?>

</body>
</html>