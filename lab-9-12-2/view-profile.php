<?php 
require_once ('header.php');

$sql = "SELECT * FROM member where id='" . $_SESSION['id'] . "'";

$result = $conn->query($sql);

//dd($result);

if ($result->num_rows >0)
{

    while ($row = $result->fetch_assoc())
    {
        echo "<center><h3> YOUR PROFILE </h3></center>";
        echo "<table align = 'center' border='1' width='50%'>";
        echo "<tr><th>ID: </th><td>".$row['id']."</td></tr>";
        echo "<tr><th>Name: </th><td>".$row['name']."</td></tr>";
        echo "<tr><th>Email: </th><td>".$row['email']."</td></tr>";
        echo "<tr><th>Phone: </th><td>".$row['phone']."</td></tr>";
        echo "<tr><th>Gender: </th><td>".$row['gender']."</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 results";
}

$conn->close();

?>

<?php require_once ('footer.php');?>