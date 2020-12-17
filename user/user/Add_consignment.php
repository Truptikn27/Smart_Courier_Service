<?php
include('header.php');
include('sidebar.php');

include('../connection.php');	
?>
 <?php
            $sql="Select ccn from `consignment`";
            $res=mysqli_query($conn,$sql);
            $max;
			$i=0;
            while($ros=mysqli_fetch_array($res))
            {
             ?>
			 <?php $rel[$i++] = $ros['ccn'];
			}
			?>
			<?php
			 $max=MAX($rel);
 ?>
<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Add Consignment  Details <h4 class="blank1">( Please note the CCN Number ... ) </h4></h3>
		
		<div class="col-sm-12">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				
				<!--<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">CCN:   </label>
						
						</div>-->
							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">CCN:</label>
							<div class="col-sm-8">
							<?php
								$max=MAX($rel);
								$max=$max+1;
								echo $max;
							?>
					<!--<input type="text" class="form-control1" name="ccn" placeholder="$ccn2" required="" id="dearname">-->
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Sender Name:</label>
							<div class="col-sm-8">
					<input type="text" class="form-control1" name="shippername" placeholder="Shipper Name" required="" id="dearname">
							</div>
						</div>

							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Sender Address :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="shipperaddress" placeholder="Enter shapping addrerss" required="" id="dearname">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Phone:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="Phone" placeholder="Enter phone" required="" id="dearname">
							</div>
						</div>
							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Material Descrition:</label>
							<div class="col-sm-8">
							 <select class="form-control" id="sel1" name="material_descrition">
									  <option value="">Select</option>
   									 <option value="document">document</option>
									 <option value="parcel">Parcel</option>
							</select>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">No of item</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="noofitem" placeholder="Enter no of item" required="" >
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Total weight</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="totalwight" placeholder="Enter Total Weight in KiloGrams" required="" id="dearname">
							</div>
						</div>					
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Delivery Mode:</label>
							<div class="col-sm-8">
							 <select class="form-control" id="delm" name="delivery_mode">
									  <option value="">Select</option>
   									 <option value="Fast">Fast</option>
									 <option value="Medium">Medium</option>
							</select>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Branch:</label>
							<div class="col-sm-8">
								<select class="form-control" id="sel1" name="branch_name" >
							<option>select</option>
								<?php
								$sql="Select * from branch";
								$res=mysqli_query($conn,$sql);
								
								while($ros=mysqli_fetch_array($res))
								{
									?>
									<option value="<?php echo $ros['branch_name'];?>"><?php echo $ros['branch_name'];?></option>
									<?php
								}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Reciver name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="reciver_name" placeholder="Enter Reciver name" required="" id="dearname">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Reciver Address : <br>Street:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="rstreet" placeholder="Enter Reciver street" required="">
							</div>
						</div><div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">City:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="rcity" placeholder="Enter Reciver City" required="">
							</div>
						</div>
					<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">District:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="rdistrict" placeholder="Enter Reciver District" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">State:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="rstate" placeholder="Enter Reciver State" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Reciver Phone no :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="Reciver_phone_no" placeholder="Enter Reciver Phone no" required="" >
							</div>
						</div>



						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<button type="Submit" class="btn btn-success" name="Consignment">Submit</button>
								<a href=""><button type="button" class="btn btn-danger">Cancel</button></a>
								
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
								$branchname=$_REQUEST['branch_name'];
								$sql="Select branch_id from branch where branch_name='$branchname' ";
								$res=mysqli_query($conn,$sql);
								
								while($ros=mysqli_fetch_array($res))
								{
										$branchid=$ros['branch_id'];
								}
									?>
								
	<?php 
	include('footer.php');

	if(isset($_REQUEST['Consignment']))
	{

$shippername=$_REQUEST['shippername'];
$shipperaddress=$_REQUEST['shipperaddress'];
$Phone=$_REQUEST['Phone'];
$material_descrition=$_REQUEST['material_descrition'];
$noofitem=$_REQUEST['noofitem'];
$totalwight=$_REQUEST['totalwight'];
$deliverymode=$_REQUEST['delivery_mode'];

$reciver_name=$_REQUEST['reciver_name'];
$receiver_street=$_REQUEST['rstreet'];
$receiver_city=$_REQUEST['rcity'];
$receiver_district=$_REQUEST['rdistrict'];
$receiver_state=$_REQUEST['rstate'];
$receiver_phno=$_REQUEST['Reciver_phone_no'];
$status="Not Confirmed";

		$sql="INSERT INTO `consignment` (`ccn` , `shippername` , `shipperasddress` , `phone` , `material_descrption` , `no_of_item` , `branch_id` , `total_weight`, `mode` , `reciver_name` , `reciver_phone` , `status`, `receiver_street` , `receiver_city` , `receiver_district` , `receiver_state` )VALUES (NULL , '$shippername' , '$shipperaddress' , '$Phone' , '$material_descrition' , '$noofitem' , '$branchid' , '$totalwight' , '$deliverymode' , '$reciver_name', '$receiver_phno' , '$status' , '$receiver_street' , '$receiver_city' , '$receiver_district' , '$receiver_state'  )";
		$res=mysqli_query($conn,$sql);
		if($res )
		{
			 echo "<script>alert('your consignment sucessfully ');window.location='new1.php'</script> " ;
		}
		else
		{
			echo"<script>alert('consignment insert error');window.location='add_consignment.php'</script>";

		}

	}
	?>


 <?php
    include('footer.php');
	?>
