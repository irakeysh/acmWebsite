<!DOCTYPE html>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/header.php") ?>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="gallery_css/hover-effects.css">
</head>
<body>
<div class="full-length" style="background-color:#e1e1e1">
    <div class="container">
    	
    	<ul>
        	<li class="widthadjust">
            	<div class="port-2 effect-1">
                	<div class="image-box">
                    	<img src="gallery_images/gsoc.jpg" alt="Image-1">
                    </div>
                    <div class="text-desc">
                    	<h3>Introduction to GSoC</h3>
                        <p>A brief overview about Google Summer of Code Internship program and Open Source.</p>
                    	<a href="gallery_albums/gsoc.php" class="btn">View Gallery</a>
                    </div>
                </div>
            </li>
            <li class="widthadjust">
            	<div class="port-2 effect-1">
                	<div class="image-box">
                    	<img src="gallery_images/faculty sponsor farewell.jpg" alt="Image-2">
                    </div>
                    <div class="text-desc">
                    	<h3>Farewell to Faculty Sponsor</h3>
                        <p>A farewell to ACM ISM Chapter's Faculty Sponsor Dr. Sukomal Pal</p>
                    	<a href="gallery_albums/farewellfacultysponsor.php" class="btn">View Gallery</a>
                    </div>
                </div>
            </li>
            <li class="widthadjust">
            	<div class="port-2 effect-1">
                	<div class="image-box">
                    	<img src="gallery_images/introduction to coding.jpg" alt="Image-3">
                    </div>
                    <div class="text-desc">
                    	<h3>Introduction to Coding</h3>
                        <p>Providing materials and guidance to 1st years to make them interested in coding </p>
                    	<a href="gallery_albums/itocoding.php" class="btn">View Gallery</a>
                    </div>
                </div>
            </li>
        </ul>
        <ul>
            <li class="widthadjust">
                <div class="port-2 effect-1">
                    <div class="image-box">
                        <img src="gallery_images/intro to git.jpg" alt="Image-1">
                    </div>
                    <div class="text-desc">
                        <h3>Introduction to Git</h3>
                        <p>A workshop on how to use Git  and Github for software development.</p>
                        <a href="gallery_albums/git.php" class="btn">View Gallery</a>
                    </div>
                </div>
            </li>
            <li class="widthadjust">
                 <div class="port-2 effect-1">
                    <div class="image-box">
                        <img src="gallery_images/big data.jpg" alt="Image-3">
                    </div>
                    <div class="text-desc">
                        <h3>Big Data & Cloud Computing</h3>
                        <p>ACM ISM Dhanbad brings to you a Tech-Talk on Big Data, Cloud Computing & Hadoop Map Reduce by Dr. Rajeev Gupta.</p>
                        <a href="gallery_albums/big data.php" class="btn">View Gallery</a>
                    </div>
                </div>
            </li>
            <li class="widthadjust">
                <div class="port-2 effect-1">
                    <div class="image-box">
                        <img src="gallery_images/electronic nose.jpg" alt="Image-3">
                    </div>
                    <div class="text-desc">
                        <h3>A tech-talk on Electronic Nose</h3>
                        <p>ACM ISM Dhanbad brings to you a Tech-Talk on An insight to Electronic nose and Electronic Tongue by Prof. Rajib Bandyopadhyay.</p>
                        <a href="gallery_albums/electronicnose.php" class="btn">View Gallery</a>
                    </div>
                </div>
            </li>
        </ul>
       
        
      
    </div>
</div>
<style type="text/css">
.foot{
    display: none;
}
</style>
<?php include("includes/footer.php") ?>
</body>
</html>
