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
  ?>
  <div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">View Consignment</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-hover" id="example" class="display" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>Ccn</th>
              <th>Sender Name</th>
              <th>Sender Address</th>
              <th>Sender Phone</th>
              <th>Material</th>
              <th>No_of_item</th>
              <th>Branch</th>
              <th>Total_weight</th>
              <th>Reciver Name</th>
              <th> Reciver Phone </th>
              <th>Status</th>
              <th>Reciver Address</th>
            </tr>
          </thead>
          <tbody>
 <tr>
			  <td><?php echo $ros['ccn'];?></td>
            <td><?php echo $ros['shippername'];?></td>
            <td><?php echo $ros['shipperasddress'];?></td>
            <td><?php echo $ros['phone'];?></td>
            <td><?php echo $ros['material_descrption'];?></td>
            <td><?php echo $ros['no_of_item'];?></td>
            <td><?php echo $ros['branch_id'];?></td>
             <td><?php echo $ros['total_weight'];?></td>
            <td><?php echo $ros['reciver_name'];?></td>
            <td><?php echo $ros['reciver_phone'];?></td>
            <td><?php echo $ros['status'];?></td>
            <td><?php echo $ros['receiver_street'];?>
			<?php echo $ros['receiver_city'];?>
			<?php echo $ros['receiver_district'];?>
			<?php echo $ros['receiver_state'];?></td>         
          </tr>

   <?php
  if($ros)
  {
    session_start();
 	  echo"<script>alert('track success');</script>";
		$id=4;
  }
  else {
    echo"<script>alert('track error consignment number not found');window.location='track.php';</script>";
  }
  }
  ?>
    </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
 <?php
    include('footer.php');
	?>