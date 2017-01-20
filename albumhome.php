<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/header.php") ?>

<link href="event_css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
#menu{
	margin-top: 2px;
}
.width{
	width: 180px;
}

body{
margin-top: -5px;
margin-bottom: -10px;

background-attachment:fixed;
}
.sheet{
	margin-top: 7%;
	margin-left: 15%;
}

.number_tabs{
	font-size: 23px;
	color:white;
	text-decoration: none;
}
td, th{
	margin: auto 20px;
	padding:5px;
	font-family:Champagne;
	color: black;
	font-size: 22px;
	text-align: center;
	border-bottom: 1px solid grey;

}
th{
	background-color: #151515;
	color: white;

}
@font-face {
    font-family:Champagne;
    src: url(home_css/fonts/Champagne.ttf);
}
table{
	background: rgba(255,255,255,0.5);
}
h2{
	text-align:justify;
	font-size: 35px;
	 font-family:Champagne;
}
@media(max-width: 480px) {
	.width{
		width: auto;
	}
	td,th{
		font-size: 13px;
		color: red;
	}
	.sheet{
	margin-top: 15%;
	margin:0%;
}
	}
@media(max-width: 360px) {
	.sheet{
	margin-top: 20%;
	margin:0%;
}

td,th{
	color:green;
	padding:0px;
	margin: 0px;
	font-size: 11px;

}
}
.pgn{
	background-color: black;
	max-width: 738px;
	padding-left:25%;
	 font-family:Champagne;
	 margin-bottom:5%;
	 font-weight: bold;
	
}


</style>
<html>
<head>
	<title> Members - ACM ISM Dhanbad</title>
	<?php

	
	if(!isset($_GET["page"]))
		{$rowval = 0;
			$pageno = 1;
		}

	else{
		$pageno = $_GET["page"];
		$rowval = $pageno*12-12;
	}
		
	?>
</head>
<body>
	<div class="container">
	
       	<div class="sheet">
       		<?php
       			$total = mysql_query("SELECT * FROM tbl_name");
       			$res= mysql_query("SELECT * FROM gallery ORDER BY `name` ASC LIMIT $rowval,12");
       			?> 
       			<table  style="border:5px solid black;">
       				<tr>
       					<th>Membership No. </th><th class="width">Name</th><th> Type</th><th>Valid from:</th><th>Valid till: </th>
       				</tr>
       			<?php	
       			while($row=mysql_fetch_array($res))
       			{
       				echo "<img src=\">".$row['pic_link']."\"/>";
       				echo $row['pic_link'];
       				
       			}
       			
       			$count = mysql_num_rows($total);
       			$no_of_pages = ceil($count/12);
       			if($pageno>=0 && $pageno<=6)
       				{ echo "</td></tr><tr><td><div class=\"pgn\">";
       			for($i = 1;$i<=10;$i++)
       			{	
       				?> <a class="number_tabs" href="members.php?page=<?php echo $i;?>"> <?php echo $i."&nbsp"?> </a>
       				<?php }
       			}
       			else if($pageno>6){
       				 echo "</td></tr><tr><td><div class=\"pgn\">";
       			 for($i =$pageno-5;$i<=$pageno+4&&$i!=$no_of_pages;$i++)
       			{	if($i>0){
       				?> <a class="number_tabs" href="members.php?page=<?php echo $i;?>"> <?php echo $i."&nbsp"?> </a>
       				<?php }}?>
       				<?php echo "</div> </td></tr>"; }?>

       				


       		
       	</div>
    </div>
    <img src="images/1.jpg">
</div>
<?php include("includes/footer.php") ?>
</body>
</html>
