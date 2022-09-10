<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>


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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Carousel scripts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>


  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>public/css/my_custom_css.css">


  <!-- Font Awa -->

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
      <!-- Default form register -->
      
    <?php 
        if($this->session->flashdata('message_detail')) 
        {
        ?>
        <div class="alert alert-danger" style="background-color: red; color: white;">
          <p><?php echo $this->session->flashdata('message_detail'); ?></p>
        </div>
      <?php }?>
      <form class="text-center border border-light p-5" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>home/signup">

        <p class="h4 mb-4">Manual Signup</p>

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="fname" class="form-control" placeholder="First name" name="fname">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="lname" class="form-control" placeholder="Last name" name="lname">
            </div>
        </div>

        <!-- E-mail -->
        <input type="email" id="email" class="form-control mb-4" placeholder="E-mail" name="email">

        <!-- Re-E-mail -->
        <input type="email" id="again_email" class="form-control mb-4" placeholder="Re-Type E-mail">
        
        <!-- Password -->
        <!-- <input type="password" id="pass" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password"> -->
        <!-- <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
            At least 8 characters and 1 digit
        </small> -->

        <!-- Phone number -->
        <input type="text" id="phone" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="phone">
        <!-- <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
            Optional - for two step authentication
        </small> -->

        <!-- Newsletter -->
        <!-- <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
            <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
        </div> -->
<!-- <input type="file" name="userfile" > -->

      <br>
        <!-- Sign up button -->
        <button class="btn btn-block my-4 btn-signin text-white rounded-pill" type="submit" id="submit" name="submit" >Sign Up</button>

        <!-- Social register -->
        <p>or sign up with:</p>

        <button type="button" class="btn btn-block my-4 btn-signin text-white rounded-pill" id="cvupload" name="cvupload" data-toggle="modal" data-target="#myModal" >Sign Up With CV Upload</button>

        <button type="button" class="btn btn-block my-4 btn-signin text-white rounded-pill" id="socialmedia" name="socialmedia" data-toggle="modal" data-target="#myModal1">Sign Up With Social Media</button>


        
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                        <h4 class="modal-title" id="myModalLabel">Sign Up With Social Media</h4>
                    </div>
                    <div class="modal-body">
                        <!-- <button type="button" class="btn btn-primary">Login With Facebook</button> -->
                        <a href="<?php echo base_url();?>social_login/fblogin" class="btn btn-facebook"><i class="fa fa-facebook"></i>  Sign Up with Facebook</a>
                        <br>
                        <a href="<?php echo base_url();?>social_login/login" class="btn btn-google-plus"><i class="fa fa-google-plus"></i>  Sign Up with Google+</a> 
                        <br>
                        <a href="#" class="btn btn-linkedin"><i class="fa fa-linkedin"></i>  Sign Up with LinkedIn</a> 
                        <a href="<?php echo base_url();?>social_login/github_login" class="btn btn-linkedin"><i class="fa fa-linkedin"></i>  Sign Up with Git Hub</a> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- Terms of service -->
        <p>By clicking
            <em>Sign up</em> you agree to our
            <a href="" target="_blank">terms of service</a>

      </form>

      <!-- Pop Up Window Code For CV Upload -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                        <h4 class="modal-title" id="myModalLabel">Upload Your CV</h4>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="<?php echo base_url();?>home/cvupload" enctype="multipart/form-data">
                        <input type="file" id="cvfile" name="cvfile"/>
                        <br><button type="submit" name="submit" class="btn btn-primary btn-sm">Submit cv</button>
                     </form>
            
          
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                     
                    </div>
                </div>
            </div>
        </div>

        <!-- Pop Up Window Code For Social Media Login -->
      <!-- Default form register -->
      <!-- Default form login -->
    </div>
    
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#again_email").keyup(function(){
        var email=$("#email").val();
        
        var agn=$("#again_email").val();
        if(email != agn)
        {
          $("#again_email").css('background-color','pink');
          $("#submit").attr('disabled');
        }
        else
        {
          //alert('match');
          $("#again_email").css('background-color','white');
          $("#submit").removeAttr('disabled');
        }
      });
  
});

  </script>

  <!-- Code For CV Upload Buttton Pop Up -->
  <script type="text/javascript">
    $(document).ready(function () 
    {
     // Attach Button click event listener 
      $("#cvupload").click(function()
      {
         $('#myModal').modal('show');
      });
    });
  </script>

  <!-- Code For Social Media Buttton Pop Up -->
  <script type="text/javascript">
    $(document).ready(function () 
    {
     // Attach Button click event listener 
      $("#socialmedia").click(function()
      {
         $('#myModal1').modal('show');
      });
    });
  </script>
<script>
     
let token = 'e0250a8d877f7510512c37001aff0bfab084a449'
var upload_identifier = ''



function checkResp () {
  const responseDiv = document.querySelector("div#response")
  const resultsDisplay = document.querySelector("div#resultsDisplay")

  fetch(`https://resume-parser.affinda.com/public/api/v1/documents/${upload_identifier}`, {
      method: 'GET',
      headers: {
        'Authorization': `Bearer ${token}`,
        'Accept': 'application/json',
        // If you add this, upload won't work
        // 'Content-Type': 'multipart/form-data'
      }
    }
  )
  .then(response => response.json())
  .then(result => {
    console.log('Success:', result);
    if (result["meta"]["ready"] === true) {
      responseDiv.innerText = `Processing document with identifier '${upload_identifier}' complete!`
      resultsDisplay.innerText = JSON.stringify(result)

    } else if (result["meta"]["failed"] === false && result["meta"]["ready"] === false){
      responseDiv.innerText = `Processing document with identifier '${upload_identifier}', still processing (click again in a few seconds)...`

    } else if (result["meta"]["failed"] === true){
      responseDiv.innerText = `Document processing with identifier '${upload_identifier}' has failed`
    }

  }).catch(error => {
    console.error('Error:', error)
  })

}




</script>

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

