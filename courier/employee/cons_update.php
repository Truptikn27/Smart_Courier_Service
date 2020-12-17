
<?php
include('header.php');
include('sidebar.php');

include('../connection.php');	


?>

<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1">Update Consignment </h3>
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
							<label for="focusedinput" class="col-sm-2 control-label">Enter State of Courier :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="state" placeholder="Enter state" required="" >
							</div>
						</div>
						</form>
				</div>
			</div>
			<!--body wrapper start-->
		</div>
		<!--body wrapper end-->
	</div>


	<?php 
	include('footer.php');

	if(isset($_REQUEST['Emplyee']))
	{
			$state=$_REQUEST['state'];
			$sql="update consignment set status='state' where ccn='";

		$res=mysqli_query($conn,$sql);

		if($res)
		{
			echo"<script>alert('Add emplyee  sucessfully');window.location='add_emplyee.php'</script>";
		}
		else
		{
			echo"<script>alert('emplyee insert error');window.location='add_emplyee.php'</script>";

		}

	}
	?>


