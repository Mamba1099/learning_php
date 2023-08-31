<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // if a global variable is declared, it can be accesed in a function that has declared that variable
        $z = 10;
        $x = 5;
        
        function multiplication() {
            $GLOBALS["y"] = $GLOBALS["z"] * $GLOBALS["x"]; // will access the variables outside the function
        }
        multiplication();
        echo ($y);
    ?>
</body>
</html>