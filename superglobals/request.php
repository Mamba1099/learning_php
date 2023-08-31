<!DOCTYPE html>
<html lang="en">
<head>
    <!-- define the HTML page
        post is used to sen the form data
        action attribute is set to php echo $_server ['PHP)SELF]; which means that the form data will be sent to the same PHP script that generates the form
    -->
    <form method="post" action="<?php  echo $_SERVER['PHP_SELF']; ?>"> 
    Name: <input type="text" name="fname"> <!--creates input field that allows user to enter their name -->
          <input type="submit">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //   $_SERVER['REQUEST_METHOD']  -- Returns the request method used to access the page (such as POST)
                                                // checks if the form has been submittes using post method
                                                // access the request method used to access the page
                                                // collect value of input field
        $name = $_REQUEST['fname']; // retrieves the value entered in the field '$fname' and assigns it tot the variable '$name'
        if (empty($name)) { // PHP code checks if the value is empty and if empty it chos name is empty if not it echoes the value name
          echo "Name is empty";
        } else {
          echo $name;
        }
      }
    ?>
</body>
</html>