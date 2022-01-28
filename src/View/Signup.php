<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Sign-up</title>
</head>

<body>
    <h1>Create a new account</h1>
    <select name="personType" id="personType">Choose a person type
        <option value="cashier">Employee</option>
        <option value="user">User</option>
        <option value="ceo">CEO</option>
    </select>
    <form method="POST" id="userform">
        <?php include './src/View/UserForm.html'; ?>
    </form>
    <form method="POST" id="cashierform">
        <?php include './src/View/CashierForm.html'; ?>
    </form>
    <form method="POST" id="ceoform">
        <?php include './src/View/CeoForm.html'; ?>
    </form>

</body>
<script>
    $('#cashierform').css('display', 'none');
    $('#userform').css('display', 'none');
    $('#ceoform').css('display', 'none');

    $('select').on('change', function() {
        if ($('select').val() === 'user') {
            $('#userform').css('display', 'block');
            $('#cashierform').css('display', 'none');
            $('#ceoform').css('display', 'none');
        }
        else if ($('select').val() === 'ceo'){
            $('#userform').css('display', 'none');
            $('#cashierform').css('display', 'none');
            $('#ceoform').css('display', 'block');
        } else {
            $('#userform').css('display', 'none');
            $('#cashierform').css('display', 'block');
            $('#ceoform').css('display', 'none');
        }
    });
</script>

</html>