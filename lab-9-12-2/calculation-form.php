<?php require_once ('header.php'); ?>

<form action="order.php" method="post">
<table border="1" class="center">
    <tr>
        <th colspan="3">Personal Details</th>
    </tr>
    <tr>
        <td>Name:</td>
        <td colspan="2"><input type="text" name="name" required></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td colspan="2"><input type="email" name="email" required></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td colspan="2"><textarea name="address" required></textarea></td>
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
        <td><input type="number" name="price[0]" value="6.50" required readOnly></td>
        <td><input type="number" name="quantity[0]" required></td>
    </tr>
    <tr>
        <td>Nasi Ambeng:</td>
        <td><input type="number" name="price[1]" value="7.80" required readOnly></td>
        <td><input type="number" name="quantity[1]" required></td>
    </tr>
    <tr>
        <td>Nasi Tomato:</td>
        <td><input type="number" name="price[2]" value="7.80" required readOnly></td>
        <td><input type="number" name="quantity[2]" required></td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: center;"><button type="submit">Submit Order</button>&nbsp;<button type="reset">Clear Order</button></td>
    </tr>
</table>
</form>

<?php require_once ('footer.php'); ?>