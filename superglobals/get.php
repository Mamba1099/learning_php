<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
        // PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".
        // $_GET can also collect data sent in the URL.
        // <html>
        // <body>
        //      <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
        // </body>
        // </html> 
        //When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "test_get.php", and you can then access their values in "test_get.php" with $_GET.
        // The example below shows the code in "test_get.php":
    ?>
</body>
</html>