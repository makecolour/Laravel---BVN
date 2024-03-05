<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng cửu chương</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            
        }
    </style>
</head>
<body>
    <table>
    <?php
        for($i=1; $i<10; $i++)
        {
            echo("<tr>");
            echo("<td style= padding-left:20px>  </td>");
            for($j=1; $j<10; $j++)
            {
                $res = $i*$j;
                echo("<td>{$res}</td>");
            }
            echo("</tr>");
        }
    ?>
    </table>
</body>
</html>