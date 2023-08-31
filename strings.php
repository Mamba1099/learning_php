<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // returns the length of a string
        echo strlen("Hello, World"); // output 12

        // functions counts the words in a string
        echo str_word_count("Hello, World!"); //output 2

        // fuctions reverses a string
        echo strrev("Hello, World!"); //output !dlroW ,olleH 

        //texts searches for a specific text in a string
        echo strpos("Hello, World", "world"); //output 6

        //function replaces some characters within a string
        echo str_replace('Word', 'Dolly', "Hello World");
        // output Hello, Dolly
    ?>  
</body>
</html>