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
    ?>
</body>
</html>