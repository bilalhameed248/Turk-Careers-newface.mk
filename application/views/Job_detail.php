<?php include('timeline/include/header.php'); ?>
<style>
	.form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    color: black;
</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
							<center>
							<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
							<h1>Thank You!</h1>
							<p>You have successfully applied for this job.You will be called later</p>
							</center>
 						</div>
                    </div>
                </div>
            </div>
        </div>
	<section>
		<div class="">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-8">
						<figure class="employer-thmb">
							<img src="<?php echo base_url(); ?>public/timeline2/images/resources/employer.jpg" alt="">
						</figure>
						<div class="employer-info">
							<i><?php echo $job_owner->company_name; ?></i>
							<h2><?php echo $job->title; ?> </h2>
							<!-- <h4>Share This Job</h4> -->
							<ul class="sociaz-media">
								<!-- <li><a title="" href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a title="" href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a title="" href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
								<li><a title="" href="#" class="vk"><i class="fa fa-vk"></i></a></li>
								<li><a title="" href="#" class="instagram"><i class="fa fa-instagram"></i></a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-4">
						<div class="salary-area">
							<h4><?php echo $job->salary_offered_min.'-'.$job->salary_offered_max; ?></h4>
							<span>Salary Range</span>
							<!-- <a href="#" title=""><i class="fa fa-bookmark"></i>Login to Bookmark This job</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="">
			<div class="container-fluid">
				<div class="row merged20" id="page-contents">
					<div class="col-lg-3">
						<aside class="sidebar static left">
							<div class="widget stick-widget">
								<h4 class="widget-title">Shortcuts</h4>
									<ul class="naves">
											<li>
												<i class="ti-clipboard"></i>
												<a href="<?php echo base_url().'/feed'; ?>" title="">News feed</a>
											</li>
											<li>
												<i class="ti-mouse-alt"></i>
												<a href="<?php echo base_url();?>" title="">Home</a>
											</li>
											<li>
												<i class="ti-files"></i>
												<a href="<?php echo base_url().'/jobs/list'; ?>" title="">All Jobs</a>
											</li>
											<li>
												<i class="ti-user"></i>
												<a href="#" title="">friends</a>
											</li>
										</ul>
							</div>
							<div class="widget">
										<h4 class="widget-title">E-Contact</h4>
										<ul class="contact-widget">
											<!-- <li class="contact-box">
												<div id="map-canvas"></div>
											</li> -->
											<li class="contact-box">
												<span>Address</span>
												<p><?php echo $job_owner->company_address; ?></p>
											</li>
											<li class="contact-box">
												<span>E-Contact</span>
												<p><i class="fa fa-whatsapp"></i><?php echo $job_owner->phone_number; ?></p>
												<p><i class="fa fa-envelope"></i><?php echo $job_owner->owner_email; ?></p>
												<p><i class="fa fa-phone"></i><?php echo $job_owner->company_phone_no; ?></p>
											</li>
										</ul>
									</div><!-- Contact -->
						</aside>
					</div>
					<div class="col-lg-6">
						<div class="central-meta">
							<div class="job-detail">
								<h3>Job Description</h3>
								<p>
									<?php echo $job->description;?>
								</p>
								
								
								
								<div class="job-tgs">
									<span>Required skills:</span>
									<?php $skills=explode(',',$job->skills);foreach($skills as $skill){ ?>
									<a href="#" title=""><?php echo $skill; ?></a>
									<?php } ?>
								</div>

								<div class="apply-bttons">
									<?php if(!$isapplied){ ?>
										<?php 
										$num_applied=$no_of_jobs;
										$limit=$user->apply_limit;
										if($num_applied<$limit)
										{
										//print_r($user);
										?>
									<a class="main-btn" href="#" style="color: red; font-size: large;" title="" data-toggle="modal" data-target="#myModal">Apply Now</a>
									<?php } else{ ?>
										<div class="alert alert-danger">You have exceeded limit.see our subscriptions packages <a href="<?php echo base_url();?>home/subscription">here</a></div>

									<?php } ?>
								<?php } else{ ?>
									<div class="alert alert-danger">You have already applied for this job</div>
								<?php } ?>
									
								</div>
								<div class="modal fade" id="myModal">
											<div class="modal-dialog">
											  <div class="modal-content">

												<!-- Modal Header -->
												<div class="modal-header">
												  <h4 class="modal-title">Apply for <?php echo $job->title; ?></h4>
												  <button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>

												<!-- Modal body -->
												<div class="modal-body">
												  	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>jobs/detail/<?php echo $job->id;?>">
												  		<div class="form-group">
														    <label for="name">Full Name</label>
														    <input type="text" class="form-control" id="name" placeholder="Full Name" value="<?php echo $user->fname.' '.$user->lname; ?>" disabled>
													  	</div>
														<div class="form-group">
														    <label for="email">Email address</label>
														    <input type="email" class="form-control" id="email" placeholder="name@example.com" value="<?php echo $user->email; ?>" disabled>
														</div>
														<div class="form-group">
														    <label for="skills">skills</label>
														    <input type="text" class="form-control" id="skills" placeholder="skills" value="<?php echo $user->skills; ?>">
														</div>
														<div class="form-group">
														    <label for="experience">Experience</label>
														    <input type="text" class="form-control" id="experience" placeholder="experience" value="<?php echo $user->experience; ?>">
														</div>
														<div class="form-group">
														    <label for="experience">Organisations</label>
														    <input type="text" class="form-control" id="organisations" placeholder="where you worked previously" value="<?php echo $user->companies_name;?>">
														</div>
													  
													  
														  <div class="form-group">
														    <label for="exampleFormControlTextarea1">Dscription</label>
														    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write briefly about yourself relating to job" name="desc"></textarea>
														  </div>

														  <div class="form-group">
														    <label for="exampleFormControlTextarea1">Upload CV</label>
														    <input required accept=".docx,.pdf,.doc" name="cv" required type="file">
														  </div>

														  <button type="submit" class="btn btn-primary" name="submit">Apply</button>
													</form>
												</div>

												<!-- Modal footer -->
												<div class="modal-footer">
												  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											  </div>
											</div>
										</div><!-- fade Modal -->
							</div>
						</div>
						<div class="central-meta">
							<span class="create-post">Related Jobs<a title="" href="#">See All</a></span>
							<ul class="related-links">
								<?php foreach($related_jobs as $job){ ?>
								<li><i class="fa fa-angle-right"></i><a href="#" title=""><?php echo $job->title;?> BY <?php  echo'<span style="color: Blue;">'.$job->company_name.'</span>'; ?> </a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<aside class="sidebar static right">
							<div class="widget">
								<h4 class="widget-title">Job Overview</h4>
								<ul class="job-overview">
									<li>
										<i class="fa fa-calendar"></i>
										<div class="carer-overview">
											<span>Date Posted</span>
											<em><?php echo $job->posted_on; ?></em>
										</div>
									</li>
									<li>
										<i class="fa fa-map-marker"></i>
										<div class="carer-overview">
											<span>Location</span>
											<em>Ontario, Canada</em>
										</div>
									</li>
									<li>
										<i class="fa fa-building-o"></i>
										<div class="carer-overview">
											<span>Company</span>
											<em><?php echo $job_owner->company_name; ?></em>
										</div>
									</li>
									<li>
										<i class="fa fa-clock-o"></i>
										<div class="carer-overview">
											<span>Job Type</span>
											<em><?php echo $job->job_type; ?></em>
										</div>
									</li>
								</ul>
								<div class="conect-socials">
									<!-- <a class="facebook" href="#" data-ripple="">Apply with Facebook</a>
									<a class="google" href="#" data-ripple="">Apply with google</a> -->
								</div>
							</div><!-- job overview  -->
							<div class="widget">
								<div class="company-intro">
									<h4><?php echo $job_owner->company_name; ?></h4>
									<figure><img src="images/resources/facebook-office.jpg" alt=""></figure>
									<p>
										<?php echo $job_owner->company_desc; ?>
									</p>
									<a href="#" title="">Read more</a>
								</div>
							</div><!-- company widget -->
							<div class="widget stick-widget">
								<h4 class="widget-title">Job Location</h4>
								<div class="job-map">
									<div id="map-canvas"></div>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</section>
		<script type="text/javascript">
		
			var modalDialog = $("#ignismyModal");

        
        // Applying the top margin on modal to align it vertically center
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
        var success=<?php echo $success;?>;
        if(success)
        {
        	$('#ignismyModal').modal('show');
  setTimeout(function() {
    $('#ignismyModal').modal('hide');
  }, 3000);
        }
  

	</script>>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="widget">
						<div class="foot-logo">
							<div class="logo">
								<a href="index.html" title=""><img src="images/logo2.png" alt=""></a>
							</div>	
							<p>
								The trio took this simple idea and built it into the world’s leading carpooling platform.
							</p>
						</div>
						<ul class="location">
							<li>
								<i class="fa fa-map-marker"></i>
								<p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<p>+1-56-346 345</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="widget">
						<div class="widget-title"><h4>follow</h4></div>
						<ul class="list-style">
							<li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
							<li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
							<li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
							<li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
							<li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="widget">
						<div class="widget-title"><h4>Navigate</h4></div>
						<ul class="list-style">
							<li><a href="about.html" title="">about us</a></li>
							<li><a href="contact.html" title="">contact us</a></li>
							<li><a href="terms.html" title="">terms & Conditions</a></li>
							<li><a href="#" title="">RSS syndication</a></li>
							<li><a href="sitemap.html" title="">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="widget">
						<div class="widget-title"><h4>useful links</h4></div>
						<ul class="list-style">
							<li><a href="#" title="">leasing</a></li>
							<li><a href="#" title="">submit route</a></li>
							<li><a href="#" title="">how does it work?</a></li>
							<li><a href="#" title="">agent listings</a></li>
							<li><a href="#" title="">view All</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="widget">
						<div class="widget-title"><h4>download apps</h4></div>
						<ul class="colla-apps">
							<li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
							<li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
							<li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer -->

	<a title="Your Cart Items" href="shop-cart.html" class="shopping-cart" data-toggle="tooltip">Cart <i class="fa fa-shopping-bag"></i><span>02</span></a>

	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright">© Pitnik 2020. All rights reserved.</span>
					<i><img src="images/credit-cards.png" alt=""></i>
				</div>
			</div>
		</div>
	</div><!-- bottom bar -->
</div>
	
	
	<?php 
 include('timeline/include/footer.php'); ?>