<?php require_once ('header.php'); ?>

<h2 class="text-center">WELCOME <span style="color: red;"><?= ($_POST['fname'] ?? null); ?> <?= ($_POST['lname'] ?? null); ?></span></h2>

<table border="1" class="center">
    <tr>
        <th colspan="3">Personal Details</th>
    </tr>
    <tr>
        <td>First Name:</td>
        <td colspan="2"><?= ($_POST['fname'] ?? null); ?></td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td colspan="2"><?= ($_POST['lname'] ?? null); ?></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td colspan="2"><?= ($_POST['address'] ?? null); ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td colspan="2"><?= ($_POST['email'] ?? null); ?></td>
    </tr>
    <tr>
        <td>Phone Number:</td>
        <td colspan="2"><?= ($_POST['phone_num'] ?? null); ?></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td colspan="2"><?= ($_POST['gender'] ?? null); ?></td>
    </tr>
    <tr>
        <td>Favourite Side:</td>
        <td colspan="2">
            <?php

                $fav_site = "";

                if ($_POST['fav_site'])
                {
                    foreach ($_POST['fav_site'] as $value)
                    {
                        $fav_site .= $value. " | ";
                    }
                }

                echo rtrim($fav_site, " |");
            ?>
        </td>
    </tr>
    <tr>
        <td>Comment:</td>
        <td colspan="2"><?= ($_POST['comment'] ?? null); ?></td>
    </tr>
</table>

<?php require_once ('footer.php'); ?>