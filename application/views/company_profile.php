<?php include('timeline/include/header.php'); ?>
<style>
	#tags{
  float:left;
  border:1px solid #ccc;
  padding:5px;
  font-family:Arial;
}
#tags > span{
  cursor:pointer;
  display:block;
  float:left;
  color:#fff;
  background:#789;
  padding:5px;
  padding-right:25px;
  margin:4px;
}
#tags > span:hover{
  opacity:0.7;
}
#tags > span:after{
 position:absolute;
 content:"×";
 border:1px solid;
 padding:2px 5px;
 margin-left:3px;
 font-size:11px;
}
#tags > input{
  background:#eee;
  border:0;
  margin:4px;
  padding:7px;
  width:auto;
}
</style>
	<section>
		<div class="gap2 gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
						<div class="user-profile">		
							</div><!-- user profile banner  -->
							<div class="col-lg-9">
								<div class="central-meta">
									<div class="about">
										<div class="d-flex flex-row">
											<!-- <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >
												<li class="nav-item">
													<a href="#gen-setting" class="nav-link " data-toggle="tab" ><i class="fa fa-gear"></i> General Setting</a>
												</li>
												<li class="nav-item">
													<a href="#edit-profile" class="nav-link active" data-toggle="tab" ><i class="fa fa-pencil"></i> Edit Profile</a>
												</li>
												<li class="nav-item">
													<a href="#notifi" class="nav-link" data-toggle="tab" ><i class="fa fa-bell"></i> Notification</a>
												</li>
												<li class="nav-item">
													<a href="#messages" class="nav-link" data-toggle="tab" ><i class="fa fa-comment"></i> Messages</a>
												</li>
												<li class="nav-item">
													<a href="#weather" class="nav-link" data-toggle="tab" ><i class="fa fa-cloud"></i> Weather Setting</a>
												</li>
												<li class="nav-item">
													<a href="#page-manage" class="nav-link" data-toggle="tab" ><i class="fa fa-pencil-square-o"></i>Widgets Setting</a>
												</li>
												<li class="nav-item">
													<a href="#privacy" class="nav-link" data-toggle="tab"  ><i class="fa fa-shield"></i> Privacy & Data</a>
												</li>
												<li class="nav-item">
													<a href="#security" class="nav-link" data-toggle="tab" ><i class="fa fa-lock"></i> Security</a>
												</li>
												<li class="nav-item">
													<a href="#apps" class="nav-link" data-toggle="tab" ><i class="fa fa-th"></i> Apps</a>
												</li>
											</ul> -->
											<div class="tab-content">
												<div class="tab-pane fade" id="gen-setting" >
													<div class="set-title">
														<h5>General Setting</h5>
														<span>Set your login preference, help us personalize your experience and make big account change here.</span>
													</div>
													<div class="onoff-options ">
														<form method="post">
															<div class="setting-row">
																<span>Sub users</span>
																<p>Enable this if you want people to follow you</p>
																<input type="checkbox" id="switch00" /> 
																<label for="switch00" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Enable follow me</span>
																<p>Enable this if you want people to follow you</p>
																<input type="checkbox" id="switch01" /> 
																<label for="switch01" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Send me notifications</span>
																<p>Send me notification emails my friends like, share or message me</p>
																<input type="checkbox" id="switch02" /> 
																<label for="switch02" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Text messages</span>
																<p>Send me messages to my cell phone</p>
																<input type="checkbox" id="switch03" /> 
																<label for="switch03" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Enable tagging</span>
																<p>Enable my friends to tag me on their posts</p>
																<input type="checkbox" id="switch04" /> 
																<label for="switch04" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Enable sound Notification</span>
																<p>You'll hear notification sound when someone sends you a private message</p>
																<input type="checkbox" id="switch05" checked=""/> 
																<label for="switch05" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															
															<div class="submit-btns">
																<button type="button" class="main-btn" data-ripple=""><span>Save</span></button>
																<button type="button" class="main-btn3" data-ripple=""><span>Cancel</span></button>
															</div>
														</form>
													</div>
													<div class="account-delete">
														<h5>Account Changes</h5>
														<div>
															<span>Hide Your Posts and profile </span>
															<button type="button" class=""><span>Deactivate account</span></button>
														</div>	
														<div>
															<span>Delete your account and data </span>
															<button type="button" class=""><span>close account</span></button>
														</div>
													</div>
												</div><!-- general setting -->
												<div class="tab-pane fade show active" id="edit-profile">
													<div class="set-title">
														<h5><b>Edit Company Profile<b></h5>
													</div>
													<div class="setting-meta">
														<div class="change-photo">
															<figure><img src="<?php echo base_url().$owner_details->profile_pic;?>" style="width:70px;height:70px" alt=""></figure>
															<div class="edit-img">
																<form class="edit-phto" method="POST" action="<?php echo base_url();?>jobs/updatedpowner" enctype="multipart/form-data">
																	
																	<label class="fileContainer">
																		<i class="fa fa-camera-retro"></i>
																		Change Company Logo
																	<input type="file" name="dpimage" accept="image/x-png,image/gif,image/jpeg">
																	</label>
																	<br>
																	<br>
																	<button type="submit">Save</button>
																	
																</form>
															</div>
														</div>
														<button style="float: right;" class="btn btn-primary" type="submit">Share Profile</button>
													</div>

													<div class="stg-form-area">
														<form method="POST" id="profile_form" class="c-form" action="<?php echo base_url(); ?>jobs/update_company_profile" >
															<h5><b>Manager Detail</b></h5>
															<br>
															<div class="row">
															    <div class="col">
															    	<label>Manager Name</label>
															        <input type="text" class="form-control" placeholder="Full name" value="<?php if($owner_details->owner_name)
															        {echo $owner_details->owner_name;} ?>" name="fname">
															    </div>
															    <div class="col">
															    	<label>Manager Email</label>
															      <input type="email" class="form-control" placeholder="Owner Email" value="<?php if($owner_details->owner_email)
															        {echo $owner_details->owner_email;} ?>"name="email">
															    </div>
															 </div>
															<div class="row">
															    <div class="col">
															    	<label>Manager Phone number</label>
															     <input type="phone_number" class="form-control" placeholder="Owner Phone number" value="<?php if($owner_details->phone_number)
															        {echo $owner_details->phone_number;} ?>" name="phone_number">
															    </div>
															    <div class="col">
															    	<!-- <label>Owner Phone number</label>
															     <input type="phone_number" class="form-control" placeholder="phone_number" value=""name="phone_number"> -->
															    </div>
															</div>
															<br>
															<h5><b>Company Detail</b></h5>
															<br>
															<div class="row">
															    <div class="col">
															    	<label>Company Name</label>
															      <input type="text" class="form-control" placeholder="Company Name" value="<?php if($owner_details->company_name)
															        {echo $owner_details->company_name;} ?>" name="company_name">
															    </div>
															    <div class="col">
															    	<label>Company Phone Number</label>
															      <input type="text" class="form-control" placeholder="Company Phone Number" value="<?php if($owner_details->company_phone_no)
															        {echo $owner_details->company_phone_no;} ?>" name="company_phone_no">
															    </div>
															</div>
															<div class="row">
															    <div class="col">
															    	<label>Company Website</label>
															      <input type="text" class="form-control" placeholder="Company Website URL" value="<?php if($owner_details->company_website_url)
															        {echo $owner_details->company_website_url;} ?>" name="company_website_url">
															    </div>
															    <div class="col">
															    	<label>Company Address</label>
															      <input type="text" class="form-control" placeholder="Company Address" value="<?php if($owner_details->company_address)
															        {echo $owner_details->company_address;} ?>" name="company_address">
															    </div>
															</div>
															<div>															
																<label>Company Description</label>
																<textarea name="company_desc" rows="3"placeholder="Write someting About Your Company"><?php if($owner_details->company_desc){echo $owner_details->company_desc;} ?></textarea>
															</div>
															<div class="row">
															    <div class="col">
															     <label>Industry</label>
															      <select name="industry" class="form-control" id="exampleSelect1">
															        <option value="Accounting">Accounting</option>
																	  <option value="Airlines/Aviation">Airlines/Aviation</option>
																	  <option value="Alternative Dispute Resolution">Alternative Dispute Resolution</option>
																	  <option value="Alternative Medicine">Alternative Medicine</option>
																	  <option value="Animation">Animation</option>
																	  <option value="Apparel Fashion">Apparel &amp; Fashion</option>
																	  <option value="Architecture Planning">Architecture &amp; Planning</option>
																	  <option value="Arts Crafts">Arts &amp; Crafts</option>
																	  <option value="Automotive">Automotive</option>
																	  <option value="Aviation Aerospace">Aviation &amp; Aerospace</option>
																	  <option value="Banking">Banking</option>
															      </select>
															    </div>
															    <div class="col">
															    	<label>Company Size</label>
															      <select name="company_size" class="form-control" id="exampleSelect1">
															        <option value="MYSELF_ONLY">0–1 employees</option>
																	  <option value="2–10">2–10 employees</option>
																	  <option value="11–50 employees">11–50 employees</option>
																	  <option value="51–200 employees">51–200 employees</option>
															      </select>
															    </div>
															    <div class="col">
															    	<label>Company type</label>
															      <select name="company_type" class="form-control" id="exampleSelect1">
															          <option value="PUBLIC COMPANY">Public company</option>
																	  <option value="SELF EMPLOYED">Self-employed</option>
																	  <option value="GOVERNMENT AGENCY">Government agency</option>
																	  <option value="NON PROFIT">Nonprofit</option>
																	  <option value="SELF OWNED">Sole proprietorship</option>
																	  <option value="PRIVATELY HELD">Privately held</option>
																	  <option value="PARTNERSHIP">Partnership</option>
															      </select>
															    </div>
															</div>
															<div>
																<button type="submit" data-ripple="">Cancel</button>
																<button type="submit" data-ripple="" name="submit">Save</button>
															</div>
														</form>
													</div>
												</div><!-- edit profile -->
												<!-- <div class="tab-pane fade" id="notifi" role="tabpanel" >
													<div class="set-title">
														<h5>Notification Setting</h5>
														<span>Select push and email notifications you'd like to receive.</span>
													</div>
													<div class="notifi-seting">
														<div class="form-radio">
														  <div class="radio">
															<label>
															  <input type="radio" checked="checked" name="radio"><i class="check-box"></i>
																Send Me emails about my activity except emails i have unsubscribe from
															</label>
														  </div>
														  <div class="radio">
															<label>
															  <input type="radio" name="radio"><i class="check-box"></i>
																Only send me required services announcements.
															</label>
														  </div>
														</div>
														<div class="set-title">
															<h6>i'd like to receive emails and updates from Pitnik about</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Always General announcement, updates, posts, and videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Personalise tips for my page. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Announcements and recommendations. 
														  </label>
															<p><a href="#" title="">learn more</a> about emails from pitnik</p>
														</div>
														<div class="set-title">
															<h6>Other Notifications</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Recommended videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  activity on my page or channel. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Activity on my comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Reply to comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Mentions. 
														  </label>
															
														</div>
														<div class="set-title">
															<h6>Language Preference</h6>
															<span>Select your email language</span>
														</div>
														<select class="select">
															<option value="">Eglish US</option>
															<option value="">Eglish UK</option>
															<option value="">Russia</option>
														</select>
														<p>
															you will always get notifications you have turned on for individual <a href="#" title="">Manage All Subscriptions</a>
														</p>
													</div>
												</div> --><!-- notification -->
												<!-- <div class="tab-pane fade" id="messages" role="tabpanel">
													<div class="set-title">
														<h5>Messages Setting</h5>
														<span>Set your login preference, help us personalize your experience and make big account change here.</span>
														<div class="mesg-seting">
														
														<div class="set-title">
															<h6>i'd like to receive emails and updates from Pitnik about</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Always General announcement, updates, posts, and videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Personalise tips for my page. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Announcements and recommendations. 
														  </label>
															<p><a href="#" title="">learn more</a> about emails from pitnik</p>
														</div>
														<div class="set-title">
															<h6>Other Messages</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  From Recommended videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Messages from activity on my page or channel. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Message me the replyer Activity on my comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Reply to comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Mentions. 
														  </label>
															
														</div>
														<div class="set-title">
															<h6>Language Preference</h6>
															<span>Select your Messages language</span>
														</div>
														<select class="select">
															<option value="">Eglish US</option>
															<option value="">Eglish UK</option>
															<option value="">Russia</option>
														</select>
														<p>
															you will always get notifications you have turned on for individual <a href="#" title="">Manage All Subscriptions</a>
														</p>
													</div>
													</div>
												</div> --><!-- messages -->
												<!-- <div class="tab-pane fade" id="weather" role="tabpanel">
													<div class="set-title">
														<h5>Weather Widget Setting</h5>
														<span>Set your weather widget or page setting.</span>
														<div class="mesg-seting">
															<div class="set-title">
																<h6>Country & Timezone</h6>
																<span>Select your Country Time Zone</span>
															</div>
															<select class="select">
																<option value="">US (UTC-8)</option>
																<option value="">Ontario(UTC-7)</option>
																<option value="">Nova Scotia(UTC-5)</option>
															</select>
															<div class="set-title">
																<h6>Temperature Unit</h6>
															</div>
															<select class="select">
																<option value="">F° (Farenheit)</option>
																<option value="">C° (Celsius)</option>
															</select>
															<div class="set-title">
																<h6>Show Extended forecast</h6>
															</div>
															<div class="checkbox">
															  <label>
																<input type="checkbox" checked="checked"><i class="check-box"></i>
																  Show Extended Forecast on Widget. 
															  </label>
																<p><a href="#" title="">learn more</a></p>
															</div>
															<div class="set-title">
																<h6>Forecast Days</h6>
															</div>
															<select class="select">
																<option value="">Next Day</option>
																<option value="">Next week</option>
																<option value="">Next Month</option>
																<option value="">Next Year</option>
															</select>
															<p>
																you will always get Daily notifications you have turned on for individual.
															</p>
															<div>
															<form>
																<button class="main-btn" data-ripple="" type="submit">Save</button>
																<button class="main-btn3" data-ripple="" type="submit">Cancel</button>
																
															</form>	
															</div>
														</div>
													</div>
												</div> --><!-- weather widget setting -->
												<!-- <div class="tab-pane fade" id="page-manage" role="tabpanel">
													<div class="set-title">
														<h5>Page & sidebar</h5>
														<span>Deceide whether your profile will be hidden from search engine and what kind of data you want to use to imporve the recommendation and ads you see <a href="#" title="">Learn more</a></span>
													</div>
													<p class="p-info"><a href="manage-page.html">Click here</a> to go widget and page setting area</p>
												</div> --><!-- privacy -->
												<!-- <div class="tab-pane fade" id="privacy" role="tabpanel">
													<div class="set-title">
														<h5>Privacy & data</h5>
														<span>Deceide whether your profile will be hidden from search engine and what kind of data you want to use to imporve the recommendation and ads you see <a href="#" title="">Learn more</a></span>
													</div>
													<div class="onoff-options ">
														<form method="post">
															<div class="setting-row">
																<span>Search Privacy</span>
																<p>Hide your profile from search engine (Ex.google) <a href="#" title="">Learn more</a>
																</p>
																<input type="checkbox" id="switch0001" /> 
																<label for="switch0001" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="set-title">
																<h5>Personalization</h5>
															</div>	
															<div class="setting-row">
																<span>Search Privacy</span>
																<p>use sites you visit to improve which recommendation and ads you see. <a href="#" title="">Learn more</a>
																</p>
																<input type="checkbox" id="switch0002" /> 
																<label for="switch0002" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Search Privacy</span>
																<p>use information from our partners to improve which ads you see<a href="#" title="">Learn more</a>
																</p>
																<input type="checkbox" id="switch0003" /> 
																<label for="switch0003" data-on-label="ON" data-off-label="OFF"></label>
															</div>
														</form>
													</div>
												</div> --><!-- privacy -->
												<!-- <div class="tab-pane fade" id="security" role="tabpanel">
													<div class="set-title">
														<h5>Security Setting</h5>
														<span>trun on two factor authentication and check your list of connected device to keep your account posts safe <a href="#" title="">Learn More</a>.</span>
													</div>
													<div class="seting-box">
														<p>to turn on two-factor authentication, you must <a href="#" title=""> confirm Your Email </a> and <a href="#" title="">Set Password</a></p>
														<div class="set-title">
															<h5>Connected Devicese</h5>
														</div>
														<p>This is a list of devices that have logged into your account, Revok any session that you do not recognize. <a href="#" title="">Hide Sessions</a></p>
														<span>Last Accessed</span>
														<p>August 30, 2020 12:25AM</p>
														<span>Location</span>
														<p>Berlin, Germany (based on IP = 103.233.24.5)</p>
														<span>Device Type</span>
														<p>Chrome on windows 10</p>
													</div>
												</div> --><!-- security -->
												<!-- <div class="tab-pane fade" id="apps" role="tabpanel">
													<div class="set-title">
														<h5>Apps</h5>
														<span>Keep track of everywhere you have login with your pintik profile and remove access from apps you are no longer using with pitnik <a href="#" title="">Learn more</a></span>
													</div>
													<p class="p-info">You have not approved any app</p>
												</div> --><!-- apps -->
											</div>
										</div>
									</div>
								</div>	
							</div>
							
							<!-- centerl meta -->
							<!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="widget">
						<div class="foot-logo">
							<div class="logo">
								<a href="index.html" title=""><img src="<?php echo base_url(); ?>public/timeline2/images/logo2.png" alt=""></a>
							</div>	
							<p>
								The trio took this simple idea and built it into the world’s leading carpooling platform.
							</p>
						</div>
						<ul class="location">
							<li>
								<i class="ti-map-alt"></i>
								<p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
							</li>
							<li>
								<i class="ti-mobile"></i>
								<p>+1-56-346 345</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
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
				<div class="col-lg-2 col-md-4">
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
				<div class="col-lg-2 col-md-4">
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
				<div class="col-lg-2 col-md-4">
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
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright">© Pitnik 2020. All rights reserved.</span>
					<i><img src="<?php echo base_url(); ?>public/timeline2/images/credit-cards.png" alt=""></i>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="side-panel">
		<h4 class="panel-title">General Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>use night mode</span>
				<input type="checkbox" id="nightmode1"/> 
				<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notifications</span>
				<input type="checkbox" id="switch22" /> 
				<label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notification sound</span>
				<input type="checkbox" id="switch33" /> 
				<label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>My profile</span>
				<input type="checkbox" id="switch44" /> 
				<label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show profile</span>
				<input type="checkbox" id="switch55" /> 
				<label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
		<h4 class="panel-title">Account Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>Sub users</span>
				<input type="checkbox" id="switch66" /> 
				<label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>personal account</span>
				<input type="checkbox" id="switch77" /> 
				<label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Business account</span>
				<input type="checkbox" id="switch88" /> 
				<label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show me online</span>
				<input type="checkbox" id="switch99" /> 
				<label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Delete history</span>
				<input type="checkbox" id="switch101" /> 
				<label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Expose author name</span>
				<input type="checkbox" id="switch111" /> 
				<label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
	</div><!-- side panel -->	
	<script>
		$("#profile_form").submit(function(){

		var text='';
		var i=0;
		$( "#tags span" ).each(function( index ) {
    //alert( index + ": " + $(this).text() );
	    if(i!=0)
	    {
	    	text+=',';
	    }
    	text+=$(this).text();
    	i++;
});
		$("#skills").val(text);

		});
		function addorg()
		{
			var text='<div class="row">';
			 text+='<div class="col"><label>Institute name</label><input type="text" class="form-control" placeholder="Institute name" value="" name="institute_name[]"><input type="hidden" name="inpid[]" value="0"></div><div class="col"><label>From</label><input type="number" min="1900" max="2099" step="1" class="form-control" value="" name="institute_fromdate[]"></div><div class="col"><label>To</label><input type="number" min="1900" max="2099" step="1" class="form-control" value="" name="institute_enddate[]"></div>';
			 text+='</div>';
			$("#org").append(text);
		}
		

	</script>	
	<script>
		$(function(){ // DOM ready 

  // ::: TAGS BOX

  $("#tags input").on({
    focusout : function() {
      var txt = this.value.replace(/[^a-z0-9\+\-\.\#]/ig,''); // allowed characters
      if(txt) $("<span/>", {text:txt.toLowerCase(), insertBefore:this});
      this.value = "";
    },
    keyup : function(ev) {
      // if: comma|enter (delimit more keyCodes with | pipe)
      if(/(188|13)/.test(ev.which)) $(this).focusout(); 
    }
  });
  $('#tags').on('click', 'span', function() {
    if(confirm("Remove "+ $(this).text() +"?")) $(this).remove(); 
  });

});
		
	</script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js">
      </script>
	<script>
		$(function() {
    $( ".yearpicker" ).datepicker({dateFormat: 'yy'});
});​
	</script>
	<script src="<?php echo base_url(); ?>public/timeline2/js/main.min.js"></script>
	<script src="<?php echo base_url(); ?>public/timeline2/js/script.js"></script>
	<script src="<?php echo base_url();?>public/tagsinput/dist/bootstrap-tagsinput.min.js"></script>
	<script src="<?php echo base_url();?>public/tagsinput/assets/app.js"></script>
    <script src="<?php echo base_url();?>public/tagsinput/assets/app_bs3.js"></script>
</body>	

<!-- Mirrored from wpkixx.com/html/pitnik/setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jan 2021 12:26:59 GMT -->
</html>