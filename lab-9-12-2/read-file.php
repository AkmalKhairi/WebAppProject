<?php require_once ('header.php'); ?>

<?php
	// Report all errors except E_NOTICE
	error_reporting(E_ALL & ~E_NOTICE);
?>

<?php $fp = fopen("details.txt", "r") or die ("Couldn't open the file"); ?>

<table align="center">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Favourite Site</th>
            <th>Comment</th>
        </tr>
    </thead>

    <?php

        while (!feof($fp))
        {
            $data = fgets ($fp,1024);
            $values = chop($data);
            $val = explode("\t", $values);

            echo "<tr><td>".$val[0]."</td>";
            echo "<td>".$val[1]."</td>";
            echo "<td>".$val[2]."</td>";
            echo "<td>".$val[3]."</td>";
            echo "<td>".$val[4]."</td>";
            echo "<td>".$val[5]."</td>";
            echo "<td>".$val[6]."</td>";
            echo "<td>".$val[7]."</td>";
            echo "</tr>";
        }
      
            echo "</table>"; 
            fclose($fp);
    ?>

<?php require_once ('footer.php'); ?>