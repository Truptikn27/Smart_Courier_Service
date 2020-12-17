 
<body class="sticky-header left-side-collapsed"  onload="initMap()">
  <section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">
      <!--logo and iconic logo start-->
      <div class="logo">
        <h1><a href="home.php"><span>Admin</span></a></h1>
      </div>
      <div class="logo-icon text-center">
        <a href="home.php"><i class="lnr lnr-home"></i> </a>
      </div>
      <!--logo and iconic logo end-->
      <div class="left-side-inner">
        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
          <li class="active"><a href="home.php"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
          <?php 
            if($_SESSION['user']=='admin')
            {
              ?>
	<li class="menu-list">
            <a href="#"><i class="lnr lnr-cog"></i>
              <span>Branch</span></a>
            <ul class="sub-menu-list">
              <li><a href="add_branchrequest.php">Add branch</a> </li>
              <li><a href="view_branchrequest.php">View branch</a></li>
            </ul>
          </li>  

         <li class="menu-list">
            <a href="#"><i class="lnr lnr-cog"></i>
              <span>Employee</span></a>
            <ul class="sub-menu-list">
              <li><a href="add_emplyee.php">Add Empleyee</a> </li>
              <li><a href="view_emplyee.php">View Empleyee</a> </li> 
            </ul>
          </li>     
         <li class="menu-list">
            <a href="#"><i class="lnr lnr-cog"></i>
              <span>Consignment Report</span></a>
            <ul class="sub-menu-list">
            
            <li><a href="view_consignment.php">View Consignment</a> </li>
            </ul>
          </li>
          
	<li class="menu-list">
            <a href="#"><i class="lnr lnr-cog"></i>
              <span>Feedback Report</span></a>
            <ul class="sub-menu-list">
            
            <li><a href="view_feedback.php">View Report</a> </li>
            </ul>
          </li>

          <?php
          
        }
      
        ?>

  }
        </ul>
        <!--sidebar nav end-->
      </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
<div class="main-content">
  <!-- header-starts -->
  <div class="header-section">

    <!--toggle button start-->
    <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
    <!--toggle button end-->

    <!--notification menu start -->
    <div class="menu-right">
      <div class="user-panel-top">  	
        <div class="profile_details_left">
          <ul class="nofitications-dropdown">
            <div class="clearfix"></div>	
          </ul>
        </div>
        <div class="profile_details">		
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img">	
                  <!-- <span style="background:url(images/1.jpg) no-repeat center"> </span>  -->
                  <div class="user-name">
                    <p>Admin<span>Administrator</span></p>
                  </div>
                  <i class="lnr lnr-chevron-down"></i>
                  <i class="lnr lnr-chevron-up"></i>
                  <div class="clearfix"></div>	
                </div>	
              </a>
              <ul class="dropdown-menu drp-mnu">
<!--                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> -->
                <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
              </ul>
            </li>
            <div class="clearfix"> </div>
          </ul>
        </div>		
<!--        <div class="social_icons">
          <div class="col-md-4 social_icons-left">
            <a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
          </div>
          <div class="col-md-4 social_icons-left pinterest">
            <a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
          </div>
          <div class="col-md-4 social_icons-left twi">
            <a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
          </div>
          <div class="clearfix"> </div>
        </div>            	-->
        <div class="clearfix"></div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
  <!-- //header-ends -->