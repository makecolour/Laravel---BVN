<?php
require_once '../View/2.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["num"]!='')
    {
        $num = $_POST["num"];
        echo("<h2>List of Numbers: </h2>");
        echo("<ul>");
        for($i=1;$i<=$num;$i++){
            echo("<li>{$i}</li>");
        }
        echo("</ul>");
    }
    else{
        $num = 0;
        echo("<h2>List of Numbers: </h2>");
        echo("<ul>");
        echo("</ul>");
    }
}