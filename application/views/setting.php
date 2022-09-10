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
#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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
												<div class="tab-pane fade show active" id="edit-profile" >
													<div class="set-title">
														<h5>Edit Profile</h5>
														<span>People on Pitnik will get to know you with the info below</span>
													</div>
													<div class="setting-meta">
														<div class="change-photo">
															<figure><img id="myImg" src="<?php echo base_url().$user->profile_pic;?>" style="width:100px;height:100px" alt=""></figure>
															<div id="myModal" class="modal">
																<span class="close">&times;</span>
																<img class="modal-content" id="img01">
																<div id="caption"></div>
															</div>
															<div class="edit-img">
																<form class="edit-phto" method="POST" action="<?php echo base_url();?>home/updatedp" enctype="multipart/form-data">
																	
																	<label class="fileContainer">
																		<i class="fa fa-camera-retro"></i>
																		Change DP
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
														<form method="POST" id="profile_form" class="c-form" action="<?php echo base_url(); ?>home/profile" >
															<div class="row">
															    <div class="col">
															    	<label>First name</label>
															      <input type="text" class="form-control" placeholder="First name" value="<?php echo $user->fname; ?>" name="fname">
															    </div>
															    <div class="col">
															    	<label>Last name</label>
															      <input type="text" class="form-control" placeholder="Last name" value="<?php echo $user->lname; ?>" name="lname">
															    </div>
															 </div>
															<div class="row">
															    <div class="col">
															    	<label>Email</label>
															      <input type="email" class="form-control" placeholder="email" value="<?php echo $user->email; ?>"name="email">
															    </div>
															    <div class="col">
															    	<label>Phone number</label>
															     <input type="phone_number" class="form-control" placeholder="phone_number" value="<?php echo $user->phone_number; ?>"name="phone_number">
															    </div>
															 </div>
															
															
															<!-- <div>
																<label>Gender</label>
																<div class="form-radio">
																  <div class="radio">
																	<label>
																	  <input type="radio" checked="checked" name="radio[]"><i class="check-box"></i>Male
																	</label>
																  </div>
																  <div class="radio">
																	<label>
																	  <input type="radio" name="radio[]"><i class="check-box"></i>Female
																	</label>
																  </div>
																	<div class="radio">
																	<label>
																	  <input type="radio" name="radio[]"><i class="check-box"></i>Custom
																	</label>
																  </div>
																</div>
															</div> -->
															<div>
																<label>about your profile</label>
																<textarea name="about" rows="3" placeholder="write someting about yourself"><?php echo $user->about; ?></textarea>
															</div>	
															<h5>Education</h5>
															<span style="float:right" onclick="addorg();"><i class="fas fa-plus"></i></span>
															<div id="org">

																
																 <?php if($num_institutes>0){ ?>
																 	<?php foreach($institutes as $ins){

																 		?>
																 	<div class="row" >

																    <div class="col">
																    	<label>Institute name</label>
																      <input type="text" class="form-control" placeholder="Institute name" value="<?php echo $ins->institute_name; ?>" name="institute_name[]">
																      <input type="hidden" name="inpid[]" value="<?php echo $ins->id; ?>">
																    </div>
																    <div class="col">
																    	<label>From</label>
																      <input type="text" class="form-control" value="<?php echo $ins->from_date; ?>" name="institute_fromdate[]">
																    </div>
																    <div class="col">
																    	<label>To</label>
																      <input type="text" class="form-control" value="<?php echo $ins->to_date; ?>" name="institute_enddate[]">
																    </div>
																    
																 </div>


																 <?php }}else{ ?>
																 	<div>
																 	<div class="row" >

																    <div class="col">
																    	<label>Institute name</label>
																      <input type="text" class="form-control" placeholder="Institute name" value="" name="institute_name[]">
																      <input type="hidden" name="inpid[]" value="0">
																    </div>
																    <div class="col">
																    	<label>From</label>
																      <input type="number" min="1900" max="2099" step="1" class="form-control" value="" name="institute_fromdate[]">
																    </div>
																    <div class="col">
																    	<label>To</label>
																      <input type="number" min="1900" max="2099" step="1" class="form-control" value="" name="institute_enddate[]">
																    </div>
																    
																 </div>
																</div>

																 <?php } ?>
															</div>
															
															<div id="skillsec">
																<label>Skill name</label>
																<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

																<div id="tags">

																  <?php if($skill_exist){ $skills=explode(",",$user->skills);foreach($skills as $skill){ ?>
																  	<span><?php echo $skill; ?></span>
																  <?php } } ?>
																  <input type="text" value=""  placeholder="press comma after skill name" />
																  <input type="hidden" name="skills" value="" id="skills">
																</div>
																
 
																
															</div>
															<!-- <span onclick="loadskills()"><i class="fas fa-plus"></i></span> -->

															<div>
																<button type="submit" data-ripple="">Cancel</button>
																<button type="submit" data-ripple="" name="submit">Save</button>
															</div>
														</form>
													</div>
												</div><!-- edit profile -->
												<div class="tab-pane fade" id="notifi" role="tabpanel">
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
												</div><!-- notification -->
												<div class="tab-pane fade" id="messages" role="tabpanel">
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
												</div><!-- messages -->
												<div class="tab-pane fade" id="weather" role="tabpanel">
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
												</div><!-- weather widget setting -->
												<div class="tab-pane fade" id="page-manage" role="tabpanel">
													<div class="set-title">
														<h5>Page & sidebar</h5>
														<span>Deceide whether your profile will be hidden from search engine and what kind of data you want to use to imporve the recommendation and ads you see <a href="#" title="">Learn more</a></span>
													</div>
													<p class="p-info"><a href="manage-page.html">Click here</a> to go widget and page setting area</p>
												</div><!-- privacy -->
												<div class="tab-pane fade" id="privacy" role="tabpanel">
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
												</div><!-- privacy -->
												<div class="tab-pane fade" id="security" role="tabpanel">
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
												</div><!-- security -->
												<div class="tab-pane fade" id="apps" role="tabpanel">
													<div class="set-title">
														<h5>Apps</h5>
														<span>Keep track of everywhere you have login with your pintik profile and remove access from apps you are no longer using with pitnik <a href="#" title="">Learn more</a></span>
													</div>
													<p class="p-info">You have not approved any app</p>
												</div><!-- apps -->
											</div>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
											<!-- <h4 class="widget-title">Your page</h4>	 -->
											<!-- <div class="your-page">
												<figure>
													<a title="" href="#"><img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/friend-avatar9.jpg"></a>
												</figure>
												<div class="page-meta">
													<a class="underline" title="" href="#">My page</a>
													<span><i class="ti-comment"></i>Messages <em class="bg-blue">9</em></span>
													<span><i class="ti-bell"></i>Notifications <em class="bg-purple">2</em></span>
												</div>
												<div class="page-likes">
													<ul class="nav nav-tabs likes-btn">
														<li class="nav-item"><a data-toggle="tab" href="#link1" class="active">likes</a></li>
														 <li class="nav-item"><a data-toggle="tab" href="#link2" class="">views</a></li>
													</ul>
													<div class="tab-content">
													  <div id="link1" class="tab-pane active fade show">
														<span><i class="ti-heart"></i>884</span>
														  <a title="weekly-likes" href="#">35 new likes this week</a>
														  <div class="users-thumb-list">
														  	<a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-1.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="frank">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-2.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-3.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-4.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-5.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-6.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-7.jpg">  
															</a>  
														  </div>
													  </div>
													  <div id="link2" class="tab-pane fade">
														  <span><i class="ti-eye"></i>445</span>
														  <a title="weekly-likes" href="#">440 new views this week</a>
														  <div class="users-thumb-list">
														  	<a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-1.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="frank">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-2.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-3.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-4.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-5.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-6.jpg">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
																<img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/userlist-7.jpg">  
															</a>  
														  </div>
													  </div>
													</div>
												</div>
											</div> -->
											<h4 class="widget-title">Profile intro</h4>
                                        <ul class="short-profile">
                                            <li>
                                                <span>about me</span>
                                                <p><?php echo $user->about; ?></p>
                                            </li>
                                           <?php  if (isset($_SESSION['logged_in'])) {  ?>
                                            <li>
                                                <span>My CV</span>
                                                <p><a href="<?php echo $user->cv_path; ?>" target=_blank>CV Link</a> </p>
                                            </li>
                                            <li>
                                                <span>My Skills</span>
                                                <p><?php
                                                    $str_arr = explode(",", $user->skills);
                                                    foreach ($str_arr as $str_arr1) {
                                                        echo $str_arr1." ";
                                                    }
                                                    ?></p>
                                            </li>
                                            <li>
                                                <span>My Experience</span>
                                                <p><?php echo $user->experience; ?></p>
                                            </li>
                                            <?php  }  ?>
                                        </ul>
										</div>
										<div class="widget">
                                        <div class="banner high-opacity purple">
                                            <div class="bg-image" style="background-image: url(images/resources/baner-widgetbg2.jpg)"></div>
                                            <div class="post-job">
                                                <img src="<?php echo base_url();?>public/timeline2/images/job-icon.png" alt="">
                                                <span>View Academies</span>
                                                <p>Click to see all academies list, buy vouchers, and many more...</p>
                                                <a class="main-btn" href="<?php echo base_url().'home/list_academies'; ?>" title="">View Academies</a>
                                            </div>
                                        </div>
                                    </div>
								</aside>
							</div><!-- sidebar -->
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
	<!-- image enlarge script -->
	<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
	<!-- image enlarge script end -->
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