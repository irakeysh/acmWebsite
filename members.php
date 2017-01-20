<!DOCTYPE html>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/header.php") ?>
<html lang="en">
<?php
	mysql_connect(DB_HOST,DB_USER,DB_PASS) OR die("connection error");
	mysql_select_db(DB_NAME) OR die("database selection error");

 ?>
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="jQuery UI autocomplete in Bootstrap Modal Popup Using PHP Ajax, jquery ui autocomplete bootstrap, autocomplete in modal popup">
		<meta name="description" content="jQuery UI autocomplete in Bootstrap Modal Popup Using PHP Ajax, jquery ui autocomplete bootstrap, autocomplete in modal popup">
		<title>Bootstrap Modal jQuery Autocomplete</title>
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Noto+Serif:400,700">
		<link href="members_cssjs/css/jquery-ui.min.css" rel="stylesheet">
		<link href="members_cssjs/css/bootstrap.min.css" rel="stylesheet">
		
    	<link href="members_cssjs/css/datepicker.css" rel="stylesheet">
		<link href="members_cssjs/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="members_cssjs/css/dataTables.bootstrap.min.css" />
		<link href="members_cssjs/css/style.css" rel="stylesheet">
		<style>

		
	</head>
<body>

	
	
	
	<div class="container content">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				<br />
				<div class="clearfix"></div>
				
			
				<div class="clearfix"></div>
				<br /><br />
				
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>Name</th>
			                <th>Membership Type</th>
			                <th style="display:none;"></th>
			                <th>Membership Number</th>
			                <th>Valid from:</th>
			                <th>Valid till:</th>
			            </tr>
			        </thead>
			       
			        <tbody>

			        	<?php $sql = "SELECT * FROM tbl_name";
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result))
						{	echo "<tr>";
							echo "<td>".$row['Name']."</td>";
							echo "<td>".$row['Membership Type']."</td>";
							echo "<td style=\"display:none;\">".$row['Membership Type']."</td>";
							echo "<td>".$row['Member Number']."</td>";
							echo "<td>".$row['Date Added']."</td>";
							echo "<td>".$row['Expiration Date']."</td>";
							echo "</tr>";

						}
						?>

			           
			        </tbody>
			    </table>
			
			</div>
		</div>
	</div>



	<div class="modal modal-fullscreen fade" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Create Invoice</h4>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h2>From,</h2>
						    	<div class='row'>
						      		<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>
						      			<div class="form-group">
											<input type="email" class="form-control" id="companyName" placeholder="Company Name">
										</div>
										<div class="form-group">
											<textarea class="form-control" rows='3' id="companyAddress" placeholder="Your Address"></textarea>
										</div>
						      		</div>
						      		
						      		
						      		
						      	</div>
						      	<h2>To,</h2>
						      	<div class='row'>
						      		<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>
						      			<div class="form-group">
											<input type="email" class="form-control" id="clientCompanyName" placeholder="Company Name">
										</div>
										<div class="form-group">
											<textarea class="form-control" rows='3' id="clientAddress" placeholder="Your Address"></textarea>
										</div>
										
						      		</div>
						      		<div class='col-xs-12 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 col-sm-4 col-md-4 col-lg-4'>
						      			<div class="form-group">
											<input type="number" class="form-control" id="invoiceNo" placeholder="Invoice No">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="invoiceDate" placeholder="Invoice Date">
										</div>
										<div class="form-group">
											<input type="number" class="form-control amountDue" id="amountDueTop" placeholder="Amount Due">
										</div>
						      		</div>
						      	</div>
						      	<div class="text-center">
							      	<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
								<!-- banner -->
								<ins class="adsbygoogle"
								     style="display:inline-block;width:728px;height:90px"
								     data-ad-client="ca-pub-4997600402648823"
								     data-ad-slot="1675608998"></ins>
								<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
								</script>
						      	</div>
						      	
						      	<h2>&nbsp;</h2>
						      	<div class="text-center">
									<span>Note: Sample Item No. to Search <b>S1</b></span>
								</div>
						      	<div class='row'>
						      		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
						      			<table class="table table-bordered table-hover" id="table_auto">
											<thead>
												<tr>
													<th width="2%"><input id="check_all" class="formcontrol" type="checkbox"/></th>
													<th width="15%">Item No</th>
													<th width="38%">Item Name</th>
													<th width="15%">Price</th>
													<th width="15%">Quantity</th>
													<th width="15%">Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><input class="case" type="checkbox"/></td>
													<td><input type="text" data-type="productCode" name="itemNo[]" id="itemNo_1" class="form-control autocomplete_txt" autocomplete="off"></td>
													<td><input type="text" data-type="productName" name="itemName[]" id="itemName_1" class="form-control autocomplete_txt" autocomplete="off"></td>
													<td><input type="number" name="price[]" id="price_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
													<td><input type="number" name="quantity[]" id="quantity_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
													<td><input type="number" name="total[]" id="total_1" class="form-control totalLinePrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
												</tr>
											</tbody>
										</table>
						      		</div>
						      	</div>
						      	
						      	<div class='row'>
						      		<div class='col-xs-12 col-sm-3 col-md-3 col-lg-3'>
						      			<button class="btn btn-danger delete" type="button">- Delete</button>
						      			<button class="btn btn-success addmore" type="button">+ Add More</button>
						      		</div>
						      		<div class='col-xs-12 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-sm-5 col-md-5 col-lg-5'>
										<form class="form-inline">
											<div class="form-group">
												<label>Subtotal: &nbsp;</label>
												<div class="input-group">
													<div class="input-group-addon">$</div>
													<input type="number" class="form-control" id="subTotal" placeholder="Subtotal" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
												</div>
											</div>
											<div class="form-group">
												<label>Tax: &nbsp;</label>
												<div class="input-group">
													<div class="input-group-addon">$</div>
													<input type="number" class="form-control" id="tax" placeholder="Tax" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
												</div>
											</div>
											<div class="form-group">
												<label>Tax Amount: &nbsp;</label>
												<div class="input-group">
													<input type="number" class="form-control" id="taxAmount" placeholder="Tax" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
													<div class="input-group-addon">%</div>
												</div>
											</div>
											<div class="form-group">
												<label>Total: &nbsp;</label>
												<div class="input-group">
													<div class="input-group-addon">$</div>
													<input type="number" class="form-control" id="totalAftertax" placeholder="Total" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
												</div>
											</div>
											<div class="form-group">
												<label>Amount Paid: &nbsp;</label>
												<div class="input-group">
													<div class="input-group-addon">$</div>
													<input type="number" class="form-control" id="amountPaid" placeholder="Amount Paid" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
												</div>
											</div>
											<div class="form-group">
												<label>Amount Due: &nbsp;</label>
												<div class="input-group">
													<div class="input-group-addon">$</div>
													<input type="number" class="form-control amountDue" id="amountDue" placeholder="Amount Due" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
												</div>
											</div>
										</form>
									</div>
						      	</div>
						      	
						      	<h2>Notes: </h2>
						      	<div class='row'>
						      		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
						      			<div class="form-group">
											<textarea class="form-control" rows='5' id="notes" placeholder="Your Notes"></textarea>
										</div>
						      		</div>
						      	</div>
							
								<!-- End Here -->
							
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	
	
	<script src="members_cssjs/js/jquery.min.js"></script>
    <script src="members_cssjs/js/jquery-ui.min.js"></script>
    <script src="members_cssjs/js/bootstrap.min.js"></script>
    <script src="members_cssjs/js/bootstrap-datepicker.js"></script>
    
	<script src="members_cssjs/js/jquery.dataTables.min.js"></script>
	<script src="members_cssjs/js/dataTables.bootstrap.min.js"></script>
	<script src="members_cssjs/js/script.js"></script>
	<?php include("includes/footer.php") ?>

</body>

</html>