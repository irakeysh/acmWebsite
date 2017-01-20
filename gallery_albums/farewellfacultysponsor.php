<!DOCTYPE html>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/header.php") ?>

<html>
<head>
	<title>fancyBox - Fancy jQuery Lightbox Alternative | Demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Add jQuery gallery_album_library -->
	<script type="text/javascript" src="gallery_album_lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="gallery_album_lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="gallery_album_source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="gallery_album_source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="gallery_album_source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="gallery_album_source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="gallery_album_source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="gallery_album_source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="gallery_album_source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

		body {
			max-width: 100%;
			margin: 0 auto;
			background-color: #e1e1e1;
			margin-top: -100px;
		}
		.holder{
			
			margin-top: 220px;
			position: relative;
			height: 100%;
			margin-left: 50px;


		}
		img{
			margin: 6px;
			border: 3px solid #18394b;
			box-shadow: 5px;
		}
		#menu{
			margin-top: -120px;
			position: fixed;
		}
		@media(max-width: 800px){
			.holder{
				margin-top: 220px;
			position: relative;
			height: 100%;
			margin-left:0px;
			}
		}
		@font-face {
    font-family:champagne;
    src: url(css/fonts/Champagne.ttf);
}

	</style>
</head>
<body>
	<div class="holder">
		<h3 style="font-size:45px; text-align:center;font-family:champagne;color:#18394b">Farewell to Dr. Sukomal Pal</h3>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/1.jpg"><img src="gallery_images/farewell faculty sponsor/1_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/2.jpg"><img src="gallery_images/farewell faculty sponsor/2_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/3.jpg"><img src="gallery_images/farewell faculty sponsor/3_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/4.jpg"><img src="gallery_images/farewell faculty sponsor/4_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/5.jpg"><img src="gallery_images/farewell faculty sponsor/5_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/6.jpg"><img src="gallery_images/farewell faculty sponsor/6_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/7.jpg"><img src="gallery_images/farewell faculty sponsorg/7_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/8.jpg"><img src="gallery_images/farewell faculty sponsor/8_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/9.jpg"><img src="gallery_images/farewell faculty sponsor/9_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/10.jpg"><img src="gallery_images/farewell faculty sponsor/10_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/11.jpg"><img src="gallery_images/farewell faculty sponsor/11_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/12.jpg"><img src="gallery_images/farewell faculty sponsor/12_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/13.jpg"><img src="gallery_images/farewell faculty sponsor/13_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/14.jpg"><img src="gallery_images/farewell faculty sponsor/14_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/15.jpg"><img src="gallery_images/farewell faculty sponsorg/15_s.jpg" alt="" /></a>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="gallery_images/farewell faculty sponsor/16.jpg"><img src="gallery_images/farewell faculty sponsor/16_s.jpg" alt="" /></a>
		
	</div>
	
<?php include("includes/footer.php") ?>
</body>
</html>