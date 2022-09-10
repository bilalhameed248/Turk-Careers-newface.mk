<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="<?php echo base_url();?>public/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>public/css/mdb.min.css">

  <!-- Carousel scripts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">

  <!-- Custom styles -->
  <style>
    .icon-color {
      background-color:#94536d !important;
    }
    body{
      background-color: #ecedf0;
    }
    
  </style>
</head>
<body>
  <!-- Start your project here-->
      <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><img src="<?php echo base_url().'/public/uploads/website/newfacelogo.png';?>"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
          <?php      
            if(!$this->session->has_userdata('logged_in'))
            {
            ?>
          <li class="nav-item active">
            
            <a class="nav-link" href="<?php echo base_url();?>home/login">
              <i class="fas fa-sign-in-alt"></i></i> Login
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>home/signup">
              <i class="fas fa-sign-out-alt"></i></i> Sign Up</a>
          </li>
          <?php }  ?>

          <?php if($this->session->has_userdata('logged_in')){ ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <?php echo $_SESSION['fname']." ".$_SESSION['lname'] ?> </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="<?php echo base_url();?>home/profile">My Profile</a>
              <a class="dropdown-item" href="<?php echo base_url();?>feed">News feed</a>
              <a class="dropdown-item" href="<?php echo base_url();?>home/logout">Log out</a>
            </div>
          </li>
          
        <?php  } ?>
        <li class="nav-item ">
            <a class="nav-link p-0 m-0" aria-current="page" href="<?php echo base_url();?>/home/esignin"><button type="button" class="btn btn-success btn-lg post-job-btn m-0 mr-2">POST A JOB</button></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link p-0 m-0" aria-current="page" href="<?php echo base_url();?>/home/view_all_academies"><button type="button" class="btn btn-primary btn-lg employers-btn m-0 mr-2">Education</button></a>
          </li>
        </ul>
      </div>
    </nav>