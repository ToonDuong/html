<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            background-color: #000;
            font-family: Arial, Helvetica, sans-serif;
            color: #fff;
        }

        p {
            font-size: 100px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            margin: 0;
        }
    </style>
</head>

<body>
    <h1>hôm nay là tết?</h1>
    <?php
    $current_date = date("m-d");
    $target_date = "01-01";
    if ($current_date === $target_date) {
        echo "<p>đúng</p>";
    } else {
        echo "<p>sai</p>";
    }
    ?>
</body>

</html>