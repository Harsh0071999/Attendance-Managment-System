<?php 
      session_start();

if (!isset($_SESSION['id']))
{
    //if the value was not set, you redirect the user to your login page
    header('Location: index.html');
    exit;
}
else
{
   //if the user did login, then you load the page normally
}

$id = (isset($_GET['id']) ? $_GET['id'] : '');

 require_once ('connection.php');  
   $id = $_SESSION['id'];
 $sql = "SELECT * from `masterdata` WHERE id=$id";
 $result = mysqli_query($con,$sql);
 if($result){
  while($res = mysqli_fetch_assoc($result)){
      $name = $res['name'];
    $pic = $res['pic'];
    }
}
$encrypt= "do not copy";
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ganpat University Attendance Portal</title>
    <link rel="shortcut icon" type="images/png" href="assets/images/Small_Logo.png"/>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/ICT.jpg" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

          <a class="navbar-brand brand-logo" href="student_home.php?id=<?php echo $encrypt?>"><h3 style="color: white;">
               <span style="color: red;">G</span>anpat University</h3>
          <a class="navbar-brand brand-logo-mini" href="index.php?id=<?php echo $encrypt?>">
               <h2 style="color: red; background-color: white;">G</h2>
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
              <!--<div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
              </div>-->
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item  dropdown d-none d-md-block">
             
        
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../pic/<?php echo $pic;?>" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $name;?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="../pic/<?php echo $pic;?>" alt="">
                </div>
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                  
                   <?php 
    if(isset($_SESSION["id"])) 
    {?>
    
      <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="student_home.php"></a>
      <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="logout.php">
        <span>Log Out</span>
           <i class="mdi mdi-logout ml-1"></i>
      </a>
    <?php
    }
        if(isset($_SESSION["id"])==null)
    {?>
    
        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="index.html">Logout</a>
    <?php
    }?>
                  </a>
                  
                </div>
              </div>
            </li>
           
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="student_home.php?id=<?php echo $encrypt?>">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student_check_attendance.php?id=<?php echo $encrypt?>">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Check Attendance</span>
              </a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student_subject.php?id=<?php echo $encrypt?>">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Subject</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student_edit_profile.php?id=<?php echo $encrypt?>">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Edit Profile</span>
              </a>
            </li>
          </ul>
        </nav>