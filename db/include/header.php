<!DOCTYPE html>
<html lang="en">
<head>
    <?php
  session_start();
  if (!isset($_SESSION['user'])){
    header('location:login.php');
}
else{
include './controller/User.php';
$rec= new user();
$sess=$_SESSION['user'];
$query = $rec->details($sess);
//print_r($row);
while ($row = $query->fetch_array()) {
  ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc.-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> CRWA Entertainment Awards Voting Portal  </title>
  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
<!--   Custom Theme Style  -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="index2.html" class="site_title"><i class="fa fa-paw"></i> <span>CRWA Entertainment Awards Voting Portal</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
          <div class="profile_pic">
            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
          </div>
          <div class="profile_info">
            <span>Welcome,</span>
            <h2>CRWA Admin</h2>
          </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <ul class="nav side-menu">
              <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard <span class="fa fa-chevron-right"></span> </a> </li>
              <li><a><i class="fa fa-edit"></i> Categories <span class="fa fa-chevron-right"></span></a>
                <ul class="nav child_menu">
                  <li><a href="fetchMusicians.php">Music <span class="fa fa-chevron-right"></span> </a></li>
                  <li><a href="fetchDance.php">Dance <span class="fa fa-chevron-right"></span> </a></li>
                  <li><a href="fetchFashion.php">Fashion <span class="fa fa-chevron-right"></span> </a></li>
                  <li><a href="fetchComedians.php">Comedy <span class="fa fa-chevron-right"></span> </a></li>
                  <li><a href="fetchMedia.php">Media <span class="fa fa-chevron-right"></span> </a></li>
                </ul>
              </li>
              <li><a href="widgets.php"><i class="fa fa-user"></i> Artists <span class="fa fa-chevron-right"></span> </a> </li>
              <li><a href="tables_dynamic.php"><i class="fa fa-thumbs-o-up"></i> Votes <span class="fa fa-chevron-right"></span></a> </li>
            </ul>
          </div>
        </div>
        <!-- /sidebar menu -->
        <!-- /menu footer buttons-->
        <div class="sidebar-footer hidden-small">
          <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
          </a>
        </div>
        <!-- /menu footer buttons -->
      </div>
    </div>
    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <div class="center">
              <h1 class="center"> CRWA Entertainment Awards Voting Portal</h1>
            </div>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="images/img.jpg" alt=""><?php echo $row['firstname']." ".$row['lastname'];?>
                <span class=" fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="javascript:;"> Profile</a></li>
                <li>
                  <a href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                  </a>
                </li>
                <li><a href="javascript:;">Help</a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div> 
    <?php
}}
    ?><!-- /top navigation -->