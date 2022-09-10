<?php include('include/signin_header.php'); ?>
<div id="root">
	<div>
		<form class="site">
			<div class="site__content">
				<div class="container--full-width-column container--full-width-padded container">
					<div class="justify-content-center text-center mg-b-xs-9 mg-b-lg-14 row">
						<div class="col-12 col-md-10">
							<h2 class="mg-b-xs-2">Hey there!<br>We’re excited to have you join us.</h2>
							<p>Let’s get you set up with Scouted.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="d-flex align-items-center justify-content-center">
								<a type="submit" href="<?php echo base_url().'home/step_two_signup'?>" title="" class="btn btn--primary" style="background: #004ab2;"><span class="btn__sign"></span><span class="btn__text">Start</span>
								</a>
							</div>
						</div>
					</div>
					<div class="text-center row">
						<div class="col-12">
							<div class="penguin-tooltip-wrapper">
								<div class="penguin-tooltip">
									<div class="image-asset">
										<img src="<?php echo base_url();?>public/assets/img/shape/kaka.PNG" width="130px" alt="/static/media/penguin--start.4dae6ace.svg">
									</div>
									<div class="penguin-tooltip-content" style="min-width: 220px; width: 220px;">
										<div class="penguin-tooltip-text d-lg-none" style="height: 100px;">
											<p class="m-0">This will only take about 5 minutes.</p>
										</div>
										<div class="penguin-tooltip-text d-none d-lg-block p-4">
											<p class="m-0 small">This will only take about 5 minutes.</p>
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
</div>
<?php include('include/signin_footer.php'); ?>