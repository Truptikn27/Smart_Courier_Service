<?php 

include('header.php');
include('sidebar.php');
include('../connection.php');

?>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {

        $('#example').DataTable();
    });
</script>
<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">Verification of Consignment</h3>
 <div id="page-wrapper" >
        <div class="graphs">
        	<form action="" method="post">
                <div class="log-input">
               
				  <div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">CCN :</label>
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
                  <div class="clearfix"> </div>
                </div>
             
                <input type="submit" value="Submit" name="s1">
              </form>	
          </div>
      </div>
	  
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	  <?php
  if(isset($_REQUEST['s1']))
  {
    include('../connection.php');
      $consignment=$_REQUEST['consignment'];
      $login_type="user";
    
    if($login_type==='user')
    {
       $res=mysqli_query($conn,"SELECT * FROM `consignment` Where ccn=$consignment ");
    }
     
    $ros=mysqli_fetch_array($res);
	$ccn=$ros['ccn'];
	$rl1=$ros['reciver_name'];
	$rl2= $ros['receiver_street'];
	$rl3=  $ros['receiver_city'];
	$rl4= $ros['receiver_district'];
	$rl5=$ros['reciver_phone'];
	$matdetails=$ros['material_descrption'];
	$amt1=$ros['total_weight'];
	$no=$ros['no_of_item'];
	$mde=$ros['mode'];
 ?>
 			
 <div id="page-wrapper">
  <div class="graphs">
 	<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label">Reciver Name :</label><?php echo $rl1?>
	</div>
    <div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label">Reciver Address :</label><?php echo $rl2 ?>,<?php echo $rl3 ?>(Taluk)<?php echo $rl4 ?>(District)
	</div>
	<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label">Reciver Phone :</label><?php echo $rl5 ?>
	</div>
	<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label">Courier Item :</label><?php echo $matdetails ?>
	</div>
	<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label">Transfer mode:</label><?php echo $mde ?>
	</div>
	<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label"> Weight Of Items :</label><?php echo $amt1?> Grams
	</div>
	<div class="form-group">Is thier any changes in weight (Do change):
		<a href="change1.php"><button type="button" class="btn btn-danger">Change</button></a>
		<a href="home.php"><button type="button" class="btn btn-danger">Cancel</button></a>
			</div>					
		</div>		
</div>
	
  <?php 
 if($ros)
 {
	  echo"<script>alert('consignment number  found');;</script>";

 }
 else{
    echo"<script>alert('Bill for this consignment number not found');window.location='update_c.php';</script>";
  }
  }
  ?> 
  
						

<?php

include('footer.php');
?>
