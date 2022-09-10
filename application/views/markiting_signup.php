<?php include('include/signin_header.php'); ?>
<div id="root">
    <form class="site" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>markiting/markiting_signup">
      <div class="site__content" style="padding-bottom: 8rem;"><a type="link" href="<?php echo base_url();?>" title="" class="btn btn--back d-flex d-md-flex"><span class="btn__sign"></span><span class="btn__text">Back</span></a>
        <div class="container--full-width-column container--full-width-padded container">
          <div class="justify-content-center row">
            <div class="col-12 col-lg-6">
              <div class="text-center mg-b-lg-8 mg-b-xs-4 row">
                <div class="col-12">
                  <h2 class="mg-b-xs-2" style="margin-top: 10rem;">Marketer Sign Up</h2>
                  <p>Already have an Account <a href="<?php echo base_url();?>home/esignin">Sign in as a Employee.</a>
                  <p>Not an employer? <a href="<?php echo base_url();?>home/signup">Sign up as a candidate.</a>
                  </p>
                </div>
              </div>
              <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12 col-md-6">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Marketer Name</label>
                    <div class="field-container">
                      <input placeholder="Marketer Name" title="" required="" type="" class="form-control" value="" name="markiter_name"><span class="validation-text"></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Marketer Email</label>
                    <div class="field-container">
                      <input id="email" name="markiter_email" placeholder="Email" title="" required type="email" class="form-control" value=""><span class="validation-text"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Re-Type E-mail</label>
                    <div class="field-container">
                      <input id="again_email" placeholder="Re-Type E-mail" title="" required="" type="email" class="form-control" value=""><span class="validation-text">Please enter a valid email.</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Phone Number</label>
                    <div class="field-container">
                      <input placeholder="Phone Number" title="" required="" name="phone_number" type="tel" class="form-control" value=""><span class="validation-text">Please enter a valid phone number.</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Marketer Address</label>
                    <div class="field-container">
                      <input name="markiter_address" placeholder="Marketer Address" title="" required="" type="" class="form-control" value=""><span class="validation-text"></span>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-12 col-md-6">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Company Phone Number</label>
                    <div class="field-container">
                      <input placeholder="Company Phone Number" title="" required="" name="company_phone_no" type="tel" class="form-control" value=""><span class="validation-text"><span class="validation-text"></span>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Marketer Address</label>
                    <div class="field-container">
                      <input type="text" id="company_address" class="form-control" placeholder="company address" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="company_address" required>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12"></div>
              </div>
              <div class="justify-content-center row">
                <div class="col-12">
                  <div class="d-flex align-items-center justify-content-center flex-column flex-lg-row">
                    <div class="order-1 order-lg-2 mg-b-xs-5 mg-b-lg-1 position-relative">
                      <button type="submit" id="submit" name="submit" title="" class="btn btn--primary"><span class="btn__sign"></span><span class="btn__text">Submit</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
<script type="text/javascript">
    $(document).ready(function()
    {
      $("#again_email").keyup(function()
      {
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
<?php include('include/signin_footer.php'); ?>