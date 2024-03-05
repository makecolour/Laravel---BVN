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
            if($_POST["item"]=="")
            {
                $item = "";
            }
            else{
                $item = $_POST["item"];
            }
            echo("Item: {$item}");
        }
    ?>

    <form action="./5_1.php" method="POST">
        <div>
            <label for="item">Enter brand to buy: </label>
            <input type="text" name = "brand">
        </div>
        <div>
            <input type="hidden" name="item" value="<?php echo("{$item}"); ?>">
        </div>
        <div>
            <input type ="submit" value="Submit">
        </div>
    </form>
</body>
</html>