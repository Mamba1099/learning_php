<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // while loop
    //it executes a block of code one the condition is true
    //  while (condition is true) {
    //        code to be executed; }
    // Example Explained

    // $x = 1; - Initialize the loop counter ($x), and set the start value to 1
    // $x <= 5 - Continue the loop as long as $x is less than or equal to 5
    // $x++; - Increase the loop counter value by 1 for each iteration

    
    $X = 1; // Starting line

    while ($x <= 10) {
        echo ("number is: $x <br>"); // <br> places number in new line
        
        $x++; // increments the value by 1
    }
    $y = 0;
    // Example Explained

    // $y = 0; - Initialize the loop counter ($y), and set the start value to 0
    // $y <= 100 - Continue the loop as long as $y is less than or equal to 100
    // $y+=10; - Increase the loop counter value by 10 for each iteration


    while ($y <= 100) {
        echo ("number: $y <br>");
        $y += 10; // count the number at intervals of 10
    }
    ?>
</body>
</html>