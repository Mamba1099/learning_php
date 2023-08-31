<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // arguements are specified after the function name
    // a function can have amny arguements
    function family_name ($last_name) {
        echo ("$last_name yujiro.<br>");
    }
    family_name("Martin");
    family_name("Kevin");
    family_name("Max");
    
    ?>
</body>
</html>