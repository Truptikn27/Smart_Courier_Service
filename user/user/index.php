
<!DOCTYPE HTML>
<html>
<head>
  <title>User SignIN</title>
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
              <p><span>Sign In to</span> <a href="index.html">User</a></p>
            </div>
            <div class="signin">
              
              <form action="" method="post">
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="text" class="user" name="username" placeholder="Enter your username" required=""/>
                  </div>
                  <span class="checkbox2">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                  </span>
                  <div class="clearfix"> </div>
                </div>
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="password" class="lock" name="password" placeholder="Enter your password"/>
                  </div>
                  <span class="checkbox2">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                  </span>
                  <div class="clearfix"> </div>
                </div>
          
               
                
                <input type="submit" value="Login to your account" name="s1">
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
      $username=$_REQUEST['username'];
      $password=$_REQUEST['password'];

     echo $login_type="user";
    
    if($login_type==='user')
    {
       $res=mysqli_query($conn,"SELECT * FROM `user` WHere uname='$username' And upswd='$password'");
    }
     
    $ros=mysqli_fetch_array($res);

  // /print_r($ros);

  if($ros)
  {
    session_start();
    
    $_SESSION['user']=$login_type;

    echo"<script>alert('login sucess');window.location='home.php'</script>";
  }
  else {
    echo"<script>alert('login error');window.location='index.php';</script>";
  }
  }
  ?>