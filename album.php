<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/form_functions.php"); ?>
<?php
	if(isset($_POST['submit'])) {
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
		$file_name = $name . $year. "." . $extension;
		$pic_link = "images/". $file_name;
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& ($_FILES["file"]["size"] < 1000000)
		&& in_array($extension, $allowedExts)) {
			if ($_FILES["file"]["error"] > 0) {
			    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			} else {
			    echo "Upload Image: " . $_FILES["file"]["name"] . "<br>";
			    echo "Image Type: " . $_FILES["file"]["type"] . "<br>";
			    echo "Image Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
			    if (file_exists("images/" . $_FILES["file"]["name"])) {
			      	echo $_FILES["file"]["name"] . " already exists. ";
			    } else {
			      	move_uploaded_file($_FILES["file"]["tmp_name"],
			      	"images/" . $file_name);
			      	echo "Stored in: " . "images/" . $file_name;
			    }
			}
		} else {
		  	echo "Invalid file";
		}
		$query = "INSERT INTO gallery (
					name
					) values (
					'{$pic_link}'
					)";
		if(mysql_query($query, $connection)) {
			header("Location: ablum.php");
		} else {
			//echo mysql_error();
			echo "<p>Event creation failed!!</p>";
		}
	}
?>
<?php require_once("includes/header.php"); ?>
<div class="content clearfix">
   	<div class="chapter display clearfix">
		<form action="new_event.php" method="POST" class="bootstrap-frm" enctype="multipart/form-data">
		    <h1>Event Form 
		        <span>Please fill all the texts in the fields.</span>
		    </h1>
		    <label>
		       
		    <label>
		    	<span>Image :</span>
		    	<input id="file" type="file" name="file" >
		    </label>
		    
		   
		   
		   <label>
		        <span>&nbsp;</span> 
		        <input type="submit" name="submit" class="button" value="Enter into Database" /> 
		    </label>    
		</form>
	</div>
</div>
<?php include("includes/footer.php"); ?>