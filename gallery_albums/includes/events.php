


<style>
@font-face {
    font-family: built;
    src: url(../home_css/fonts/built.ttf);
}
@font-face {
    font-family: Champagne;
    src: url(../home_css/fonts/Champagne.ttf);
}
ul{
	margin: 0px;
}
 ul li{
 	background-color:#151515;
 	border-top: 1px  solid gray;
 	list-style-type: none;
 	margin-left:-40px;
 	 font-family: Champagne;
 	color: white;
 	padding:5px;

 }
 body{
 	padding: 0px;
 	margin: 0px;
 }
 .year{
 	background-color:#151515;
 	margin-left: 0px;
 	margin: 2px;
 	text-align: center;
 	color: white;
 	font-size: 18px;
 	font-family: built;
 	border-top: 2px solid gray;
 }
 a{
 	text-decoration: none;
 }

 </style>
 <html>
 <head>

<?php require_once("connection.php") ?>
</head>
<?php

$res1 = "SELECT * FROM year ORDER BY id DESC";
$years = mysql_query($res1);
?>
<body>
<table style="background-color:#151515;width:100%;">
	<tr >
		<td style="float:right"><a href="../index.php"><div style="float:both
			;border:3px solid gray; color:white; margin:5px; padding:8px;font-family: built;">Back</div></a></td>
	</tr>
</table>
<?php
$year_count = mysql_num_rows($years);

while($year_val = mysql_fetch_array($years))
{
	echo "<div class=\"year\">".$year_val['menu_name']."</div>";
	echo "<ul>";
	$res2 = "SELECT * FROM events ORDER BY id DESC";
	$res3 = mysql_query($res2);
	while($event_data = mysql_fetch_array($res3))
	{  
		if($event_data['occured_in']==$year_val['year_id'])
	  	echo "<a href=\"https://ism.acm.org/eve=".$event_data['id']."\">"."<li>".$event_data['name']."</li></a>";
	}
	echo "</ul>";
}

?>
</body>
</html>