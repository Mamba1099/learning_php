<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // loops thru a code for every element in an array
    // foreach ($array as $value) {
    //     code to be executed;
    //   } 
    $names = array('james', 'kevin', 'Alex', 'Martin', 'Victor', 'Max');

    foreach ($names as $value) {
        echo ("$value <br>"); // output the values in the array
    }
    // outputs the value and the key and the value
    $age = array(
        "petter" => "35",
        "james" => "23",
        "kevin" => "43",
        "jane" => "17" );
    foreach($age as $x => $val) { // current key assigned value $x
        // iterates through each element
        echo("$x = $val <br>"); // outputs the currenet key
    }
    
    ?>
</body>
</html>