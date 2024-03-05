<?php
    require_once "../View/4.php";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if($_POST["age"]=="")
        {
            $age = 0;
        }
        else{
            $age = $_POST["age"];
        }
        $name = $_POST["name"];
        echo("<h1>Hello, my name is {$name}, and I'm {$age} years old.</h1>");
    }
?>