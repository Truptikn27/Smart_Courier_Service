<?php 

include('header.php');
include('sidebar.php');
include('../connection.php');

?>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>


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
			   <th>Delivery Mode</th>
              <th>Reciver Name</th>
              <th> Reciver Phone </th>
              <th>Status</th>
              <th>Reciver Address</th>
              <th>Reciver phone</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from consignment";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>
			 <td><?php echo $ros['ccn'];?></td>
            <td><?php echo $ros['shippername'];?></td>
            <td><?php echo $ros['shipperasddress'];?></td>
            <td><?php echo $ros['phone'];?></td>
            <td><?php echo $ros['material_descrption'];?></td>
            <td><?php echo $ros['no_of_item'];?></td>
            <td><?php echo $ros['branch_id'];?></td>
             <td><?php echo $ros['total_weight'];?></td>
			  <td><?php echo $ros['mode'];?></td>
            <td><?php echo $ros['reciver_name'];?></td>
            <td><?php echo $ros['reciver_phone'];?></td>
            <td><?php echo $ros['status'];?></td>
            <td><?php echo $ros['receiver_street'];?>
			<?php echo $ros['receiver_city'];?>
			<?php echo $ros['receiver_district'];?>
			<?php echo $ros['receiver_state'];?></td>         
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