<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // statement continue breaks one iteration in the loop and continue with the next iteration in the group
        for ($g = 0; $g < 10; $g++) {
            if ($g == 4) { // when true it skips the number 4 
                continue;
            }
            echo ("$g <br>");
        }
    ?>
</body>
</html>