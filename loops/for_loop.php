<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for Loops</title>
</head>
<body>
    <?php
        //The for loop is used when you know in advance how many times the script should run.
        // Syntax
        // for (init counter; test counter; increment counter) {
        //      code to be executed for each iteration; }

        // $x = 0; - Initialize the loop counter ($x), and set the start value to 0
        // $x <= 10; - Continue the loop as long as $x is less than or equal to 10
        // $x++ - Increase the loop counter value by 1 for each iteration

        for ($h = 0; $h <= 10; $h++) {
            echo ("number is: $h <br>");
        }
    ?>
</body>
</html>