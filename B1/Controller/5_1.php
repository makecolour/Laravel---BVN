<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item and Brand</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
                $item = $_POST["item"];
                $brand = $_POST["brand"];
            echo("Item: {$item}<br>");
            echo("Brand: {$brand}");
        }
    ?>
</body>
</html>