<?php
 include("../connection/connect.php");
 ?>
<!doctype html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo9.jpg">
    <title>Boutique</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
         <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                         <b><img style="length:30px;width:30px;padding: 5px;" src="images/logo9.jpg" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><a href="dashboard.php"><img style="length:140px;width:140px" src="images/logo6.png" alt="homepage" class="dark-logo" /></a></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                       
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search 
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                         Comment -->
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                      
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                  <!--  <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>-->
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                   <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dashboard.php">Dashboard</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-label">Log</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Customers</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="allusers.php">All Customers</a></li>
                <li><a href="add_users.php">Add Customers</a></li>
                
                               
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Store</span></a>
                            <ul aria-expanded="false" class="collapse">
                <li><a href="allboutique.php">All Stores</a></li>
                <li><a href="add_category.php">Add Category</a></li>
                                <li><a href="add_restraunt.php">Add Stores</a></li>
                                
                            </ul>
                        </li>
                      <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-female" aria-hidden="true"></i><span class="hide-menu">Catalog</span></a>
                            <ul aria-expanded="false" class="collapse">
                <li><a href="all_menu.php">All Catalogue</a></li>
                <li><a href="add_menu.php">Add Catalogue</a></li>
                              
                                
                            </ul>
                        </li>
             <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu">Orders</span></a>
                            <ul aria-expanded="false" class="collapse">
                <li><a href="all_orders.php">All Orders</a></li>
                  
                            </ul>
                        </li>
                         
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
               
            </div>
                        


  <div class="panel panel-primary">
 <div class="panel-heading" style="background-color:#5c4ac7 ; height:55px; font-weight:bold; font-size:20px;color:white;padding: 9px;">feedbacks</div>
 <div class="panel-body">
     <table class="table table-bordered table-condensed  table-responsive">
       <tr style=" color:black" align="center">
        <td style=" color:black">id</td>
          <td style=" color:black">full_name</td>
         <td style=" color:black">phone_number</td>
          <td style=" color:black">email_address</td>
          
          <td style=" color:black">message</td>
          <td style=" color:black" colspan="2">Action</td>
          </tr>
 <?php

 $sql="select * from contact";
 $res=mysqli_query($db,$sql);

    while($row=mysqli_fetch_array($res))
    {
   ?>
       <tr> 
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['full_name'];?></td>
            <td><?php echo $row['phone_number'];?></td>
           <td><?php echo $row['email_address'];?></td> 
          
           <td><?php echo $row['message'];?></td>
           <td><a class="btn btn-danger" href="deletefeedbacks.php?id=<?php echo $row['id']?>" style="padding:10px;background-color:#ef5350; color:white;padding-top: 1px;padding-bottom: 7px;"onClick="return confirm('Are you sure want to delete?')"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
        
       </tr>
<?php
}
?>
     </table>
    </div>
</div>
</body>
</html>
