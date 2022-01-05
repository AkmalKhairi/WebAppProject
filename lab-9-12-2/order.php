<?php require_once ('header.php'); ?>

<?php

    $total_price = 0;

    if ($_POST)
    {
        foreach ($_POST['price'] as $key => $price)
        {
            $total_price += ($price * $_POST['quantity'][$key]);
        }
    }

?>

<h2 class="text-center">Thank You <span style="color: red;"><?= ($_POST['name'] ?? null); ?></span> for Ordering Food with Us!</h2>

<table border="1" class="center">
    <tr>
        <th colspan="3">Personal Details</th>
    </tr>
    <tr>
        <td>Name:</td>
        <td colspan="2"><?= ($_POST['name'] ?? null); ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td colspan="2"><?= ($_POST['email'] ?? null); ?></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td colspan="2"><?= ($_POST['address'] ?? null); ?></td>
    </tr>
    <tr>
        <th colspan="3">Ordering Details</th>
    </tr>
    <tr>
        <th>Item</th>
        <th>Price (RM)</th>
        <th>Quanitity</th>
    </tr>
    <tr>
        <td>Nasi Ayam:</td>
        <td><?= ($_POST['price'][0] ?? null); ?></td>
        <td><?= ($_POST['quantity'][0] ?? null); ?></td>
    </tr>
    <tr>
        <td>Nasi Ambeng:</td>
        <td><?= ($_POST['price'][1] ?? null); ?></td>
        <td><?= ($_POST['quantity'][1] ?? null); ?></td>
    </tr>
    <tr>
        <td>Nasi Tomato:</td>
        <td><?= ($_POST['price'][2] ?? null); ?></td>
        <td><?= ($_POST['quantity'][2] ?? null); ?></td>
    </tr>
    <tr>
        <th colspan="2">Jumlah Bayaran:</th>
        <th><?= $total_price; ?></th>
    </tr>
</table>

<?php require_once ('footer.php'); ?>