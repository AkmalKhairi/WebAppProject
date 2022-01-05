<?php require_once ('header.php'); ?>

<?php

    $success_message = false;

    if ($_POST)
    {
        $sql = "UPDATE member SET name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "', gender='" . $_POST['gender'] . "' WHERE id='" . $_SESSION['id'] . "'";

        if ($conn->query($sql) === TRUE)
        {
            $success_message = true;
        }
    }

    $sql = "SELECT * FROM member where id='" . $_SESSION['id'] . "'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<center><h3> YOUR PROFILE </h3></center>

<?php if ($success_message === true) : ?>
    <div style="text-align: center; margin-bottom: 15px">
        <label class="validation-success">User profile successfully updated.</label>
    </div>
<?php endif; ?>

<form method="post" action="update-profile.php">

    <table align="center" border="1" width="50%">
        <tr>
            <th>Name: </th>
            <td><input type="text" name="name" value="<?= $row['name']; ?>"></td>
        </tr>
        <tr>
            <th>Email: </th>
            <td><input type=text name="email" value="<?= $row['email']; ?>"></td>
        </tr>
        <tr>
            <th>Phone: </th>
            <td><input type="text" name="phone" value="<?= $row['phone']; ?>"></td>
        </tr>
        <tr>
            <th>Gender: </th>
            <td>
                <input type="radio" name="gender" value="M" <?= ($row['gender'] == "M") ? "checked" : null; ?>> Male
                <input type="radio" name="gender" value="F" <?= ($row['gender'] == "F") ? "checked" : null; ?>> Female
            </td>
        </tr>
        <tr>
            <th colspan="2">
                <button type="submit" name="submit">UPDATE</button> 
                <button type="reset" name="clear">RESET</button>
            </th>
        </tr>
    </table>

</form>

<?php require_once ('footer.php');?>