<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do - while</title>
</head>
<body>
    <div>
        <h3>
            Do - while
        </h3>

        <?php
            $i = 0;

            do{
                echo $i .'<br>';
                $i++;
            }while($i <= 10);
        ?>
    </div>
</body>
</html>