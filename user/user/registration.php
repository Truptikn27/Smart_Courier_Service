<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Courier Service System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

 <center>
  <header id="header">
    <div class="container">
		  <form action="" method="post">
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="text" class="user" name="uname" placeholder="Enter your username" required=""/>
                  </div>
                  <span class="checkbox2">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                  </span>
                  <div class="clearfix"> </div>
                </div>
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="password" class="lock" name="upswd" placeholder="Enter your password"/>
                  </div>
                  <span class="checkbox2">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                  </span>
                  <div class="clearfix"> </div>
                </div>
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="phone_no" class="lock" name="uph_no" placeholder="Enter your phone number"/>
                  </div>
                  <span class="checkbox2">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                  </span>
                  <div class="clearfix"> </div>
                </div>
                 <div class="log-input">
                  <div class="log-input-left">
                    <input type="address" class="lock" name="uaddress" placeholder="Enter your address"/>
                  </div>
                  <span class="checkbox2">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                  </span>
                  <div class="clearfix"> </div>
                </div>
				<div class="log-input">
                  <div class="log-input-left">
                    <input type="email" class="lock" name="u_email" placeholder="Enter your Email"/>
                  </div>
                  <span class="checkbox2">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                  </span>
                  <div class="clearfix"> </div>
                </div>

                
                <input type="submit" value="Login to your account" name="s1">
              </form>	
              <!--  -->
            </div>
     
	 
	 
	 
    </div>
  </header><!-- #header -->
<center>
</body>
</html>