
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
              <p><span>Update</span> <a href="index.html">consignment</a></p>
            </div>
            <div class="signin">
			<form action="" method="post">
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="text" class="user" name="consignment" placeholder="Enter your consigment number" required=""/><center> Eg:9134</center>
                  </div>
                  
                  <div class="clearfix"> </div>
                </div>
             
                <input type="submit" value="Find" name="s1">
              </form>	
            </div>
          </div>
        </div>
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
  if($ros)
  {
    session_start();
 	  echo"<script>alert('consignment found');window.location='update_c.php';</script>";
		$id=4;
  }
  if($id!=4){
    echo"<script>alert('track error consignment number not found');window.location='update.php';</script>";
  }
  }
  ?>
    </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</html>


 
  