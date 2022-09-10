<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/signup/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <div class="row">
                    <div class="col-md-12 mx-0">
                    <?php 
        if($this->session->flashdata('message_detail')) 
        {
        ?>
        <div class="alert alert-danger" style="background-color: red; color: white;">
          <p><?php echo $this->session->flashdata('message_detail'); ?></p>
        </div>
      <?php }?>
                        <form id="msform" enctype="multipart/form-data" action="<?php echo base_url();?>home/signup"  method="POST">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Profile</strong></li>
                                <li id="personal"><strong>Preferences</strong></li>
                                <li id="payment"><strong>Resume/CV</strong></li>
                                <li id="confirm"><strong>Done</strong></li>
                            </ul> <!-- fieldsets -->


                            <!-- Page 01 -->
                            <fieldset>
                                <div class="form-card">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <p>First Name:</p>
                                            <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <p>Last Name:</p>
                                        <div class="form-group">
                                            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p>Email:</p>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                    <p>Re-Type Email:</p>
                                    <input type="email" id="again_email"  class="form-control" placeholder="Re-Type Email" required>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" >
                                </div>
                                    <p>* Where are you based?</p>
                                <select class="form-control">
                                    <option>Please select a location</option>
                                    <option>Pakistan</option>
                                    <option>India</option>
                                    <option>Turki</option>
                                    <option>Afghanistan</option>
                                    <option>Mumbai</option>
                                    <option>Doubai</option>
                                    <option>Unitrd State</option>
                                    <option>Canada</option>
                                    <option>Karachi</option>
                                    <option>Sindh</option>
                                </select>
                                    <p class="mt-4">* What best describes your current role?</p>
                                <select class="form-control" name="role" required>
                                    <option selected disabled>Select a role</option>
                                    <?php foreach($roles as $role){ ?>
                                        <option value="<?php echo $role->role_id;?>"><?php echo $role->role_name; ?></option>
                                    <?php } ?>
                                </select>
                                   
                                    <!-- <p class="mt-4">* Where do you currently work?</p> 
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" name="job-title" class="form-control" placeholder="Job title">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" name="company" class="form-control" placeholder="Company">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check mt-3">Not employed
                                      <input class="form-check-input mt-2" type="checkbox" value="">
                                        </div>
                                        </div>
                                        </div> -->
                                         <p class="mt-4">Linkedin Profile</p>
                                         <div class="form-group">
                                                <input type="text" class="form-control" placeholder="https://Linkedin.com/in" name="linked_profile">
                                            </div>
                                            <p class="mt-4">Your Website</p>
                                             <div class="form-group">
                                                <input type="text" name="website" class="form-control" placeholder="https://www.example.com" >
                                            </div>
                                    </div> 
                                 <input type="button" name="next" class="next action-button" value="Create Your Profile" />
                            </fieldset>



                            <fieldset>
                                <div class="form-card">
                                   <p class="mt-4">* Where are you in your job search?</p>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="radio-inline">
                                    <input type="radio" name="job_search_status" value="1" checked><p style="border-left:1px solid lightgrey; border-right:1px solid lightgrey;">Ready to Interview?</br>
                                    <span id="text">You’re actively looking for new work and ready to interview. Your job profile will be visible by startups.</span></p>
                                    </label>
                                </div>
                                 <div class="col-lg-4">
                                    <label class="radio-inline">
                                    <input type="radio" name="job_search_status" value="2" ><p style="border-right:1px solid lightgrey;">Open to offers:</br>
                                   <span id="text"> You’re not looking but open to hear about new opportunities. Your job profile will be visible to startups.</span></p>
                                    </label>
                                </div>
                              <div class="col-lg-4">
                                    <label class="radio-inline">
                                    <input type="radio" name="job_search_status" value="3" >
                                    <p style="border-right:1px solid lightgrey;">Closed to offers:</br>
                                    <span id="text">You’re not looking and don’t want to hear about new opportunities. Your job profile will be hidden to startups.</span></p>
                                    </label>
                                       </div>
                                   </div>
                                   <p>*What type of job are you interested in?</p>
                                   <div class="row">
                                       <div class="col-lg-3">
                                           <div class="form-check">
                                            <label>Full-time Employee</label>
                                            <input class="form-check-input position-static" type="radio" name="job_search_type" id="blankRadio1" value="1" checked>
                                            </div>
                                       </div>
                                       <div class="col-lg-3">
                                           <div class="form-check">
                                            <label>Contractor</label>
                                            <input class="form-check-input position-static" type="radio" name="job_search_type" id="blankRadio1" value="2" aria-label="...">
                                            </div>
                                       </div>
                                       <div class="col-lg-3">
                                           <div class="form-check">
                                            <label class="ml-5">Intern</label>
                                            <input class="form-check-input position-static" type="radio" name="job_search_type" id="blankRadio1" value="3" aria-label="...">
                                            </div>
                                       </div>
                                       <div class="col-lg-3">
                                      <div class="form-check">
                                    <label>Co-founder</label>
                                        <input class="form-check-input position-static" type="radio" name="job_search_type" id="blankRadio1" value="4" aria-label="...">
                                        </div>
                                </div>
                                   </div>
                                   <!-- <p>*What is your desired salary?</p>
                                   <div class="row">
                                       <div class="col-lg-4">
                                           <div class="form-group">
                                               <input type="number" class="form-control" name="expected_salary" placeholder="555">
                                           </div>
                                       </div>
                                        <div class="col-lg-6">
                                        <select class="form-control" style="border: 0;border-bottom: 1px solid lightgrey;">
                                        <option>Euro</option>
                                        <option>PKR</option>
                                        <option>$</option>
                                        <option>iOs Developer</option>
                                        <option>Android Developer</option>
                                        <option>Frontend Engineer</option>
                                        <option>Backend Engineer</option>
                                        <option>Full-Stack Engineer</option>
                                        <option>Data Engineer</option>
                                        <option>Security Engineer</option>
                                        <option>DevOps</option>
                                    </select>
                                        </div>
                                   </div> -->
                                  
                                    </div>
                                 <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                  <input type="button" name="next" class="next action-button" value="Save and Continue" />
                            </fieldset>













                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Upload a recent resume or CV</h2>
                                    <p class="text-center">Click the button below to upload your resume as a .pdf, .doc, .docx, .rtf, .wp or .txt file</p>
                                    <div class="text-center">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLangHTML" name="resume">
                                        <label class="custom-file-label" for="customFileLangHTML" data-browse="Upload Resume">Upload Your Updated Resume Here</label>
                                    </div>
                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                 <input type="button" name="btn" class="next action-button" value="Confirm" />
                            </fieldset>












                            <fieldset>
                                <div class="form-card">
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-check mt-3">Agree to Terms and Conditions? </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <input class="form-check-input mt-2" type="checkbox" value="">
                                      </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                        <div class="form-check mt-3 ">Agree to Privacy Policy?</div>
                                        </div>
                                        <div class="col-lg-6">
                                      <input class="form-check-input mt-2 " type="checkbox" value="">
                                      </div>
                                      </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                        <button type="submit" id="submit" class="btn btn-primary mt-5"style="color: skyblue;" name="submit">Save and Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
<script type="text/javascript">
	$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});
</script></body>
</html>
