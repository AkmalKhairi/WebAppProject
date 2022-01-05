<?php require_once ('header.php'); ?>

<?php 

$sql="SELECT * FROM golfer";

$result = $conn->query($sql);

if ($result->num_rows >0)
{
    echo "<center><h3>GOLFER RECORD</h3></center>";
    echo "<table align='center' border='1' width='50%'>";
    echo "<tr><th>Golfer</th><th>Score</th><th>Par</th><th>Net</th><th>Score Round</th><th>Net Round</th><th colspan='2'> Update</th></tr>";

    while ($row = $result-> fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row['golfer']."</td>";
        echo "<td>".$row['score']."</td>";
        echo "<td>".$row['par']."</td>";
        echo "<td>".$row['net']."</td>";
        echo "<td>".$row['scoreround']."</td>";
        echo "<td>".$row['netround']."</td>";

       ?>

       <td align="center"><a href="golfer-update-record.php?id=<?php echo $row["id"];?>">Edit</a></td>
       <td align="center"><a href="golfer-delete-record.php?id=<?php echo $row["id"];?>">Delete</a></td>

       <?php
    }
    echo "</table>";
}
else{
    echo "0 results";
}

$conn->close();

?>

<?php require_once ('footer.php'); ?>