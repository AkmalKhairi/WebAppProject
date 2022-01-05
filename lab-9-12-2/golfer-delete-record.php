<?php 
    require_once ('header.php');

    $id=$_REQUEST['id'];

    $sql = "DELETE from golfer where id='".$id."'";
    $result = $conn->query($sql);

    if ($conn->query($sql)=== TRUE)
    {
        echo"<p style='text-align:center'>Data $id Had Been Deleted !";
        echo "<p>";
    }
    else
    {
        echo "<p>";
        echo "<p style='text-align:center'>Error:".$sql."<br>".$conn->error;
        echo "<p>";
    }

    $conn->close();

    header( "refresh:3;url=golfer-view-record.php" );

?>

<?php require_once ('footer.php');?>