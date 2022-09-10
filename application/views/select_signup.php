<?php include('include/signin_header.php'); ?>
<div class="container mt-5" style="margin-top: 12% !important;">
	<div class="row mt-5">
		<div class="col-lg-12 mt-5 mb-5">
			<h6 class="text-center display-3 mt-5"><b>Let’s create your account</b></h6>
			<p  class="text-center mb-5">If you have a Google, LinkedIn or Facebook account, feel free to use that. Or just sign up with your Email.</p>
			<div class="d-flex align-items-center justify-content-center flex-column">
				<a href="<?php echo base_url();?>social_login/login" class="btn btn--primary mb-4">Connect with Google</a>
				<a href="<?php echo base_url();?>social_login/linkedin_login" class="btn btn--primary mb-4">Connect with LinkedIn</a>
				<a href="<?php echo base_url();?>social_login/fblogin" class="btn btn--primary mb-4">Connect with Facebook</a>
				<a href="<?php echo base_url();?>home/signup" title="" class="btn btn--default"><span class="btn__sign">	
					</span><span class="btn__text" style="color: #004ab2;">Sign up with Email</span>
				</a>
			</div>
			<p class="text-center position-absolute w-100 small">By signing up, you agree to Scouted's <a href="<?php echo base_url();?>home/terms_and_conditions" target="_blank" rel="nofollow noopener" style="color: #004ab2;">Terms of Service</a> and <a target="_blank" rel="nofollow noopener" href="/privacy" style="color: #004ab2;">Privacy Policy</a>.</p>
		</div>
	</div>
</div>
<?php include('include/signin_footer.php'); ?>