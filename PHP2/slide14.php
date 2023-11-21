<!DOCTYPE html>
<html lang="en" dir="1tr">

<head>
    <meta charset="UTF-8">

    <title>Nguyen Ton Duong</title>
</head>

<body>
    <?php
    echo "THE GAME";
    if ($_GET["response"] == "yes") {
        echo "HAS BEEN QUITED";
    } else {
        echo "WILL BE COUNTINUE IN 3 SECONDS";
    }
    echo "<br>AFTER IF STATEMENT"
    ?>

</body>

</html>