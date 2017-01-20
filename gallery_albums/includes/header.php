<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACM ISM | Home</title>
		<link rel="shortcut icon" type="image/x-icon" href="http://www.acmism.org/favicon.ico" />
		
		<link type="text/css" href="css/menu.css" rel="stylesheet" />
		<script type="text/javascript" src="js/form.js"></script>
		<script src="js/jquery-1.9.0.min.js"></script>
		<!--<script src="jquery.snow.js"></script>
		<script>
			$(document).ready( function(){
			        $.fn.snow();
			});
		</script>
		Just in case any body wanted snowfall-->
</head>

<body>
	
	<div class=""><!--this div ends in footer-->
	<div class="">
		
		<?php 
			if(!is_null(check_login())) {
				echo "<div class =\"profile\">
					<a href=\"#\">
					<span>Hi, {$_SESSION['username']}</span>
					</a><span>|</span>
					<a href=\"logout.php\">
					<span>Logout</span>
					</a></div>";
			} 
		?>
		<?php include("includes/navigation.php") ?>
	</div>