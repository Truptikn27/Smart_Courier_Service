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
<!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="fm.php"><h5>Home</h5></a></li>
		  <li><a href="#team"><h5>User</h5></a>
            <ul>
              <li><a href="user/index.php">Login</a></li>
              <li><a href="#" data-toggle="modal" data-target="#myModal">Registration</a></li>
            </ul>
		  <li><a href="contact.php"><h5>Contact Us</h5></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="margin-right: 66%;"> Corporate Registration</h4>
          </div>
          <div class="modal-body">
           <form action="" method="post">
            <div class="form-group">
            <label for="email">User Id:</label>
              <input type="text" class="form-control" name="username" id="uname" required="">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="upswd" name="password">
            </div>
             <div class="form-group">
              <label for="pwd">Phone Number:</label>
              <input type="text" class="form-control" id="uph_no" name="phoneno">
            </div>
             <div class="form-group">
              <label for="pwd">Address:</label>
              <input type="text" class="form-control" id="pwd" name="address">
            </div>
             <div class="form-group">
              <label for="pwd">Email:</label>
              <input type="text" class="form-control" id="pwd" name="email">
            </div>
            <button type="submit" class="btn btn-default" name="Corporate_register">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <?php

if(isset($_REQUEST['Corporate_register']))
{

  $user_name=$_REQUEST['username'];
  $password=$_REQUEST['password'];
  $phoneno=$_REQUEST['phoneno'];
  $address=$_REQUEST['address'];
  $email=$_REQUEST['email'];

    $sql=mysqli_query($conn,"INSERT INTO `user` (`uname`, `upswd`, `uph_no`, `uaddress`, `u_email`) VALUES ('$user_name', '$password', '$phoneno`', '$address', '$email')");

    if($sql)
    {
      echo "<script>alert('you have been registerd successfully...');</script>";
    }
    else
    {
      echo "<script>alert('error');</script>";
    }
}

  ?>