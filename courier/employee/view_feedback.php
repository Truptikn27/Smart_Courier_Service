<?php 

include('header.php');
include('sidebar.php');
include('../connection.php');

?>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>


<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">Feedback Report</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-hover" id="example" class="display" width="100%" cellspacing="0">
          <thead>
            <tr>
              
            <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from testimonial";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>
			<!-- <td><?php echo $ros['id'];?></td> -->
             <td><?php echo $ros['id'];?></td>
            <td><?php echo $ros['name'];?></td>
            <td><?php echo $ros['email'];?></td>
            <td><?php echo $ros['subject'];?></td>
            <td><?php echo $ros['message'];?></td>        
          </tr>
          <?php
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
