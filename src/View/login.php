<?PHP
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./Controller/Appcontroller.php" method="POST">

    <div>
        <label for="email">email :</label>
       <input type="text" id="email" name="email">
    </div>

    <div>
        <label for="pwd">password :</label>
       <input type="text" id="pwd" name="password">
    </div>

    <div class="button">
       <button type="submit">Send</button>
    </div>

</fom>

</body>

</html>