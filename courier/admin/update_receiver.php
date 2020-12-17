
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
          <div class="sign-in-form">
            <div class="sign-in-form-top">
              <p><span>Track your</span> <a href="index.html">consignment</a></p>
            </div>
            <div class="signin">
			<form action="" method="post">
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="text" class="user" name="consignment" placeholder="Enter your consigment number" required=""/><center> Eg:9134</center>
                  </div>
                  
                  <div class="clearfix"> </div>
                </div>
             
                <input type="submit" value="TRACK" name="s1">
              </form>	
            </div>
          </div>
        </div>
      </div>
      <!--footer section start-->
      <footer>
        <p>&copy 2017 User Panel. All Rights Reserved | Design by <a href="#" target="_blank">Userpanel</a></p>
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
  if(!$ros)
  {    echo"<script>alert('track error consignment number not found');window.location='track.php';</script>";
  }else{
	  session_start();
  }
  }?>
  
  <div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Add new  Consignment  Receiver Details </h3>
		<div class="col-sm-12">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label">Reciver name :</label>
			<div class="col-sm-8">
			<input type="text" class="form-control1" name="val1" placeholder="Enter Reciver name" required="" id="dearname">
			</div>
			</div><br>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Reciver Address : <br>Street:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="val2" placeholder="Enter Reciver street" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">City:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="val3" placeholder="Enter Reciver City" required="">
							</div>
						</div>
					<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">District:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="val4" placeholder="Enter Reciver District" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">State:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="val5" placeholder="Enter Reciver S" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Reciver Phone no :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="val6" placeholder="Enter Reciver Phone no" required="" >
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
			
<?php 
	include('footer.php');
	if(isset($_REQUEST['Consignment']))
	{
$val1=$_REQUEST['reciver_name'];
$val2=$_REQUEST['rstreet'];
$val3=$_REQUEST['rcity'];
$val4=$_REQUEST['rdistrict'];
$val5=$_REQUEST['rstate'];
$$val6=$_REQUEST['Reciver_phone_no'];
		
		$sql="UPDATE `consignment` SET reciver_name = $val1 , reciver_phone=$val2 , receiver_street=$val3 ,  receiver_city=$val4 , receiver_district=$val5 , receiver_state=$val6 WHERE ccn=$consignment";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			echo"<script>alert('your consignment updated sucessfully');</script>";
		}
		else
		{
			echo"<script>alert('consignment update  error');window.location='track.php'</script>";
		}
	}
	?>
    </tbody>
        </table>
      </div>
    </div>
  </div>
</div>