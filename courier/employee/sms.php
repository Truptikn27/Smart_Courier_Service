<?php
include('header.php');
include('sidebar.php');
?>


<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Send Message to Customer </h3>
		<div class="col-sm-12">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Number</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="num" placeholder="Enter your number">
						</div>
				</div>

				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Message:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="mess" placeholder="Enter your message">
						</div>
				</div>

				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label"></label>
						<div class="col-sm-8">
							<button type="Submit" class="btn btn-success" name="abc" value="send">Submit</button>
							<a href=""><button type="button" class="btn btn-danger">Cancel</button></a>
						</div>
				</div>
			
				</form>
			</div>
		</div>
	</div>
</div>


<!doctype html>
<?php if(isset($_POST['abc'])){ 
// Authorisation details. 
$username = "trupti.k.n.27@gmail.com"; 
$hash = "bc645098f82b2dc1ea4d3f20c134a70f1e98cad86b2f1d8bed66a9b39583e11c"; 
// Config variables. Consult http://api.txtlocal.com/docs for more info. 
$test = "0"; 
// Data for text message. This is the text message data. 
$sender = "TXTLCL"; // This is who the message appears to be from.
$numbers = $_POST['num']; // A single number or a comma-seperated list of numbers 
$message = $_POST['mess']; 
// 612 chars or less 
// A single number or a comma-seperated list of numbers 
$message = urlencode($message); 
$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test; 
$ch = curl_init('http://api.textlocal.in/send/?');
curl_setopt($ch, CURLOPT_POST, true); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$result = curl_exec($ch); // This is the result from the API 
curl_close($ch); 
echo($result); 
} 
?>



	
					