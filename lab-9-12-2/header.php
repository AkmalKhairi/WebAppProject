<!-- Helper -->
<?php require_once ('helper.php'); ?>

<!-- Database Connection -->
<?php require_once ('database.php'); ?>

<!-- Session -->
<?php require_once ('session.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lab 9</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 class="title text-center">BITM 2113: WEB APPLICATION DEVELOPMENT</h1>

<nav class="topnav">
    <div class="container">
        <a href="welcome.php" class="<?= active_url(["welcome.php"]); ?>">Home</a>
        <a href="user-form.php" class="<?= active_url(["user-form.php", "p_form.php"]); ?>">Form</a>
        <a href="calculation-form.php" class="<?= active_url(["calculation-form.php", "order.php"]); ?>">Order Form</a>
        <!-- <a href="#">Validation</a> -->
        <a href="read-file.php" class="<?= active_url(["read-file.php"]); ?>">Read File</a>
        <a href="write-file.php" class="<?= active_url(["write-file.php"]); ?>">Write File</a>
        <a href="golfer.php" class="<?= active_url(["golfer.php", "golfer-add-record.php", "golfer-view-record.php", "golfer-update-record.php", "golfer-delete-record.php"]); ?>">Golfer</a>
        <a href="view-profile.php" class="<?= active_url(["view-profile.php"]); ?>">View Profile</a>
        <a href="update-profile.php" class="<?= active_url(["update-profile.php"]); ?>">Update Profile</a>
        <a href="logout.php" class="<?= active_url(["logout.php"]); ?>" style="float: right;">Logout (<?= $_SESSION['name']; ?>)</a>
    </div>
</nav>

<div class="container">