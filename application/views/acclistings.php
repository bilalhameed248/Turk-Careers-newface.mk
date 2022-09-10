<?php include('timeline/include/header.php'); ?>
    <style>
  #tags{
  /*float:left;*/
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
  /*width:auto;*/
}
</style>
  <section>
    <div class="gap2 gray-bg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="row merged20" id="page-contents">
            
              <div class="col-lg-12 col-md-12">
                <div class="central-meta">
                  <div class="job-search-form">
                    <div class="jobbox-title">
                      <?php if(!isset($_SESSION['owner_logged_in'])) { ?>
                      <h5>Want to Explore Top rated academies</h5> <?php }else{ ?>
                        <h5>Your posted jobs</h5>
                      <?php } ?>
                      <span>Explore top rated jobs and Employers</span>
                    </div>
                    <a href="#" title=""><i class="fa fa-search-plus"></i> Advance Search</a>
                    <form method="post" class="c-form">
                      <div class="row merged10" style="position:relative; left: 18%;">
                        <div class="col-lg-2 col-md-3">
                          <span class="add-loc">
                            <input type="text" placeholder="title" id="acc_title" onkeyup="filterjobs();">
                            <!-- <i class="fa fa-map-marker"></i> -->
                          </span>
                          
                         
                        </div>
                        
                        <!-- <div class="col-lg-3 col-md-6">
                          <select>
                            <option>Accounts</option>
                            <option>Data Entry</option>
                            <option>Designing</option>
                            <option>Web Developing</option>
                            <option>Backend Designing</option>
                          </select>
                        </div> -->
                        <div class="col-lg-2 col-md-6 ">
                          <input type="numbers" placeholder="Not yet" id="acc_field" onkeyup="filterjobs()">
                        </div>
                        <div class="col-lg-1 col-md-12">
                          <!-- <button type="submit" class="main-btn">Find</button> -->
                        </div>
                      </div>
                    </form>
                    <!-- <button class="btn btn-primary" style="float:right;">Add new Job</button> -->
                    <?php if(isset($_SESSION['owner_logged_in'])) { ?>
                    <button type="button" class="btn btn-primary" style="float:right;" id="" name="" data-toggle="modal" data-target="#myModal" >Add new job</button> <?php } ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <aside class="sidebar static left">
                  
                  <div class="widget" style="<?php if(isset($_SESSION['owner_logged_in'])){ echo"display:none";} ?>">
                    <h4 class="widget-title">Jobs of your interests <a class="see-all" href="#" title="">see all</a></h4>
                    <ul class="recent-jobs">
                      <?php 
                      if(isset($_SESSION['logged_in']))
                      {
                      foreach($jobs as $job){ ?>
                      <li>
                        <h6><a href="#" title=""><?php echo $job->title; ?></a> <span><?php echo $job->salary_offered_min.'-'.$job->salary_offered_max;?>/month</span></h6>
                        <p>Need graphic desiger urgently from the Canada, ontario only.</p>
                        <span>by: <a href="#" title="">web house</a></span>
                      </li>
                      <?php } } ?>
                      
                    </ul>
                  </div><!-- top recent jobs -->
                  <div class="widget stick-widget">
                    <h4 class="widget-title">Featured Companies <a class="see-all" href="#" title="">See All</a></h4>
                    <ul class="featured-comp">
                      <li>
                      <a href="#" title="Color Hands inc" data-toggle="tooltip"><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company1.png" alt=""></a>
                      </li>
                      <li>
                      <a href="#" title="Macrosoft inc" data-toggle="tooltip"><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company2.png" alt=""></a>
                      </li>
                      <li>
                      <a href="#" title="EBM inc" data-toggle="tooltip"><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company3.png" alt=""></a>
                      </li>
                      <li>
                      <a href="#" title="Boogle inc" data-toggle="tooltip"><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company4.png" alt=""></a>
                      </li>
                      <li>
                      <a href="#" title="Color Hands inc" data-toggle="tooltip"><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company5.png" alt=""></a>
                      </li>
                      <li>
                      <a href="#" title="Macrosoft inc" data-toggle="tooltip"><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company6.png" alt=""></a>
                      </li>
                      <li>
                      <a href="#" title="EBM inc" data-toggle="tooltip"><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company7.png" alt=""></a>
                      </li>
                      <li>
                      <a href="#" title="Boogle inc" data-toggle="tooltip"><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company8.png" alt=""></a>
                      </li>
                    </ul>
                  </div><!-- feature company logos -->
                </aside>
              </div><!-- sidebar -->
              <div class="col-lg-6" id="loadjobs">
                
              </div><!-- centerl meta -->
              <div class="col-lg-3">
                <aside class="sidebar static right">
                  <div class="widget">
                    <h4 class="widget-title">Profile intro</h4>
                    <ul class="short-profile">
                      <li>
                        <span>About me</span>
                        <p>
                          <?php 
                          if(isset($_SESSION['logged_in']))
                            {
                              echo $user_data->about;
                            }
                            elseif(isset($_SESSION['owner_logged_in']))
                            {
                              echo $user_data->company_desc; 
                            } ?>
                              
                            </p>
                      </li>
                      <?php 
                      if(isset($_SESSION['logged_in']))
                      {
                        ?>
                      <li>
                        <span>My CV</span>
                        <p><a href="<?php echo base_url().$user_data->cv_path;?>" target=_blank>CV Link</a></p>
                      </li>
                    <?php } ?>
                      <li>
                        <span>My Email</span>
                        <p><?php if(isset($_SESSION['logged_in'])){echo $user_data->email;}elseif(isset($_SESSION['owner_logged_in'])){echo $user_data->owner_email;} ?></p>
                      </li>
                    </ul>
                  </div><!-- complete profile widget -->
                  <div class="widget">
                    <?php if(!isset($_SESSION['logged_in'])) {   ?>
                    <div class="banner high-opacity purple">
                      <div class="bg-image" style="background-image: url(images/resources/baner-widgetbg2.jpg)"></div>
                      <div class="post-job">
                        <img src="<?php echo base_url(); ?>public/timeline2/images/job-icon.png" alt="">
                        <span>Post a new job</span>
                        <p>Create a new job post for hire a new talented from the pitnik</p>
                        <a class="main-btn" href="#" title="">Post Job</a>
                      </div>
                    </div>
                    <?php  } ?>                    
                  </div><!-- create new job -->
                  <div class="widget">
                    <h4 class="widget-title">Company Highlights <a title="" href="#" class="see-all">See All</a></h4>
                    <ul class="company-posts">
                      <li>
                        <figure><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company1.png" alt=""></figure>
                        <div class="position-meta">
                          <h6><a href="#" title="">Php Developers</a></h6>
                          <a href="#" title="">Web House</a>
                          <span>20 posts</span>
                        </div>
                      </li>
                      <li>
                        <figure><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company4.png" alt=""></figure>
                        <div class="position-meta">
                          <h6><a href="#" title="">Designer</a></h6>
                          <a href="#" title="">Web House</a>
                          <span>12 posts</span>
                        </div>
                      </li>
                      <li>
                        <figure><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company3.png" alt=""></figure>
                        <div class="position-meta">
                          <h6><a href="#" title="">Data Entry</a></h6>
                          <a href="#" title="">Web House</a>
                          <span>09 posts</span>
                        </div>
                      </li>
                      <li>
                        <figure><img src="<?php echo base_url(); ?>public/timeline2/images/resources/company2.png" alt=""></figure>
                        <div class="position-meta">
                          <h6><a href="#" title="">QA Person</a></h6>
                          <a href="#" title="">Web House</a>
                          <span>02 posts</span>
                        </div>
                      </li>
                    </ul>
                  </div><!-- company Highlights -->
                  <div class="widget pitnik-links stick-widget">
                    <ul>
                      <li><a href="#" title="">about</a></li>
                      <li><a href="#" title="">career</a></li>
                      <li><a href="#" title="">advertise</a></li>
                      <li><a href="#" title="">Pitnik Apps</a></li>
                      <li><a href="#" title="">Pitnik Blog</a></li>
                      <li><a href="#" title="">Help</a></li>
                      <li><a href="#" title="">Pitnik Gifts</a></li>
                      <li><a href="#" title="">contetn policy</a></li>
                      <li><a href="#" title="">User Policy</a></li>
                    </ul>
                    <p>© Pitnik 2020. All Rights Reserved.</p>
                  </div><!-- little links --> 
                </aside>
              </div><!-- sidebar -->
            </div>  
          </div>
        </div>
      </div>
    </div>  
  </section><!-- content -->

  <!-- <a title="Your Cart Items" href="shop-cart.html" class="shopping-cart" data-toggle="tooltip">Cart <i class="fa fa-shopping-bag"></i><span>02</span></a> -->

  <div class="bottombar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <span class="copyright">© Pitnik 2020. All rights reserved.</span>
          <i><img src="<?php echo base_url(); ?>public/timeline2/images/credit-cards.png" alt=""></i>
        </div>
      </div>
    </div>
  </div><!-- bottom bar -->
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
  
  <div class="popup-wraper2">
    <div class="popup post-sharing">
      <span class="popup-closed"><i class="ti-close"></i></span>
      <div class="popup-meta">
        <div class="popup-head">
          <select data-placeholder="Share to friends..." multiple class="chosen-select multi">
            <option>Share in your feed</option>
            <option>Share in friend feed</option>
            <option>Share in a page</option>
            <option>Share in a group</option>
            <option>Share in message</option>
          </select>
          <div class="post-status">
            <span><i class="fa fa-globe"></i></span>
            <ul>
              <li><a href="#" title=""><i class="fa fa-globe"></i> Post Globaly</a></li>
              <li><a href="#" title=""><i class="fa fa-user"></i> Post Private</a></li>
              <li><a href="#" title=""><i class="fa fa-user-plus"></i> Post Friends</a></li>
            </ul>
          </div>
        </div>
        <div class="postbox">
          <div class="post-comt-box">
            <form method="post">
              <input type="text" placeholder="Search Friends, Pages, Groups, etc....">
              <textarea placeholder="Say something about this..."></textarea>
              <div class="add-smiles">
                <span title="add icon" class="em em-expressionless"></span>
                <div class="smiles-bunch">
                  <i class="em em---1"></i>
                  <i class="em em-smiley"></i>
                  <i class="em em-anguished"></i>
                  <i class="em em-laughing"></i>
                  <i class="em em-angry"></i>
                  <i class="em em-astonished"></i>
                  <i class="em em-blush"></i>
                  <i class="em em-disappointed"></i>
                  <i class="em em-worried"></i>
                  <i class="em em-kissing_heart"></i>
                  <i class="em em-rage"></i>
                  <i class="em em-stuck_out_tongue"></i>
                </div>
              </div>

              <button type="submit"></button>
            </form> 
          </div>
          <figure><img src="<?php echo base_url(); ?>public/timeline2/images/resources/share-post.jpg" alt=""></figure>
          <div class="friend-info">
            <figure>
              <img alt="" src="<?php echo base_url(); ?>public/timeline2/images/resources/admin.jpg">
            </figure>
            <div class="friend-name">
              <ins><a title="" href="time-line.html">Jack Carter</a> share <a title="" href="#">link</a></ins>
              <span>Yesterday with @Jack Piller and @Emily Stone at the concert of # Rock'n'Rolla in Ontario.</span>
            </div>
          </div>
          <div class="share-to-other">
            <span>Share to other socials</span>
            <ul>
              <li><a class="facebook-color" href="#" title=""><i class="fa fa-facebook-square"></i></a></li>
              <li><a class="twitter-color" href="#" title=""><i class="fa fa-twitter-square"></i></a></li>
              <li><a class="dribble-color" href="#" title=""><i class="fa fa-dribbble"></i></a></li>
              <li><a class="instagram-color" href="#" title=""><i class="fa fa-instagram"></i></a></li>
              <li><a class="pinterest-color" href="#" title=""><i class="fa fa-pinterest-square"></i></a></li>
            </ul>
          </div>
          <div class="copy-email">
            <span>Copy & Email</span>
            <ul>
              <li><a href="#" title="Copy Post Link"><i class="fa fa-link"></i></a></li>
              <li><a href="#" title="Email this Post"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
          <div class="we-video-info">
            <ul>
              <li>
                <span title="" data-toggle="tooltip" class="views" data-original-title="views">
                  <i class="fa fa-eye"></i>
                  <ins>1.2k</ins>
                </span>
              </li>
              <li>
                <span title="" data-toggle="tooltip" class="views" data-original-title="views">
                  <i class="fa fa-share-alt"></i>
                  <ins>20k</ins>
                </span>
              </li>
            </ul>
            <button class="main-btn color" data-ripple="">Submit</button>
            <button class="main-btn cancel" data-ripple="">Cancel</button>
          </div>
        </div>
      </div>  
    </div>
  </div><!-- share popup -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                        <h4 class="modal-title" id="myModalLabel">Register a new Job</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="addjob_form" action="<?php echo base_url();?>jobs/insertjob">
                          <div class="form-group">
                            <label for="jobname">Job Name</label>
                            <input type="text" name="job_title" class="form-control" id="jobname" aria-describedby="emailHelp" placeholder="Enter Job name">
                           
                          </div>
                          <div class="form-group">
                            <label for="description">Job Description</label>
                            <textarea cols="5" rows="5" name="description"></textarea>
                          </div>
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                          <div class="form-group">
                            <label for="salary">Required skills</label><br>
                            <div  id="tags">
                              
                                
                              
                              <input type="text" class="form-control" value=""  placeholder="press comma after skill name" />
                              <input type="hidden" name="skills" value="" id="skills">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="salary">Min Offered salary</label>
                            <input type="text" class="form-control" id="min_salary" aria-describedby="emailHelp" placeholder="Enter Expected min salary" name="min_salary">
                          </div>
                          <div class="form-group">
                            <label for="salary"> Max Offered salary</label>
                            <input type="text" class="form-control" id="max_salary" aria-describedby="emailHelp" placeholder="Enter Expected max salary" name="max_salary">
                          </div>
                          <div class="form-group">
                            <label for="salary">Required Experience</label>
                            <input type="text" class="form-control" id="experience" aria-describedby="emailHelp" placeholder="Enter Required experience" name="experience">
                          </div>
                          <div class="form-group" style="">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                          
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        <button type="button" class="btn btn-primary" onclick="onUpload()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
  <div class="popup-wraper3">
    <div class="popup">
      <span class="popup-closed"><i class="ti-close"></i></span>
      <div class="popup-meta">
        <div class="popup-head">
          <h5>Report Post</h5>
        </div>
        <div class="Rpt-meta">
          <span>We're sorry something's wrong. How can we help?</span>
          <form method="post" class="c-form">
            <div class="form-radio">
              <div class="radio">
              <label>
                <input type="radio" name="radio" checked="checked"><i class="check-box"></i>It's spam or abuse
              </label>
              </div>
              <div class="radio">
              <label>
                <input type="radio" name="radio"><i class="check-box"></i>It breaks r/technology's rules
              </label>
              </div>
              <div class="radio">
              <label>
                <input type="radio" name="radio"><i class="check-box"></i>Not Related
              </label>
              </div>
              <div class="radio">
              <label>
                <input type="radio" name="radio"><i class="check-box"></i>Other issues
              </label>
              </div>
            </div>
          <div>
            <label>Write about Report</label>
            <textarea placeholder="write someting about Post" rows="2"></textarea>
          </div>
          <div>
            <button data-ripple="" type="submit" class="main-btn">Submit</button>
            <a href="#" data-ripple="" class="main-btn3 cancel">Close</a>
          </div>
          </form> 
        </div>
      </div>  
    </div>
  </div><!-- report popup -->
  
  <div class="popup-wraper1">
    <div class="popup direct-mesg">
      <span class="popup-closed"><i class="ti-close"></i></span>
      <div class="popup-meta">
        <div class="popup-head">
          <h5>Send Message</h5>
        </div>
        <div class="send-message">
          <form method="post" class="c-form">
            <input type="text" placeholder="Sophia">
            <textarea placeholder="Write Message"></textarea>
            <button type="submit" class="main-btn">Send</button>
          </form>
          <div class="add-smiles">
            <div class="uploadimage">
              <i class="fa fa-image"></i>
              <label class="fileContainer">
                <input type="file">
              </label>
            </div>
            <span title="add icon" class="em em-expressionless"></span>
            <div class="smiles-bunch">
              <i class="em em---1"></i>
              <i class="em em-smiley"></i>
              <i class="em em-anguished"></i>
              <i class="em em-laughing"></i>
              <i class="em em-angry"></i>
              <i class="em em-astonished"></i>
              <i class="em em-blush"></i>
              <i class="em em-disappointed"></i>
              <i class="em em-worried"></i>
              <i class="em em-kissing_heart"></i>
              <i class="em em-rage"></i>
              <i class="em em-stuck_out_tongue"></i>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div><!-- send message popup --> 
<script type="text/javascript">
  $("#addjob_form").submit(function(){

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
</script>
  <script type="text/javascript">
  	

	function filterjobs()
	{
		var title=$("#acc_title").val();
		var field2=$("#acc_field").val();
    
		var url="<?php echo base_url();?>home/filter_acc";
		$.post(url , {title:title}).done(function(data) {
		  $("#loadjobs").html(data);
		});
	}
  	filterjobs();
  </script>
  <script>
    $(function(){
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
    <script src="<?php echo base_url();?>public/timeline2/js/jquery.eventCalendar.min.js?>"></script>
  <?php 
 include('timeline/include/footer.php'); ?>
