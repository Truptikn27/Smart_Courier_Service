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
              <p><span>Generate Bill Of Your consignment</span></p>
            </div>
            <div class="signin">
			<form action="" method="post">
                <div class="log-input">
                <!--  <div class="log-input-left">
                    <input type="text" class="user" name="consignment" placeholder="Enter your consigment number" required=""/><center> Eg:9314 </center>
                  </div>-->
				  
				  <div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">CCN :</label>
							<div class="col-sm-8">
								<select class="form-control" id="sel1" name="consignment" >
							<option>select</option>
								<?php
								$sql="Select * from consignment where status='still processing' ";
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
             
                <input type="submit" value="Generate Bill" name="s1">
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
       $res=mysqli_query($conn,"SELECT * FROM `consignment` Where ccn=$consignment and status='still processing' ");
    }
     
    $ros=mysqli_fetch_array($res);
	$ccn=$ros['ccn'];
	$rl1=$ros['reciver_name'];
	$rl2= $ros['receiver_street'];
	$rl3=  $ros['receiver_city'];
	$rl4= $ros['receiver_district'];
	$rl5=$ros['reciver_phone'];
	$sl1=$ros['shippername'];
	$sl2=$ros['shipperasddress'];
	$sl3= $ros['phone'];
	$matdetails=$ros['material_descrption'];
	$amt1=$ros['total_weight'];
	$no=$ros['no_of_item'];
	$mde=$ros['mode'];
 ?>
 
 <html>
 
    <head>
    <title>Bill of a Courier</title>
        <style type="text/css">
        body {      
            font-family: Verdana;
        }
		div.invoice {
        border:1px solid #ccc;
        padding:10px;
        height:740pt;
        width:570pt;
        }
        div.sender-address {
            border:1px solid #ccc;
            float:left;
            width:200pt;
        }
          div.receiver-address  {
            border:1px solid #ccc;
            float:right;
            width:200pt;
        }        
        div.customer-address {
            border:1px solid #ccc;
            float:right;
            margin-bottom:50px;
            margin-top:100px;
            width:200pt;
        }
         
        div.clear-fix {
            clear:both;
            float:none;
        }        
        table {
            width:100%;
        }         
        th {
            text-align: left;
        }         
        td {}
        .text-left {
            text-align:left;
        }         
        .text-center {
            text-align:center;
        }         
        .text-right {
            text-align:right;
        }
         
        </style>
    </head>
 
   <body style='background-color:pink'>
	<center>
    <div class="invoice">
        <div class="company-address" align='center'>
         <h2 ><font color="green">  Smart Courier. Ltd   Banglore </font></h2>
            <br />
        </div>
     <br><br>
        <div class="receiver-address " align='left'>Reciver: <br /><center>
            <?php echo $rl1?>
            <br />  <?php echo $rl2?>
          <br />  <?php echo $rl3?>
		   <br />  <?php echo $rl4?>
		    <br />  <?php echo $rl5?></center>
        </div>
         
        <div class="sender-address" align='left'>
           Sender:
            <br /><center><?php echo $sl1?>
            <br />
            <?php echo $sl2?><br />
            <?php echo $sl3?> <br /></center>
        </div>
          
        <div class="clear-fix"></div>
            <table border='1' cellspacing='0'>  <div  align='left'>
			<?php
				echo("<br><br>");
                echo("<h4>Your Consignment Number is : $ccn</h4>");
			?></div>
                <tr>
                    <th width=150 height=20>Description</th>
                    <th width=80 height=20>No of Items</th>
                    <th width=80 height=20>Total Weight</th>
                    <th width=100 height=20>Unit price</th>
                    <th width=100height=20>Total price</th>
                </tr>
				
				
				
				 <?php
					$total = 0;
					$vat1 = 250;
					$vat2 = 100;
				    $unit_price = number_format( 0.50, 2);
					$amount=  $amt1 * $unit_price;
                    $total_price = $amount * $no;
					if($mde=='Fast'){
						$total = $total_price+$vat1;
						$val=$vat1;
					}
					else{
						$total =$total_price+$vat2;
						$val=$vat2;
					}
					  echo("<br><br>");
                    echo("<tr>");
                    echo("<td width=150 height=20>$matdetails</td>");
                    echo("<td class='text-center'width=80 height=20>$no</td>");
				    echo("<td class='text-center'width=80 height=20>$amt1 g</td>");
                    echo("<td class='text-right' width=100 height=20>Rs.$unit_price</td>");
                    echo("<td class='text-right' width=100 height=20>Rs.$total_price</td>");
                    echo("</tr>");
				
				    echo("<br>");
					echo("<tr>");
					echo("<td colspan='4' class='text-right'><b>Shipping charges</b></td>");
					echo("<td class='text-right'><b>Rs." .$val . "</b></td>");
					echo("</tr>");
					echo("<br>");
					echo("<tr>");
					echo("<td colspan='4' class='text-right'><b>TOTAL</b></td>");
					echo("<td class='text-right'><b>Rs." .$total . "</b></td>");
					echo("</tr>");
					echo("<br><br><br><br>");
            ?>
			
            </table><br/><br/><br/><br/>
			<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<a href="home.php"><button type="button" class="btn btn-danger">Cancel</button></a>							
							</div>
						</div>
        </div>
	</center>
   </body>
   	</html>
				
 <?php if($ros)
  {
   // session_start();
 	  echo"<script>alert('Bill found');</script>";
  }
  else {
    echo"<script>alert('Bill for this consignment number not found');window.location='generate.php';</script>";
  }
  }
  ?>
<?php
include('footer.php');
?>