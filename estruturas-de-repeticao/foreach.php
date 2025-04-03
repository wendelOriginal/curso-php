<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    
    <div>
        <h3>Foreach basic</h3>
        <?php
            $usuarios = [
                ['name' => 'Wendel doe', 'email' => 'wendel.doe@gmail.com'],
                ['name' => 'Jessica doe', 'email' => 'jessica.doe@gmail.com'],
            ];


            foreach($usuarios as $usuario)
            {
                echo "nome: ". $usuario['name'] ." - ". "email: ". $usuario['email'] . "<br>"; 
            }    
        ?>


    </div>

    <div>
        <h3>Foreach avançado</h3>
        <?php 
            foreach($usuarios as $index => $usuario)
            {
                echo $index.": nome: ".$usuario['nome'] ." email: ". $usuario['email']. "<br>";
            }
        
        ?>
    </div>

</body>
</html>