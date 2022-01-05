<!-- Helper -->
<?php require_once ('helper.php'); ?>

<!-- Database Connection -->
<?php require_once ('database.php'); ?>

<?php
    session_start();

    $success_message = false;

    if ($_POST)
    {
        $sql = "INSERT INTO member (name, email, phone, gender, username, pwd) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "', '" . $_POST['gender'] . "', '" . $_POST['username'] . "', '" . $_POST['pwd'] . "')";

        if ($conn->query($sql) === TRUE)
        {
            $success_message = true;
            header( "refresh:3;url=index.php" );
        }
    }
    
    if (isset($_SESSION["username"]))
    {
        header('Location: welcome.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lab 9</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="container">

<h1 style="text-align: center;">Please fill the form below.</h1>

<?php if ($success_message === true) : ?>
    <div style="text-align: center; margin-bottom: 15px">
        <label class="validation-success">User successfully registered. You will be redirected back to login page in 3 seconds...</label>
    </div>
<?php endif; ?>

<form action="register.php" method="post">
<table class="center">
    <tr>
        <td>Name:</td>
        <td><input type="text" name="name" required></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="email" name="email" required></td>
    </tr>
    <tr>
        <td>Phone Number:</td>
        <td><input type="number" name="phone" required></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td>
            <input type="radio" value="M" name="gender" required> Male 
            <input type="radio" value="F" name="gender" required> Female
        </td>
    </tr>
    <tr>
        <td>Username:</td>
        <td><input type="text" name="username" required></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="pwd" required></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;">
            <button type="submit">Register</button>&nbsp;
            <button type="reset">Reset</button>&nbsp;
            <button type="button"><a href="index.php" style="text-decoration: none;">Back</a></button>
        </td>
    </tr>
</table>
</form>

</div>
</body>
</html>