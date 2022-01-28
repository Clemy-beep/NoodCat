
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SESSION['type'] === "ceo") include './src/View/Templates/CeoHeader.html';
    if ($_SESSION['type'] === "client") include './src/View/Templates/ClientHeader';
    if ($_SESSION['type'] === "cashier") include './src/View/Templates/CashierHeader';
    ?>
    <h1>Welcome <?= $_SESSION['firstname'] ?></h1>
</body>

</html>