<?php
include('header.php');
include('sidebar.php');
include('../connection.php');	
?>

<!DOCTYPE HTML>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <!-- Graph CSS -->
  <link href="css/font-awesome.css" rel="stylesheet"> 
  <!-- jQuery -->
  <!-- lined-icons -->
  <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <!-- //lined-icons -->
  <!-- chart -->
  <script src="js/Chart.js"></script>
  <!-- //chart -->
  <!--animate-->
  <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!--//end-animate-->
    <!----webfonts--->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <!---//webfonts---> 
    <!-- Meters graphs -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!-- Placed js at the end of the document so the pages load faster -->

  </head> 
  
  <body class="sign-in-up">
    <section>
      <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
		<h3 class="blank1">Update Consignment </h3>
		<div class="col-sm-12">
			</div>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<!--<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Enter CCN once again :</label>
							<div class="col-sm-8">
								 <input type="text" class="user" name="consignment" placeholder="Enter your consigment number" required=""/><center></center>
					</div>
						</div>-->
						
						
						  <div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label" >CCN :</label>
							<div class="col-sm-8">
								<select class="form-control" id="sel1" name="consignment" >
							<option>select</option>
								<?php
								$sql="Select * from consignment where status!='deliverd'";
								$res=mysqli_query($conn,$sql);
								
								while($ros=mysqli_fetch_array($res))
								{
									?>
									<option value="<?php echo $ros['ccn'];?>"><?php echo $ros['ccn'];?></option>
									<?php
								}
									?>
								</select>
							</div>
						</div>
												
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Enter State of Courier :</label>
							<div class="col-sm-8">
							 <select class="form-control" id="sel1" name="state">
									<option value="Not Confirmed">Select</option>
   									 <option value="still processing">still processing</option>
									 <option value="deliverd">deliverd</option>
							</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<button type="Submit" class="btn btn-success" name="Emplyee">Submit</button>
								<a href="home.php"><button type="button" class="btn btn-danger">Cancel</button></a>
								
							</div>
						</div>
						</form>
				</div>
			</div>
			<!--body wrapper start-->
		</div>
		<!--body wrapper end-->
	</div>
	 <!--footer section start-->
      <footer>
        <p>&copy 2017 Employee Panel. All Rights Reserved | Design by <a href="#" target="_blank">Employee panel</a></p>
      </footer>
      <!--footer section end-->
    </section>

    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
	
<?php 
	include('footer.php');
  include('../connection.php');
	if(isset($_REQUEST['consignment']))
	{
			$state=$_REQUEST['state'];
			$consignment=$_REQUEST['consignment'];
			$sql="UPDATE `consignment` SET `status`='$state' WHERE `ccn`='$consignment'";
			
		$res2=mysqli_query($conn,$sql);

		if($res2)
		{
			echo"<script>alert('Updated sucessfully');</script>";
		}
		else
		{
			echo"<script>alert('Update unsucessfull');window.location='update.php'</script>";

		}

	}
	?>
	