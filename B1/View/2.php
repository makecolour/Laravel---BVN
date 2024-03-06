<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 đến n</title>
</head>
<body>
    <form method = "POST">
        <div>
            <h1>Enter a Number</h1>
        </div>
        <br>
        <div>
            <label>Number: </label>
            <input type="number" name = "num"/>
        </div>
        <br>
        <div>
            <input type ="submit" value="Generate list">
        </div>
    </form>
</body>
</html>
<?php
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