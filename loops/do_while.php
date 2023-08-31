<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.
    //  Syntax
    //   do {
    //      code to be executed;
    //     while (condition is true); }
    $t = 1;

    do {
        echo ("$t <br>"); // increment ouch 9 times to satisfy the condition
        $t ++;
    }
    while ($t < 10);
    ?>
</body>
</html>