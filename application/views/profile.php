<?php include('include/header.php'); ?>
    <!--/.Navbar -->

    <!-- benner   -->
    <!-- Form area started-->

<!-- <div class="container">
  <h2>Simple Collapsible</h2>
  <p>Click on the button to toggle between showing and hiding content.</p>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
</div> -->
    





<div class="container">
  <div class="alert alert-success" id="success" style="display:none">Data has been successfully updated</div>
    <form method="POST"  enctype="multipart/form-data"  id="upload_form">
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" id="btndemo" style="width:100%">Personal data +</button>
      <div class="form-group collapse" id="demo" >
        <label for="fname">First name</label>
        <input type="text" class="form-control" id="fname" aria-describedby="emailHelp" placeholder="Enter First name" value="<?php echo $user->fname; ?>">
        <label for="lname">Last name</label>
        <input type="text" class="form-control" id="lname" aria-describedby="emailHelp" placeholder="Enter Last name" value="<?php echo $user->lname; ?>">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email address" value="<?php echo $user->email; ?>">
        <label for="email">Phone Number</label>
        <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter phone number" value="<?php echo $user->phone_number; ?>">
      </div>
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2" style="width:100%">Educational Info +</button>
      <div class="form-group collapse" id="demo2" >
        <label for="fname">Last Degree</label>
        <input type="text" class="form-control" id="degrees" aria-describedby="emailHelp" placeholder="Enter the last degree that you have" value="<?php if($degrees->title) echo $degrees->title; ?>">
        <label for="lname">Institute</label>
        <input type="text" class="form-control" id="institute" aria-describedby="emailHelp" placeholder="Enter Institute name" value="<?php if($degrees->institute) echo $degrees->institute; ?>">
        <label for="number">Percentage</label> 
        <input type="number" class="form-control" id="percentage" aria-describedby="emailHelp" placeholder="Enter percentage marks" value="<?php if($degrees->percentage) echo $degrees->percentage; ?>">
      </div>
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3" style="width:100%">Skills / Experience +</button>
      <div class="form-group collapse" id="demo3">
        <label for="fname">Skills</label>
        <input type="text" class="form-control" id="skills" aria-describedby="emailHelp" placeholder="Enter Your Skills" value="<?php if($user->skills) echo $user->skills; ?>" >
        <label for="lname">Experience</label>
        <input type="text" class="form-control" id="experience" aria-describedby="emailHelp" placeholder="Enter Experience (In Years)" value="<?php if($user->experience) echo $user->experience; ?>">
        <label for="number">Companies Name</label> 
        <input type="text" class="form-control" id="companies_name" aria-describedby="emailHelp" placeholder="Enter Companies Name" value="<?php if($user->companies_name) echo $user->companies_name; ?>" >
      </div>
      <div class="col-sm-3">
      <button type="button" class="btn btn-primary" id="submit" >Submitt</button>
      </div>
    </form>
</div>




<script>
	//$("#demo").css('display','block');

	$("#submit").click(function(){

		var fname=$("#fname").val();
		var lname=$("#lname").val();
		var email=$("#email").val();
		var degrees=$("#degrees").val();
    //alert(degrees);
		var institute=$("#institute").val();
		var percentage=$("#percentage").val();
		var skills=$("#skills").val();
		var experience=$("#experience").val();
		var companies_name=$("#companies_name").val();
		var phone=$("#phone").val();
			var url='<?php echo base_url();?>home/upload_profile';
		$.post( url , { fname: fname, lname: lname,email:email,degrees:degrees,institute:institute,percentage:percentage,skills:skills,experience:experience,companies_name:companies_name,phone_number:phone }).done(function( data ) {
		  //alert( "Data Loaded: " + data );
		  alert(data);
		  if(data==1)
		  {
		  	$("#success").css('display','block');
		  }
		  
		});
	});
	
		
	
</script>
    <!-- form area ended-->

    <!-- Footer Start -->
    <footer class="bg-dark elegant-color mt-4 mb-4 pb-3 pt-3">
      <div class="container-fluid w-75 border-bottom border-light">
        <div class="row mb-3">
          <div class="col">
            <h5 class="text-white">Jobs by Functional Area</h5>
            <ul class="list-group list-group-flush footer-links">
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
            </ul>
          </div>
          <div class="col">
            <h5 class="text-white">Jobs By City</h5>
            <ul class="list-group list-group-flush footer-links">
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
            </ul>
          </div>
          <div class="col">
            <h5 class="text-white">Jobs By Industry</h5>
            <ul class="list-group list-group-flush footer-links">
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
            </ul>
          </div>
          <div class="col">
            <h5 class="text-white">Job Seekers</h5>
            <ul class="list-group list-group-flush footer-links">
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
            </ul>
          </div>
          <div class="col">
            <h5 class="text-white">International Jobs</h5>
            <ul class="list-group list-group-flush footer-links">
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              <li class="list-group"><a href="#" class="text-white">Creative Design Jobs </a></li>
              
            </ul>
            <h5 class="text-white pt-3">Follow Us</h5>
            <div class="social-icon d-flex">
              <i class="fab fa-facebook text-white social-icon"></i>
              <i class="fab fa-linkedin-in text-white social-icon"></i>
              <i class="fab fa-youtube text-white social-icon"></i>
              <i class="fab fa-twitter text-white social-icon"></i>
              
            </div>
              

          </div>
      </div>
      </div>
    </footer>

    <!-- Footer End -->
         
    
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <!-- <script type="text/javascript" src="<?php echo base_url();?>public/js/popper.min.js"></script> -->
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <!-- <script type="text/javascript" src="<?php echo base_url();?>public/js/mdb.min.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script> -->
  <!-- Your custom scripts (optional) -->
  <!-- <script src="<?php echo base_url();?>public/js/theme.js"></script> -->

</body>
</html>
