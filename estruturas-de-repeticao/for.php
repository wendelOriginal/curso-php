<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estrutura de repetição</title>
</head>
<body>
    <h2>FOR: Positivo</h2>

    <?php 
        for($i = 0; $i <= 10; $i++){
            echo $i ."<br>";
        }
        ?>
<hr>
<h2>FOR: Negativo</h2>
        <?php
        
        for ($i = 1000; $i > 991; $i--){
            echo $i . "<br>";
        }
        ?>
        <hr>
<h2>FOR: Arrays e indeces</h2>
        <?php 
            $frutas = [ 'maça', 'peira', 'banana'];

            for($i = 0; $i <= count($frutas); $i++)
            {
                echo $frutas[$i] ."<br>";
            }        
        ?>
</body>
</html>