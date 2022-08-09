<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="reg_employee.php" method="post">
    <h3>HOME</h3>

    <?php echo $_POST["firstname"]; ?><br>
<?//put conditional statement for active/inactive status?>
Your Person ID is: <?php echo $_POST["person_id"]; ?>

    <input type="submit" value="create employee">
</form>
<form action="reg_customer.php" method="post">
<input type="submit" value="create customer">

</form>
</body>

</html>