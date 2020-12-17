<?php
include('header.php');
include('sidebar.php');
?>


<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Send Mail to Customer </h3>
		<div class="col-sm-12">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-8">
							<input type="email" class="form-control1" id="email" name="email" maxlenght="50">
						</div>
				</div>

				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Subject:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="subject" id="subject" maxlenght="50">
						</div>
				</div>

				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Message:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="message" id="message" maxlenght="6000" rows="5">
						</div>
				</div>

				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label"></label>
						<div class="col-sm-8">
							<button type="Submit" class="btn btn-success" name="sendmail" value="send">Submit</button>
							<a href=""><button type="button" class="btn btn-danger">Cancel</button></a>
						</div>
				</div>
			
				</form>
			</div>
		</div>
	</div>
</div>


<?php

	if(isset($_POST['sendmail'])){
		if(mail($_POST['email'],$_POST['subject'],$_POST['message']))
		{
			echo 'Mail Sent';
		}
		else
		{
			echo 'Failed';
		}
	}
?>



		

	
