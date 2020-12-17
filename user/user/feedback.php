<?php
include('header.php');
include('sidebar.php');
include('../connection.php');	
?>

<?php
 include('connection.php');
 $url = 'E:\xampp\htdocs\cmms\img\pic1.jpg';
?> 

<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Feedback From <h4 class="blank1">Send your feedback please...</h4></h3>
		
		<div class="col-sm-12">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-2">
			</div>
		</div>
<!--  <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>-->
      <div class="container wow fadeInUp">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12">
            <div class="form">
             <!-- <div id="sendmessage">Your message has been sent. Thank you!</div>-->
              <div id="errormessage"></div>


<div class="tab-content">
	<div class="tab-pane active" id="horizontal-form">
		<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">User Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control1" name="name" id="name" placeholder="Your Name"  size="50">
					</div>
			</div>

			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">E-mail:</label>
					<div class="col-sm-8">
						<input type="email" class="form-control1" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" size="60">
					</div>
			</div>

			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Subject:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control1" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  size="50">
					</div>
			</div>

			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Message:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control1" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" size="500">
					</div>
			</div>

			
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label"></label>
					<div class="col-sm-8">
						<button type="submit" class="btn btn-success" name="sendmessage">Send Message</button>
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
if(isset($_REQUEST['sendmessage']))
{
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
$sql=mysqli_query($conn,"INSERT INTO `testimonial` (`id`, `name`, `email`, `subject`, `message`) VALUES (NULL, '$name', '$email', '$subject', '$message')");
if($sql)
{
	echo"<script>alert('Thank you for submit your Feedback');window.location='home.php'</script>";
}
}
?>




