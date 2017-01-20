<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/header.php") ?>
<?php
  if(isset($_GET['eve'])) {
    if(!intval($_GET['eve'])) {
      redirect_to("index.php");
    }
  } 
?>
<?php get_selected_event(); ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Events - ACM ISM Dhanbad</title>

    <!-- Bootstrap Core CSS -->
    <link href="event_css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="event_css/event.css" rel="stylesheet">
<?php 
if(isset($sel_event)) {
              $_SESSION['event'] = $sel_event['id'];
            $event_name = htmlspecialchars_decode($sel_event['name']);
            $event_poster = $sel_event['pic_link'];
            $event_headline =  htmlspecialchars_decode($sel_event['heading']);
             $event_details =  htmlspecialchars_decode($sel_event['details']);
             $date = $sel_event['date'];
            $starts = $sel_event['starts'];
            $ends = $sel_event['ends'];
            $venue = $sel_event['venue'];
            $rules = htmlspecialchars_decode($sel_event['rules']);
           
         }
 ?>




</head>

<body>
        <div class="container" style="background-color:white;">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 ">
                    <img class="img-responsive poster" src="<?php echo $event_poster; ?>">
                </div>
            </div>
        </div>
   

    <!-- Page Content -->
    <div class="container">
     <div class="row infoschedule">
            <div class="col-sm-8 col-lg-7 col-lg-offset-1 infobox">
                <h2><?php echo $event_name;?></h2>
                <p><?php echo $event_details;?></p>
                
            </div>
            <div class="col-sm-4 col-lg-4 schedule">
                <h3 >SCHEDULE</h3>
                <table  cellpadding="10">
                    <tr>
                        <td>Date:&nbsp &nbsp</td><td><?php echo $date;?></td>
                    </tr>
                    <tr>
                        <td>Start:&nbsp &nbsp</td><td><?php echo $starts;?></td>
                    </tr>
                    <tr>
                        <td>Ends:&nbsp &nbsp</td><td><?php echo $ends;?></td>
                    </tr>
                    <tr>
                        <td>At:&nbsp &nbsp</td><td><?php echo $venue;?></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.row -->


    <hr>
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-lg-offset-2 rules">
               <h3 style="text-align:center;"> Rules and Regulations</h3>
             <?php echo $rules;?>
        </div>

       

        <hr>

    
        <footer>
            <div class="row">
                <div class="col-lg-12">
                   
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
</div>
    <!-- /.container -->
    <?php include("includes/footer.php") ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
