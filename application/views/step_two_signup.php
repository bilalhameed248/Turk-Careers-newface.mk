<?php include('include/signin_header.php'); ?>
<div id="root">
	<div>
		<form class="site" method="POST" action="<?php echo base_url();?>home/step_three_signup">
			<div class="site__content">
				<div class="container--full-width-column container--full-width-padded container">
					<div class="justify-content-center text-center mg-b-xs-9 mg-b-lg-14 row">
						<div class="col-12 col-md-10">
							<h1 class="mb-0">Who are you?</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="d-flex flex-column align-items-center justify-content-center">
								<div class="mb-4">
									<input style="visibility: hidden;" type="radio" class="btn-check" value="candidate" name="options" id="option1" autocomplete="off">
									<label id="candidate" class="btn btn-secondary option" for="option1">A candidate looking for a new role</label>
									<input style="visibility: hidden;" type="radio" class="btn-check" value="employer" name="options" id="option2" autocomplete="off">
									<label id="employer" class="btn btn-secondary option" for="option2">An employer looking to hire</label>
								</div>
							</div>
						</div>
					</div>
					<div class="mt-4 row">
						<div class="col-12">
							<div class="d-flex align-items-center justify-content-center">
								<button type="submit" class="btn btn--primary" style="background: #004ab2;"><span class="btn__sign"></span><span class="btn__text">Continue</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	     $('input:radio[name="options"]').change(function()
	     {
	        if ($(this).is(':checked') && $(this).val() == 'candidate') 
	        {
	            $("#candidate").css("background-color", "green");
	            $("#employer").css("background-color", "#e4e4de");
	        }
	        else if ($(this).is(':checked') && $(this).val() == 'employer') 
	        {
	            $("#employer").css("background-color", "green");
	            $("#candidate").css("background-color", "#e4e4de");
	        }
	    });
	});
	
</script>
<?php include('include/signin_footer.php'); ?>