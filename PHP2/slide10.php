<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Nguyen Ton Duong</title>
</head>

<body>
    <?php
    echo "THE GAME";
    if ($_GET["response"] == "yes") {
        echo "HAS BEEN QUITED";
    }
    if ($_GET["response"] == "no") {
        echo "WILL BE COUNTINUE IN 3 SECONDS";
    }
    echo "<br>AFTER IF STATEMENT"
    ?>

</body>

</html