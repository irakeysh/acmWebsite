<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/header.php") ?>

<?php

	$sql = "SELECT * FROM tbl_name WHERE Name LIKE '%".$_POST["search"]."%'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result)>0)
	{	echo "<table>";
		while($row = mysql_fetch_array($result)){
			echo "<tr>";
       				echo "<td>".$row['Member Number']."</td>"."<td>".$row['Name']."</td>"."<td>".$row['Membership Type']."</td>"."<td>".$row['Date Added']."</td>"
       				."<td>".$row['Expiration Date']."</td>";
       				echo "</tr>";
		}
		echo "</table>";
	}


?>