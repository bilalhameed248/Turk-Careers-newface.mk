<?php include('include/header.php'); ?>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container mt-5">
  <h2 class="text-center">Search for jobs</h2>
</div>
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
                      <!-- <h5>Looking for a job</h5> -->
                       <?php }else{ ?>
                        <!-- <h5>Your posted jobs</h5> -->
                      <?php } ?>
                      <!-- <span>Explore top rated jobs and Employers</span> -->
                    </div>
                   <!--  <a href="#" title="">
                      <i class="fa fa-search-plus">
                    </i> Advance Search</a> -->
                    <form method="post" class="c-form">
                      <div class="row merged10" style="position:relative; left: 18%;">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-3"></div>
                          <!--   <div class="col-lg-3">
                              <input type="text" 
                              placeholder="&#xF007; &nbsp; Add a job title"
                               id="title" onkeyup="filterjobs()" style="font-size: 16px; color: #7b91b1; font-family:Arial, FontAwesome">
                            </div> -->
                              <div class="col-lg-3">
                              <style type="text/css">
                                select option{
                                  font-family: 'Arial, FontAwesome';
                                  font-size: 16px;
                                  color: #7b91b1;
                                  color: #7b91b1;
                                  }
                              </style>
                                <select>
                                <option selected> <i class="fas fa-user"> Add a Job title</i></option>
                                <option>Engineering</option>
                                <option>Software Engineer</option>
                                <option>Mobile Developer</option>
                                <option>iOS Developer</option>
                                <option>Android Developer</option>
                                <option>Frontend Engineer</option>
                                <option>Backend Engineer</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                              <span class="add-loc">
                            <input type="text"  placeholder="&#xf041; &nbsp; Add a Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" id="location" onkeyup="filterjobs();" style=" color: #7b91b1; font-family:Arial, FontAwesome">
                            <!-- <i class="fa fa-map-marker"></i> -->
                          </span>
                            </div>
                            <div class="col-lg-3"></div>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                          
                          
                         
                        </div>
                        <div class="col-lg-2 col-md-9">
                          
                        </div>
                        
                        <div class="col-lg-2 col-md-6" style="display: none;">
                          <input type="numbers" placeholder="Expected salary" id="salary" onkeyup="filterjobs()">
                        </div>
                        <div class="col-lg-1 col-md-12">
                          
                        </div>
                      </div>
                    </form>
                    <?php if(isset($_SESSION['owner_logged_in'])) { ?>
                    <!-- <button type="button" class="btn btn-primary" style="float:right;" id="" name="" data-toggle="modal" data-target="#myModal" >Add new job</button> -->
                     <?php } ?>
                  </div>
                </div>
              </div>

              <div class="col-lg-3">
                <aside class="sidebar static left">
                  <div class="widget stick-widget" style="background: none; border: none;">
                   <!--  <h4 class="widget-title">Featured Companies <a class="see-all" href="<?php //echo base_url().'home/view_all_academies'?>" title="">See All</a></h4>
                    <ul class="featured-comp">
                      <?php// foreach($academies as $academy) {?>
                      <li>

                      <a href="<?php //echo $academy['academy_website_url'];?>" title="<?php// echo $academy['academy_name']; ?>" data-toggle="tooltip">
                        <img style="height: 50px; width: 50px;" src="<?php //echo base_url().$academy['academy_logo']; ?>" alt="company_logo">
                      </a>

                      </li>
                    <?php //} ?>
                    </ul> -->
                    <style type="text/css">
                      svg{
                        color: #385075;
                        width: 214px;
                        height: 24px;
                      }
                    </style>
                    <svg class="mt-5" fill="none" height="16" viewBox="0 0 16 16" width="16"><path d="M2.56684 4.23096H13.1765C14.3177 4.23096 15.2433 5.15669 15.2433 6.29921V12.2062C15.2433 13.3487 14.3177 14.2744 13.1765 14.2744H2.56684C1.42562 14.2744 0.5 13.3487 0.5 12.2062V6.29921C0.5 5.15669 1.42562 4.23096 2.56684 4.23096Z" stroke="currentColor"></path><mask fill="white" id="path-2-inside-1"><path clip-rule="evenodd" d="M4.87891 3.90224C4.87891 2.4837 5.44618 1.33398 6.14522 1.33398H9.6019C10.3009 1.33398 10.8682 2.4837 10.8682 3.90224" fill-rule="evenodd"></path></mask><path d="M6.47891 3.90224C6.47891 3.38456 6.5858 2.9948 6.68491 2.79385C6.73437 2.69354 6.75182 2.70076 6.69421 2.75018C6.62637 2.80838 6.4365 2.93398 6.14522 2.93398V-0.266016C4.85136 -0.266016 4.12376 0.752284 3.81494 1.37847C3.45565 2.10701 3.27891 3.00138 3.27891 3.90224H6.47891ZM6.14522 2.93398H9.6019V-0.266016H6.14522V2.93398ZM9.6019 2.93398C9.31062 2.93398 9.12075 2.80838 9.05291 2.75018C8.9953 2.70076 9.01274 2.69354 9.06221 2.79385C9.16132 2.9948 9.26821 3.38456 9.26821 3.90224H12.4682C12.4682 3.00138 12.2915 2.10701 11.9322 1.37847C11.6234 0.752284 10.8958 -0.266016 9.6019 -0.266016V2.93398Z" fill="currentColor" mask="url(#path-2-inside-1)"></path><path d="M8.727 7.54053H7.01577C6.54323 7.54053 6.16016 7.92381 6.16016 8.39661C6.16016 8.86941 6.54323 9.2527 7.01577 9.2527H8.727C9.19954 9.2527 9.58262 8.86941 9.58262 8.39661C9.58262 7.92381 9.19954 7.54053 8.727 7.54053Z" fill="currentColor"></path><path d="M0.597656 11.1792H15.2643" stroke="currentColor"></path></svg>
                    <span>Jobs</span>
                    <br><br>
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24"><path d="M23 21.4783C23 21.732 22.8992 21.9752 22.7198 22.1546C22.5405 22.334 22.2972 22.4348 22.0435 22.4348H1.95652C1.70284 22.4348 1.45954 22.334 1.28016 22.1546C1.10078 21.9752 1 21.732 1 21.4783V15.7391H7.69565V16.6957C7.69717 17.2026 7.8992 17.6883 8.25764 18.0467C8.61608 18.4051 9.10179 18.6072 9.6087 18.6087H14.3913C14.8982 18.6072 15.3839 18.4051 15.7424 18.0467C16.1008 17.6883 16.3028 17.2026 16.3043 16.6957V15.7391H23V21.4783Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M1 15.7391L4.07139 10.4783C4.1551 10.3333 4.27539 10.2128 4.42025 10.1289C4.56511 10.0449 4.72946 10.0005 4.89687 10H19.1031C19.2705 10.0005 19.4349 10.0449 19.5798 10.1289C19.7246 10.2128 19.8449 10.3333 19.9286 10.4783L23 15.7391" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    <span>Applied</span>
                    <br><br>
                    <svg fill="none" height="24" viewBox="0 0 16 16" width="24"><path d="M8 0.557129C3.58867 0.557129 0 3.5398 0 7.20713C0.00988202 8.04845 0.196406 8.87832 0.547486 9.64296C0.898567 10.4076 1.40637 11.0899 2.038 11.6458L0.620667 14.4751C0.558582 14.5988 0.53655 14.7388 0.557626 14.8756C0.578702 15.0124 0.641842 15.1393 0.738283 15.2386C0.834724 15.3379 0.959684 15.4047 1.09582 15.4298C1.23196 15.4548 1.37252 15.4369 1.498 15.3785L5.48533 13.5225C6.30487 13.7455 7.15064 13.8577 8 13.8558C12.4113 13.8558 16 10.8725 16 7.2058C16 3.53913 12.4113 0.557129 8 0.557129ZM8 12.5238C7.19552 12.5255 6.39523 12.4078 5.62533 12.1745C5.46799 12.1265 5.29845 12.1383 5.14933 12.2078L3.10267 13.1605C3.07128 13.1751 3.03611 13.1796 3.00204 13.1733C2.96798 13.1671 2.93671 13.1504 2.91259 13.1255C2.88846 13.1006 2.87268 13.0689 2.86744 13.0347C2.8622 13.0004 2.86775 12.9654 2.88333 12.9345L3.46267 11.7778C3.53093 11.6414 3.55036 11.4857 3.51773 11.3368C3.48509 11.1878 3.40236 11.0545 3.28333 10.9591C2.69392 10.5236 2.21182 9.9592 1.87386 9.30893C1.5359 8.65867 1.35102 7.93976 1.33333 7.20713C1.33333 4.2738 4.324 1.89046 8 1.89046C11.676 1.89046 14.6667 4.27513 14.6667 7.20713C14.6667 10.1391 11.676 12.5238 8 12.5238Z" fill="currentColor"></path></svg>
                    <span>Messages</span>
                    <br><br>
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24"><path d="M20 11V22C20 22.2652 19.8946 22.5196 19.7071 22.7071C19.5196 22.8946 19.2652 23 19 23H2C1.73478 23 1.48043 22.8946 1.29289 22.7071C1.10536 22.5196 1 22.2652 1 22V3C1 2.73478 1.10536 2.48043 1.29289 2.29289C1.48043 2.10536 1.73478 2 2 2H15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M12.324 14.507L7.375 16.627L9.496 11.677L20.174 1L23.002 3.828L12.324 14.507Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M21.1669 5.66402L18.3379 2.83502" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <span>Assessments</span>
                  </div>
                  <div class="widget" style="<?php if(isset($_SESSION['owner_logged_in'])){ echo"display:none";} ?>">
                    <h4 class="widget-title">Jobs of your interests 
                      <!-- <a class="see-all" href="#" title="">see all</a> -->
                    </h4>
                    <ul class="recent-jobs">
                      <?php foreach($jobs as $job){ ?>
                      <li>
                        <h6><a href="#" title=""><?php echo $job->title; ?></a> <span><?php echo $job->salary_offered_min.'-'.$job->salary_offered_max;?>/month</span></h6>
                        <p><?php echo substr($job->description,0,150)."..."?><a href="<?php echo base_url().'jobs/detail/'.$job->jid;?>" style="color: blue;">See More</a></p>
                        <span>by: <a href="#" title=""><?php echo $job->company_name; ?></a></span>
                      </li>
                      <?php } ?>
                      
                    </ul>
                  </div><!-- top recent jobs -->
                  <div class="widget stick-widget" style="background: none; border: none;">
                   <!--  <h4 class="widget-title">Featured Companies <a class="see-all" href="<?php //echo base_url().'home/view_all_academies'?>" title="">See All</a></h4>
                    <ul class="featured-comp">
                      <?php// foreach($academies as $academy) {?>
                      <li>

                      <a href="<?php //echo $academy['academy_website_url'];?>" title="<?php// echo $academy['academy_name']; ?>" data-toggle="tooltip">
                        <img style="height: 50px; width: 50px;" src="<?php //echo base_url().$academy['academy_logo']; ?>" alt="company_logo">
                      </a>

                      </li>
                    <?php //} ?>
                    </ul> -->
                    <style type="text/css">
                      svg{
                        color: #385075;
                        width: 214px;
                        height: 24px;
                      }
                    </style>
                    <svg class="mt-5" fill="none" height="16" viewBox="0 0 16 16" width="16"><path d="M2.56684 4.23096H13.1765C14.3177 4.23096 15.2433 5.15669 15.2433 6.29921V12.2062C15.2433 13.3487 14.3177 14.2744 13.1765 14.2744H2.56684C1.42562 14.2744 0.5 13.3487 0.5 12.2062V6.29921C0.5 5.15669 1.42562 4.23096 2.56684 4.23096Z" stroke="currentColor"></path><mask fill="white" id="path-2-inside-1"><path clip-rule="evenodd" d="M4.87891 3.90224C4.87891 2.4837 5.44618 1.33398 6.14522 1.33398H9.6019C10.3009 1.33398 10.8682 2.4837 10.8682 3.90224" fill-rule="evenodd"></path></mask><path d="M6.47891 3.90224C6.47891 3.38456 6.5858 2.9948 6.68491 2.79385C6.73437 2.69354 6.75182 2.70076 6.69421 2.75018C6.62637 2.80838 6.4365 2.93398 6.14522 2.93398V-0.266016C4.85136 -0.266016 4.12376 0.752284 3.81494 1.37847C3.45565 2.10701 3.27891 3.00138 3.27891 3.90224H6.47891ZM6.14522 2.93398H9.6019V-0.266016H6.14522V2.93398ZM9.6019 2.93398C9.31062 2.93398 9.12075 2.80838 9.05291 2.75018C8.9953 2.70076 9.01274 2.69354 9.06221 2.79385C9.16132 2.9948 9.26821 3.38456 9.26821 3.90224H12.4682C12.4682 3.00138 12.2915 2.10701 11.9322 1.37847C11.6234 0.752284 10.8958 -0.266016 9.6019 -0.266016V2.93398Z" fill="currentColor" mask="url(#path-2-inside-1)"></path><path d="M8.727 7.54053H7.01577C6.54323 7.54053 6.16016 7.92381 6.16016 8.39661C6.16016 8.86941 6.54323 9.2527 7.01577 9.2527H8.727C9.19954 9.2527 9.58262 8.86941 9.58262 8.39661C9.58262 7.92381 9.19954 7.54053 8.727 7.54053Z" fill="currentColor"></path><path d="M0.597656 11.1792H15.2643" stroke="currentColor"></path></svg>
                    <span>Jobs</span>
                    <br><br>
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24"><path d="M23 21.4783C23 21.732 22.8992 21.9752 22.7198 22.1546C22.5405 22.334 22.2972 22.4348 22.0435 22.4348H1.95652C1.70284 22.4348 1.45954 22.334 1.28016 22.1546C1.10078 21.9752 1 21.732 1 21.4783V15.7391H7.69565V16.6957C7.69717 17.2026 7.8992 17.6883 8.25764 18.0467C8.61608 18.4051 9.10179 18.6072 9.6087 18.6087H14.3913C14.8982 18.6072 15.3839 18.4051 15.7424 18.0467C16.1008 17.6883 16.3028 17.2026 16.3043 16.6957V15.7391H23V21.4783Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M1 15.7391L4.07139 10.4783C4.1551 10.3333 4.27539 10.2128 4.42025 10.1289C4.56511 10.0449 4.72946 10.0005 4.89687 10H19.1031C19.2705 10.0005 19.4349 10.0449 19.5798 10.1289C19.7246 10.2128 19.8449 10.3333 19.9286 10.4783L23 15.7391" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    <span>Applied</span>
                    <br><br>
                    <svg fill="none" height="24" viewBox="0 0 16 16" width="24"><path d="M8 0.557129C3.58867 0.557129 0 3.5398 0 7.20713C0.00988202 8.04845 0.196406 8.87832 0.547486 9.64296C0.898567 10.4076 1.40637 11.0899 2.038 11.6458L0.620667 14.4751C0.558582 14.5988 0.53655 14.7388 0.557626 14.8756C0.578702 15.0124 0.641842 15.1393 0.738283 15.2386C0.834724 15.3379 0.959684 15.4047 1.09582 15.4298C1.23196 15.4548 1.37252 15.4369 1.498 15.3785L5.48533 13.5225C6.30487 13.7455 7.15064 13.8577 8 13.8558C12.4113 13.8558 16 10.8725 16 7.2058C16 3.53913 12.4113 0.557129 8 0.557129ZM8 12.5238C7.19552 12.5255 6.39523 12.4078 5.62533 12.1745C5.46799 12.1265 5.29845 12.1383 5.14933 12.2078L3.10267 13.1605C3.07128 13.1751 3.03611 13.1796 3.00204 13.1733C2.96798 13.1671 2.93671 13.1504 2.91259 13.1255C2.88846 13.1006 2.87268 13.0689 2.86744 13.0347C2.8622 13.0004 2.86775 12.9654 2.88333 12.9345L3.46267 11.7778C3.53093 11.6414 3.55036 11.4857 3.51773 11.3368C3.48509 11.1878 3.40236 11.0545 3.28333 10.9591C2.69392 10.5236 2.21182 9.9592 1.87386 9.30893C1.5359 8.65867 1.35102 7.93976 1.33333 7.20713C1.33333 4.2738 4.324 1.89046 8 1.89046C11.676 1.89046 14.6667 4.27513 14.6667 7.20713C14.6667 10.1391 11.676 12.5238 8 12.5238Z" fill="currentColor"></path></svg>
                    <span>Messages</span>
                    <br><br>
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24"><path d="M20 11V22C20 22.2652 19.8946 22.5196 19.7071 22.7071C19.5196 22.8946 19.2652 23 19 23H2C1.73478 23 1.48043 22.8946 1.29289 22.7071C1.10536 22.5196 1 22.2652 1 22V3C1 2.73478 1.10536 2.48043 1.29289 2.29289C1.48043 2.10536 1.73478 2 2 2H15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M12.324 14.507L7.375 16.627L9.496 11.677L20.174 1L23.002 3.828L12.324 14.507Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M21.1669 5.66402L18.3379 2.83502" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <span>Assessments</span>
                  </div>
                  <!-- feature company logos -->
                </aside>
              </div>
              <!-- sidebar -->     
              <div class="col-lg-6" id="loadjobs">
              </div>
              <!-- centerl meta -->
              <div class="col-lg-3">
                <aside class="sidebar static right">
                  <div class="widget">
                    <h4 class="widget-title">Profile intro</h4>
                    <ul class="short-profile">
                      <li>
                        <span>About me</span>
                        <p><?php if(isset($_SESSION['logged_in'])){echo $user_data->about;}elseif(isset($_SESSION['owner_logged_in'])){echo $user_data->company_desc; } ?></p>
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
                    <div class="banner high-opacity purple">
                      <div class="bg-image" style="background-image: url(images/resources/baner-widgetbg2.jpg)"></div>
                      <div class="post-job">
                        <img src="<?php echo base_url(); ?>public/timeline2/images/job-icon.png" alt="">
                        <span>Post a new job</span>
                        <p>Create a new job post for hire a new talented from the pitnik</p>
                        <a class="main-btn" href="#" title="">Post Job</a>
                      </div>
                    </div>                    
                  </div><!-- create new job -->
                  <div class="widget" style="display: none;">
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
                  <div class="widget pitnik-links stick-widget" style="display: none;">
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

    var loc=$("#location").val();
    var title=$("#title").val();
    var salary=$("#salary").val();
    <?php 
    if(isset($_SESSION['user_id']))
    {
    ?>
    var url="<?php echo base_url();?>jobs/filter_jobs";
    <?php  }elseif(isset($_SESSION['owner_id'])){ ?>

      var url="<?php echo base_url();?>jobs/filter_jobs_owner";

    <?php } ?>
    $.post(url , {loc:loc,title:title,salary:salary}).done(function(data) {
      // console.log(data);
      //data.forEach(loaddata);
      //alert(data);
      $("#loadjobs").html(data);
    });
  }

    filterjobs();
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
    <script src="<?php echo base_url();?>public/timeline2/js/jquery.eventCalendar.min.js?>"></script>
  <?php include('include/footer.php'); ?>