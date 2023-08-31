<?php
$name = $_POST['fname'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];

if (empty($name)) {
    echo "name is empty <br>";
} elseif (strlen($name) < 3) {
    echo "your name must be more than three letters <br>";
} else {
    echo $name . "<br>";
}


if (empty($last_name)) {
    echo "last name is empty <br>";
} elseif (strlen($last_name) < 3) {
    echo "your name must be more than three letters <br> ";
} else {
    echo $last_name . "<br>";
}

if (empty($age)) {
    echo "age is empty <br>";
} elseif ($age < 18) {
    echo "you are too young! <br>";
} else {
    echo $age;
}
