<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // function that gives returning value
    declare (strict_type = 1); // strict requirement
    function sum( int $a, int $b) { 
        $z = $a + $b;
        return $z;
    }
    echo ("3 + 5 = ").sum(3, 5)."<br>";
    echo ("78 + 13 = ct").sum(78, 13)."<br>";
    ?>
</body>
</html>