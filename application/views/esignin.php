<?php include('include/signin_header.php'); ?>
<form class="site" method="POST" action="<?php echo base_url();?>home/esignin">
   <div class="site__content">
      <div class="container--full-width-column container--full-width-padded container">
         <div class="justify-content-center text-center mg-b-xs-12 row">
            <div class="col-12 col-md-8">
               <h2 class="mg-b-xs-2">Employee Login via Email &amp; Password</h2>
            </div>
         </div>
         <div class="justify-content-center row">
            <div class="col-12 col-md-8">
               <div class="field-wrapper">
                  <label class="">Email</label>
                  <div class="field-container">
                     <input id="defaultLoginFormEmail" placeholder="Email" name="email" title="" type="email" class="form-control" value="" required>
                     <span class="validation-text"></span></div>
               </div>
            </div>
         </div>
         <div class="justify-content-center row">
            <div class="col-12 col-md-8">
               <div class="field-wrapper">
                  <label class="">Password</label>
                  <div class="field-container">
                     <input placeholder="Password" id="defaultLoginFormPassword" title="" type="password" name="password" class="form-control" value="" required>
                     <span class="validation-text"></span></div>
               </div>
            </div>
         </div>
         <div class="justify-content-center row">
            <div class="col-12 col-md-8">
               <div class="checkbox mb-5"><label class="checkbox__label"><input class="checkbox__input" type="checkbox"><span class="checkbox__check checkbox--squared"></span><span class="checkbox__text">Show password</span></label></div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="d-flex align-items-center justify-content-center flex-column flex-lg-row">
                  <button type="submit" name="submit" href="" title="" class="btn btn--primary order-1 order-lg">
                     <span class="btn__sign"></span><span class="btn__text">Login</span>
                  </button>
                  <a type="link" href="<?php echo base_url();?>home/forgetpass" title="" class="btn btn--outline order-2 order-lg">
                     <span class="btn__sign"></span><span class="btn__text">Reset Password</span>
                  </a>
               </div>
            </div>
            <div class="col-12">
               <p class="d-flex align-items-center justify-content-center flex-column flex-lg-row"><span>Don't have an account?</span><a class="order-2 order-lg mb-0 ml-3" href="<?php echo base_url();?>home/esignup">Sign up here</a></p>
            </div>
         </div>
      </div>
   </div>
</form>
<?php include('include/signin_footer.php'); ?>