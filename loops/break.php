<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // break statement is used to jump out of a loop
    $q = 1;

    while($q <=20) {
        if ($q == 10) { // condition set to break out of the loop 
            break;
        }
        echo ("value is : $q <br>"); // output numbers less than 10
        $q++;
    }
    // break in a for loop
    for ($q = 1; $q <=20; $q++) {
        if ($q == 15) {
            break;
        }
        echo ("value is: $q <br>");
    }
    ?>
</body>
</html>