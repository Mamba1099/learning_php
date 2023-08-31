<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>
<body>
    <?php
    // conditionals in php
    // if statements - execute once a condition is true
    $t = date("H");
    // checks the current datetime and assigns it to a variable $t

    if ($t < "20") {
        // checks if the current time is less than 20 hours
        // if true it print the message to the page
        echo ('Goodbye!');        
    }

    // if and else
    // execute code if a condition is true and another is false
    // the same principle applies to qhen you have two or more conditions to be executed
    if ($t < "10") {
        echo ("Good Afternoon!");
    }
    else {
        echo ("Good Evening!");
    }

    ?>
</body>
</html>