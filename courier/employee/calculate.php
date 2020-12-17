<?php
include('header.php');
include('sidebar.php');

include('../connection.php');	
?>


<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Billing form </h3>
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
					<label for="focusedinput" class="col-sm-2 control-label">CNN:</label>
						<div class="col-sm-8">
								<select class="form-control" id="sel1" name="cnn" >
							<option>select</option>
								<?php
								$sql="Select * from consignment";
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
					<label for="focusedinput" class="col-sm-2 control-label">Enter the Weight:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="weight" placeholder="Weight">
						</div>
				</div>

				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label"></label>
						<div class="col-sm-8">
							<button type="submit" class="btn btn-success" value="send">Calculte Money</button>
							<a href=""><button type="button" class="btn btn-danger">Cancel</button></a>
						</div>
				</div>
			
				</form>
			</div>
		</div>
	</div>
</div>