<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job Portal</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
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


    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<div class="container-fluid">
    <div class="signup mx-auto bg-white mt-5 z-depth-1-half" >
        <!-- Default form login -->
        <?php
        if($this->session->flashdata('message_detail'))
        {
            ?>
            <div class="alert alert-danger" style="background-color: red; color: white;">
                <p><?php echo $this->session->flashdata('message_detail'); ?></p>
            </div>
        <?php }?>



        <form class="text-center border border-light p-5" method="POST" action="<?php echo base_url();?>home/forgetpass">

            <p class="h4 mb-4">Password reset</p>

            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" required>

            <!-- Password -->




            <!-- Sign in button -->
            <button class="btn btn-block my-4 btn-signin text-white rounded-pill" type="submit" name="submit">Sign in</button>
            <h6>or</h6>
            <p>Sign in With Academy Owner?<a href="<?php echo base_url();?>home/acc_owner_login">Sign In</a></p>
            <hr>
            <!-- Social login -->
            <p>or sign in with:</p>

            <a href="<?php echo base_url();?>social_login/fblogin" class="mx-2" role="button"><i class="fa fa-facebook-f"></i></a>
            <a href="<?php echo base_url();?>social_login/login" class="mx-2" role="button"><i class="fa fa-google" ></i></a>
            <a href="<?php echo base_url();?>social_login/linkedin_login" class="mx-2" role="button"><i class="fa fa-linkedin"></i></a>

        </form>
        <!-- Default form login -->
    </div>

</div>
<footer class="p-3 mdb-color darken-4 mt-5">
    <div class="text-center">
        <p class="footer-line text-white">Copyright © 2021 Rozee - Jobs in Pakistan - All Rights Reserved - A Division of Naseeb Networks, Inc.</p>
    </div>
</footer>



<!-- jQuery -->
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo base_url();?>public/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo base_url();?>public/js/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<!-- Your custom scripts (optional) -->
<script src="<?php echo base_url();?>public/js/theme.js"></script>

</body>
</html>
