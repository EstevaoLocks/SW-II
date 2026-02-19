<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    

    <?php
        $numeros_pares = [];

        for ($i = 1; $i <= 20; $i++){
            echo ($i % 2 == 0) ? "$i<br>" : '';

            ($i % 2 == 0) ? $numeros_pares[] = $i : '';
        }
    ?>


</body>
</html>