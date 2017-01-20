<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(function() {
    var pull        = $('#pull1');
        menu        = $('#menu ul');
        menuHeight  = menu.height();
 
    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});

$(window).resize(function(){
    var w = $(window).width();
    if(w > 320 && menu.is(':hidden')) {
        menu.removeAttr('style');
    }
}); 


</script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">




<div id="menu">
    <ul class="menu">
    	<li class="logo"><img   style="margin-left:100px; margin-top:5px;" src="css/logo.png"></li>
    	<li><a href="../index.php"  class="parent hometab"><span>Home</span></a></li>
    	
		<li>
			<a href="../timeline.php" class="parent"><span>Timeline</span></a>
		</li>
		<li class="event_responsive1"><a href="../includes/events.php" class="parent event  "><span>Events</span></a></li>
		<li class="event_responsive2"><a href="#" class="parent event "><span>Events</span></a>
			<div>
				<ul>
					<?php $up_event_set = get_event_by_finish_point(0);
						$output = "<li><a href=\"#\"";
						if(mysql_num_rows($up_event_set)) {
							$output .= " class=\"parent\" ";
						}
						$output .= "><span>Upcoming Events</span></a>";
						echo $output;
						echo "<div><ul>";
						if(isset($_SESSION['staff_id'])) {
							while($event = mysql_fetch_array($up_event_set)) {
								echo "<li>";
								echo "<a href=\"change_details.php?eve=" . urlencode($event['id']) . 
								"\"><span>{$event['name']}</span></a></li>";
							}

						} else {
							while($event = mysql_fetch_array($up_event_set)) {
								echo "<li>";
								echo "<a href=\"event.php?eve=" . urlencode($event['id']) . 
								"\"><span>{$event['name']}</span></a></li>";
							}
						}
						echo "</ul></div>";	
					?>
					</li>
						<?php
							$year_set = get_all_years();
							while($year = mysql_fetch_array($year_set)) {
							echo "<li><a href=\"#\" class=\"parent\"><span>";
							echo "{$year['name']}";
							echo "</span></a>";
							echo "<div><ul>";
							$event_set = get_all_events($year['year_id']);
								if(isset($_SESSION['staff_id'])) {
								while($event = mysql_fetch_array($event_set)) {
									echo "<li>";
									echo "<a href=\"change_details.php?eve=" . urlencode($event['id']) . 
									"\"><span>{$event['name']}</span></a></li>";
								}
							} else {
								while($event = mysql_fetch_array($event_set)) {
									echo "<li>";
									echo "<a href=\"event.php?eve=" . urlencode($event['id']) . 
									"\"><span>{$event['name']}</span></a></li>";
								}
							}
							echo "</ul> </div>";
						}
						echo "</li>";
					?>
				</ul>
		
			</div>
		</li>
		<li>
			<a href="../members.php" class="parent"><span>Members</span></a>
		</li>
	
		<li>
			<a href="../team.php" class="parent"><span>Team</span></a>
			<div>
				<ul>
					<li><a href="../team.php">2016-2017</a></li>
					<li><a href="../team15.php">2015-2016</a></li>
					<li><a href="../team14.php">2014-2015</a></li>
					
					
				</ul>
			</div>
		</li>
		<li>
			<a href="../gallery.php" class="parent"><span>Gallery</span></a>
		</li>
	
		<?php
			if(check_login()) {
				echo "<li><a href=\"forum.php\" class=\"parent\"><span>Forum</span></a></li>";
			} else {
				echo "<li style=\"display:none\"><a href=\"login.php\" class=\"parent\"><span><!--Join Us--></span></a></li>";
			}
		?>
		<?php
			if(isset($_SESSION['staff_id'])) {
				echo "<li><a href=\"staff_area.php\" class=\"parent\"><span>Staff Area</span></a></li>";
			}
		?>    
	</ul>
	 <a href="#" id="pull1" style="text-align:center; font-family: AndaleMono;"><strong>ACM ISM DHANBAD</strong></a>
</div>