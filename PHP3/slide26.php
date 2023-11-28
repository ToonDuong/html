<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="urf-8">
    <title>Nguyen Ton Duong</title>

</head>

<body>
    <h3>Nguyen Ton Duong - 2121050379</h3>
    <form action="" method="get">
        <p>Amount:</p>
        <input type="number" name="amount">
        <p>Select currency</p>
        <select name="currency">
            <option value="USD">USD</option>
            <option value="EUR">EURO</option>
            <Option value="SGD">SINGAPORE DOLAR</Option>
            <option value="JPY">JAPANESE YEN</option>

        </select>
        <input type="Submit" value="convert">

    </form>
</body>
<?php
$exchangeRate = array("USD" => 22300, "EUR" => 27300, "SGD" => 17000, "JPY" => 120);
if (isset($_GET['amount'])) {
    $amount = $_GET['amount'];
    $currency = $_GET["currency"];
    echo " $amount USD is equal " . number_format($amount * $exchangeRate[$currency]) . "VND";
}
?>

</html>