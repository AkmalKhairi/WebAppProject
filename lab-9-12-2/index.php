<!-- Helper -->
<?php require_once ('helper.php'); ?>

<!-- Database Connection -->
<?php require_once ('database.php'); ?>

<?php
    session_start();

    $invalid_auth = false;

    if ($_POST)
    {
        $sql = "SELECT id, name, email, username FROM member WHERE username='" . $_POST['username'] . "' AND pwd='" . $_POST['password'] . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($result->num_rows > 0) {

            // Set Session Variables
            $_SESSION["id"] = $row['id'];
            $_SESSION["name"] = $row['name'];
            $_SESSION["email"] = $row['email'];
            $_SESSION["username"] = $row['username'];
        }
        else
        {
            $invalid_auth = true;
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

<h1 style="text-align: center;">Welcome. Please enter your username and password.</h1>

<?php if ($invalid_auth === true) : ?>
    <div style="text-align: center; margin-bottom: 15px">
        <label id="auth-error" class="validation-error">Username or password is wrong, please try again.</label>
    </div>
<?php endif; ?>

<form action="index.php" method="post">
<table class="center">
    <tr>
        <td>Username:</td>
        <td><input type="text" name="username" required></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password" required></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;"><button type="submit">Submit</button></td>
    </tr>
</table>
</form>
<p class="text-center" style="font-weight: bold;">New user? <a href="register.php">Sign-up now...</a></p>

</div>
</body>
</html>