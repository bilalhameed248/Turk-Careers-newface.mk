<?php include('include/signin_header.php'); ?>
<form class="site" method="POST" action="<?php echo base_url();?>home/login">
   <div class="site__content">
      <div class="container--full-width-column container--full-width-padded container">
         <div class="justify-content-center text-center mg-b-xs-12 row">
            <div class="col-12 col-md-8">
               <h2 class="mg-b-xs-2">Login via Email &amp; Password</h2>
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
                  <button type="submit" name="submit" href="" title="" class="btn btn--primary order-1 order-lg" style="background: 
                     #004ab2;">
                     <span class="btn__sign"></span><span class="btn__text">Login</span>
                  </button>
                  <a type="link" href="<?php echo base_url();?>home/forgetpass" title="" class="btn btn--outline order-2 order-lg" style="background: 
                     #004ab2;">
                     <span class="btn__sign"></span><span class="btn__text" style="color:
                     #fff;">Reset Password</span>
                  </a>
               </div>
            </div>
            <div class="col-12">
               <p class="d-flex align-items-center justify-content-center flex-column flex-lg-row"><span>Don't have an account?</span><a class="order-2 order-lg mb-0 ml-3" href="<?php echo base_url();?>home/signup" style="color:
                     #004ab2;">Sign up here</a></p>
            </div>
            <div class="col-12">
            <p id="or">OR</p>
         </div>
            <div class="col-12">
               <p class="d-flex align-items-center justify-content-center flex-column flex-lg-row"><span>Sign in With Academy Owner?</span><a class="order-2 order-lg mb-0 ml-3" href="<?php echo base_url();?>home/acc_owner_login"style="color:
                     #004ab2;">Sign In</a></p>
            </div>
         </div>
         <div class="mt-3 row">
            <div class="col-12">
               <div class="justify-content-center row">
                  <div class="col-12 col-md-4">
                     <a href="<?php echo base_url();?>social_login/login" class="btn-social-login btn-social-login--google">
                        <span class="btn-social-login__icon">
                           <svg width="32" height="32" viewBox="0 0 32 32" class="icon">
                              <path d="M16.319 13.713v5.487h9.075c-0.369 2.356-2.744 6.9-9.075 6.9-5.463 0-9.919-4.525-9.919-10.1s4.456-10.1 9.919-10.1c3.106 0 5.188 1.325 6.375 2.469l4.344-4.181c-2.788-2.612-6.4-4.188-10.719-4.188-8.844 0-16 7.156-16 16s7.156 16 16 16c9.231 0 15.363-6.494 15.363-15.631 0-1.050-0.113-1.85-0.25-2.65l-15.113-0.006z"></path>
                           </svg>
                        </span>
                        <span class="text">Log in with Google</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-12">
               <div class="justify-content-center row">
                  <div class="col-12 col-md-4">
                     <a href="<?php echo base_url();?>social_login/linkedin_login" class="btn-social-login btn-social-login--linkedin">
                        <span class="btn-social-login__icon">
                           <svg id="Capa_1" x="0px" y="0px" viewBox="0 0 36 35" xml:space="preserve" class="icon">
                              <style type="text/css">
                                 .st0{fill:#fff;}
                              </style>
                              <path class="st0" d="M10.8,14v10.6h3.3V14H10.8z M12.5,8.7c1.1,0,1.9,0.9,1.9,1.9c0,1.1-0.9,1.9-1.9,1.9c-1.1,0-1.9-0.9-1.9-1.9 C10.5,9.5,11.4,8.7,12.5,8.7z M19.4,14h-3.2v10.6h3.3v-5.3c0-1.4,0.3-2.7,2-2.7c1.7,0,1.7,1.6,1.7,2.8v5.2h3.3v-5.8 c0-2.9-0.6-5.1-4-5.1c-1.6,0-2.7,0.9-3.1,1.7h0V14z"></path>
                           </svg>
                        </span>
                        <span class="text">Log in with LinkedIn</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-12">
               <div class="justify-content-center row">
                  <div class="col-12 col-md-4">
                     <a href="<?php echo base_url();?>social_login/fblogin" class="btn-social-login btn-social-login--facebook">
                        <span class="btn-social-login__icon">
                           <svg id="Capa_1" x="0px" y="0px" viewBox="0 0 35 35" xml:space="preserve" class="icon">
                              <style type="text/css">
                                 .st0{fill:#fff;} </style>
                              <path class="st0" d="M21.6,11.8h-1.9c-0.7,0-0.8,0.3-0.8,1v1.7h2.8l-0.3,3h-2.5v9h-3.6v-9h-1.9v-3.1h1.9v-2.4c0-2.3,1.2-3.4,3.9-3.4 h2.5V11.8z"></path>
                           </svg>
                        </span>
                        <span class="text">Log in with Facebook</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>
<?php include('include/signin_footer.php'); ?>