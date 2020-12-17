 <?php
 include('connection.php');
 $url = 'E:\xampp\htdocs\cmms\img\pic1.jpg';
?>  
<!DOCTYPE HTML>
<html>
<body bgcolor="pink">
</body>
</html>
<section id="contact">
<center>
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Feedback</h3>
          <p class="section-description">Send your feedback please...</p>
        </div>
      </div>

  <!--  <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>-->
      <div class="container wow fadeInUp">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12">
            <div class="form">
             <!-- <div id="sendmessage">Your message has been sent. Thank you!</div>-->
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">User Name:  
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  size="50"></div><br>
                </div>
                <div class="form-group">Email:   
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"  size="60"/>
					<div class="validation"></div><br>
                </div>
                <div class="form-group">Subject:  
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  size="50"/>
                  <div class="validation"></div><br>
                </div>
                <div class="form-group">Content:  
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" size="500"></textarea>
                  <div class="validation"></div><br>
                </div>
                <div class="text-center"><button type="submit" name="sendmessage">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->
	<center>
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
	echo"<script>alert('Thank you for submit your Feedback');window.location='index.php'</script>";
}
}
?>