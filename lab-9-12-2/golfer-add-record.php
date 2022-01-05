<?php require_once ('header.php'); ?>

<?php
    $success_message = false;

    if ($_POST)
    {
        $sql = "INSERT INTO golfer (golfer, score, par, net, scoreround, netround) VALUES ('" . $_POST['golfer'] . "', '" . $_POST['score'] . "', '" . $_POST['par'] . "', '" . $_POST['net'] . "', '" . $_POST['scoreround'] . "', '" . $_POST['netround'] . "')";

        if ($conn->query($sql) === TRUE)
        {
            $success_message = true;
        }
    }
?>

<h1 class="text-center">Gold Tournament Round Results Form</h1>

<?php if ($success_message === true) : ?>
    <div style="text-align: center; margin-bottom: 15px">
        <label class="validation-success">Golfer record successfully added.</label>
    </div>
<?php endif; ?>


<form action="golfer-add-record.php" method="post">
    <table  align= center >
        <tr>
            <td> <label><b>Golfer</b></label></td>
            <td> <input type="text"  name="golfer" placeholder="Enter Golfer" required></td>
        </tr>
        <tr>
            <td> <label><b>Score</b></label></td>
            <td> <input type="number" name="score" placeholder="Enter Score" required></td>
        </tr>
        <tr>
            <td> <label><b>Par</b></label></td>
            <td> <input type="number" name="par" placeholder="Enter Par" required></td>
        </tr>
        <tr>
            <td> <label><b>Net</b></label></td>
            <td> <input type="number" name="net" placeholder="Enter Net" required></td>
        </tr>
        <tr>
            <td> <label><b>Score Through Round</b></label></td>
            <td> <input type="number" name="scoreround" placeholder="Enter Through Round" required></td>
        </tr>
        <tr>
            <td> <label><b>Net Through Round</b></label></td>
            <td> <input type="number" name="netround" placeholder="Enter Net Through Round" required></td>
        </tr>
        <tr>
            <th colspan="2">
                <button type="submit" name="submit">INSERT RESULT</button> 
                <button type="reset" name="clear">CLEAR RESULT</button>
            </th>
        </tr>
    </table>
</form>

<?php require_once ('footer.php'); ?>