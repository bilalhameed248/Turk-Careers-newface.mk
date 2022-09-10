<!DOCTYPE html>
<html>
<head>
	<title>Feeds Page</title>
	<!-- <link rel="stylesheet" href="feed.css"> -->
  <link rel="stylesheet" id="dashicons-css" href="<?php echo base_url();?>public/css/feed.css" type="text/css" media="all">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="feedstyle.css"> -->
  <link rel="stylesheet" id="dashicons-css" href="<?php echo base_url();?>public/css/feedstyle.css" type="text/css" media="all">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
         $(function() {
            $( "#slider-3" ).slider({
               range:true,
               min: 0,
               max: 200,
               values: [ 0, 200 ],
               slide: function( event, ui ) {
                  $( "#price" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
               }
            });
            $( "#price" ).val( "$" + $( "#slider-3" ).slider( "values", 0 ) + "k" +
               " - $" + $( "#slider-3" ).slider( "values", 1 ) + "K+" );
         });
      </script>
      <!-- for equity -->
      <script type="text/javascript">
         $(function() {
            $( "#slider-4" ).slider({
               range:true,
               min: 0,
               max: 2,
               values: [ 0, 2 ],
               slide: function( event, ui ) {
                  $( "#equity" ).val( "%" + ui.values[ 0 ] + " -" + ui.values[ 1 ] + "%+");
               }
            });
            $( "#equity" ).val($( "#slider-4" ).slider( "values", 0 ) + "%" +
               " - " + $( "#slider-4" ).slider( "values", 1 ) + "%+" );
         });
      </script>
      <!-- for Experience -->
      <script type="text/javascript">
         $(function() {
            $( "#slider-5" ).slider({
               range:true,
               min: 1,
               max: 10,
               values: [ 1, 10 ],
               slide: function( event, ui ) {
                  $( "#exp" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] + "  years+");
               }
            });
            $( "#exp" ).val($( "#slider-5" ).slider( "values", 0 )  +
               " - " + $( "#slider-5" ).slider( "values", 1 ) + "  years+" );
         });
      </script>
         
      <style type="text/css">
      	#price{
      		color: #9194a0 !important;
      	}
        #equity{
          color: #9194a0 !important;
        }
        #exp{
          color: #9194a0 !important;
        }

      	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
      		border-radius: 50%;
      	}
      	.ui-widget-header{
      		background: #007bff;
      	}
      </style>

</head>
<body>
  <div class="dashboard-header">
    <nav class="navbar navbar-expand-lg" style="background-color: #f2f8ff;">
     <a class="navbar-brand" href="#"> <img src="<?php echo base_url();?>public/uploads/website/newfacelogo.png" width="90px" alt="Logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                              <li class="nav-item dropdown notification mr-5"> 
                                <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                        <li>
                            <div class="notification-title"> Notification</div>
                            <div class="notification-list">
                                <div class="list-group"> <a href="#" class="list-group-item list-group-item-action active">
                                        <div class="notification-info">
                                            <div class="notification-list-user-img"><img src="https://img.icons8.com/office/100/000000/administrator-female.png" alt="" class="user-avatar-md rounded-circle"></div>
                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Hukonah</span>accepted your invitation to join the team. <div class="notification-date">2 min ago</div>
                                            </div>
                                        </div>
                                    </a> <a href="#" class="list-group-item list-group-item-action">
                                        <div class="notification-info">
                                            <div class="notification-list-user-img"><img src="https://img.icons8.com/color/48/000000/administrator-female.png" alt="" class="user-avatar-md rounded-circle"></div>
                                            <div class="notification-list-user-block"><span class="notification-list-user-name">John Sammy</span>updated the email address <div class="notification-date">2 days ago</div>
                                            </div>
                                        </div>
                                    </a> <a href="#" class="list-group-item list-group-item-action">
                                        <div class="notification-info">
                                            <div class="notification-list-user-img"><img src="https://img.icons8.com/color/100/000000/name.png" alt="" class="user-avatar-md rounded-circle"></div>
                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Kioh Samso</span> is watching your main repository <div class="notification-date">2 min ago</div>
                                            </div>
                                        </div>
                                    </a> </div>
                            </div>
                        </li>
                        <li>
                            <div class="list-footer"> <a href="#">View all notifications</a></div>
                        </li>
                    </ul>
                </li>
                <!-- search area -->
                <li class="nav-item">
                    <div id="custom-search" class="top-search-bar"> <input class="form-control" type="text" placeholder="Search.."> </div>
                </li>
                <!-- search area end -->

                <li class="nav-item dropdown notification  mr-3">
                 <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1"><i class="fas fa-search"></i> </a>
                </li>
                <script type="text/javascript">
                  $(".top-search-bar").hide();
                  $(".fa-search").click(function(){
                    $(".top-search-bar").fadeIn();
                  });
                </script>
                <li class="nav-item dropdown nav-user"> <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://img.icons8.com/dusk/100/000000/user-female-circle.png" alt="" class="user-avatar-md rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">Tikoha Samga</h5> <span class="status"></span><span class="ml-2">Available</span>
                        </div> <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a> <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a> <a class="dropdown-item" href="<?php echo base_url();?>home/logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">logo</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav> -->
<div class="row"  style="margin-top: 5% !important;">
	<div class="col-lg-3">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<style type="text/css">
                      .common{
                        color: #385075;
                        width: 214px;
                        height: 24px;
                      }
                    </style>
                    <div class="row d-flex justify-content-center">
                 <a href="#">   <svg class="mt-1 common" fill="none" height="16" viewBox="0 0 16 16" width="16"><path d="M2.56684 4.23096H13.1765C14.3177 4.23096 15.2433 5.15669 15.2433 6.29921V12.2062C15.2433 13.3487 14.3177 14.2744 13.1765 14.2744H2.56684C1.42562 14.2744 0.5 13.3487 0.5 12.2062V6.29921C0.5 5.15669 1.42562 4.23096 2.56684 4.23096Z" stroke="currentColor"></path><mask fill="white" id="path-2-inside-1"><path clip-rule="evenodd" d="M4.87891 3.90224C4.87891 2.4837 5.44618 1.33398 6.14522 1.33398H9.6019C10.3009 1.33398 10.8682 2.4837 10.8682 3.90224" fill-rule="evenodd"></path></mask><path d="M6.47891 3.90224C6.47891 3.38456 6.5858 2.9948 6.68491 2.79385C6.73437 2.69354 6.75182 2.70076 6.69421 2.75018C6.62637 2.80838 6.4365 2.93398 6.14522 2.93398V-0.266016C4.85136 -0.266016 4.12376 0.752284 3.81494 1.37847C3.45565 2.10701 3.27891 3.00138 3.27891 3.90224H6.47891ZM6.14522 2.93398H9.6019V-0.266016H6.14522V2.93398ZM9.6019 2.93398C9.31062 2.93398 9.12075 2.80838 9.05291 2.75018C8.9953 2.70076 9.01274 2.69354 9.06221 2.79385C9.16132 2.9948 9.26821 3.38456 9.26821 3.90224H12.4682C12.4682 3.00138 12.2915 2.10701 11.9322 1.37847C11.6234 0.752284 10.8958 -0.266016 9.6019 -0.266016V2.93398Z" fill="currentColor" mask="url(#path-2-inside-1)"></path><path d="M8.727 7.54053H7.01577C6.54323 7.54053 6.16016 7.92381 6.16016 8.39661C6.16016 8.86941 6.54323 9.2527 7.01577 9.2527H8.727C9.19954 9.2527 9.58262 8.86941 9.58262 8.39661C9.58262 7.92381 9.19954 7.54053 8.727 7.54053Z" fill="currentColor"></path><path d="M0.597656 11.1792H15.2643" stroke="currentColor"></path></svg> </a>
                    </div>
                    <div class="row d-flex justify-content-center">
                    <span>Jobs</span>
                    </div>
                    <br>
                    <div class="row d-flex justify-content-center">
                  <a href="#">  <svg height="14" class="common" viewBox="0 0 14 14" width="14" class="styles_icon__3IpLD"><path d="M13.12 11.535l-2.6-2.601a5.743 5.743 0 1 0-1.585 1.584l2.602 2.6c.44.43 1.143.43 1.583 0a1.12 1.12 0 0 0 0-1.583zM5.748 1.687a4.06 4.06 0 1 1 0 8.12 4.06 4.06 0 0 1 0-8.12z" fill="currentColor" fill-rule="evenodd"></path></svg> </a>
                </div>

                <div class="row d-flex justify-content-center">
                    <span>Jobs Interested</span>
                </div>
                <br>
                     <div class="row d-flex justify-content-center">
                   <a href="#"> <svg fill="none" class="common" height="24" viewBox="0 0 24 24" width="24"><path d="M23 21.4783C23 21.732 22.8992 21.9752 22.7198 22.1546C22.5405 22.334 22.2972 22.4348 22.0435 22.4348H1.95652C1.70284 22.4348 1.45954 22.334 1.28016 22.1546C1.10078 21.9752 1 21.732 1 21.4783V15.7391H7.69565V16.6957C7.69717 17.2026 7.8992 17.6883 8.25764 18.0467C8.61608 18.4051 9.10179 18.6072 9.6087 18.6087H14.3913C14.8982 18.6072 15.3839 18.4051 15.7424 18.0467C16.1008 17.6883 16.3028 17.2026 16.3043 16.6957V15.7391H23V21.4783Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M1 15.7391L4.07139 10.4783C4.1551 10.3333 4.27539 10.2128 4.42025 10.1289C4.56511 10.0449 4.72946 10.0005 4.89687 10H19.1031C19.2705 10.0005 19.4349 10.0449 19.5798 10.1289C19.7246 10.2128 19.8449 10.3333 19.9286 10.4783L23 15.7391" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
                </div>
                <div class="row d-flex justify-content-center mt-1">
                    <span>Applied</span>
                </div>
                    <br>
                    <div class="row d-flex justify-content-center">
                    <a href="#"> <svg fill="none" class="common" height="24" viewBox="0 0 16 16" width="24"><path d="M8 0.557129C3.58867 0.557129 0 3.5398 0 7.20713C0.00988202 8.04845 0.196406 8.87832 0.547486 9.64296C0.898567 10.4076 1.40637 11.0899 2.038 11.6458L0.620667 14.4751C0.558582 14.5988 0.53655 14.7388 0.557626 14.8756C0.578702 15.0124 0.641842 15.1393 0.738283 15.2386C0.834724 15.3379 0.959684 15.4047 1.09582 15.4298C1.23196 15.4548 1.37252 15.4369 1.498 15.3785L5.48533 13.5225C6.30487 13.7455 7.15064 13.8577 8 13.8558C12.4113 13.8558 16 10.8725 16 7.2058C16 3.53913 12.4113 0.557129 8 0.557129ZM8 12.5238C7.19552 12.5255 6.39523 12.4078 5.62533 12.1745C5.46799 12.1265 5.29845 12.1383 5.14933 12.2078L3.10267 13.1605C3.07128 13.1751 3.03611 13.1796 3.00204 13.1733C2.96798 13.1671 2.93671 13.1504 2.91259 13.1255C2.88846 13.1006 2.87268 13.0689 2.86744 13.0347C2.8622 13.0004 2.86775 12.9654 2.88333 12.9345L3.46267 11.7778C3.53093 11.6414 3.55036 11.4857 3.51773 11.3368C3.48509 11.1878 3.40236 11.0545 3.28333 10.9591C2.69392 10.5236 2.21182 9.9592 1.87386 9.30893C1.5359 8.65867 1.35102 7.93976 1.33333 7.20713C1.33333 4.2738 4.324 1.89046 8 1.89046C11.676 1.89046 14.6667 4.27513 14.6667 7.20713C14.6667 10.1391 11.676 12.5238 8 12.5238Z" fill="currentColor"></path>
                    </svg> </a>
                </div>
                <div class="row d-flex justify-content-center">
                    <span>Messages</span>
                </div>
                    <br>
                    
                <br>
                     <div class="row d-flex justify-content-center">
                    <a href="#"> <svg fill="none" class="common" height="24" viewBox="0 0 24 24" width="24"><path d="M20 11V22C20 22.2652 19.8946 22.5196 19.7071 22.7071C19.5196 22.8946 19.2652 23 19 23H2C1.73478 23 1.48043 22.8946 1.29289 22.7071C1.10536 22.5196 1 22.2652 1 22V3C1 2.73478 1.10536 2.48043 1.29289 2.29289C1.48043 2.10536 1.73478 2 2 2H15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M12.324 14.507L7.375 16.627L9.496 11.677L20.174 1L23.002 3.828L12.324 14.507Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M21.1669 5.66402L18.3379 2.83502" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg></a>
                </div>
                <div class="row d-flex justify-content-center">
                    <span>Assessments</span>
                </div>
                <br>
                <div class="row d-flex justify-content-center">
                   <a href="#"> <svg height="24px" class="common" version="1.1" viewBox="0 0 24 24" width="24px"><g fill="none" fill-rule="evenodd" id="icn_networks" stroke="none" stroke-width="1"><g fill="currentColor" id="earth-3" transform="translate(2.000000, 2.000000)"><path d="M12.9791667,4.58333451 C13.0485452,4.58356611 13.1134496,4.54910957 13.1521271,4.49151196 C13.1908046,4.43391434 13.1981369,4.36079745 13.1716667,4.29666667 C12.5886546,2.69526477 11.5181567,1.31699514 10.1108333,0.355833333 C10.0430763,0.31326232 9.95692374,0.31326232 9.88916667,0.355833333 C8.48184328,1.31699514 7.41134543,2.69526477 6.82833333,4.29666667 C6.80186308,4.36079745 6.80919542,4.43391434 6.84787289,4.49151196 C6.88655036,4.54910957 6.95145482,4.58356611 7.02083333,4.58333451 L12.9791667,4.58333451 Z" id="Path"></path><path d="M15.3875,9.17416667 C15.3915389,9.28628688 15.4836404,9.37507272 15.5958333,9.37500072 L19.7441667,9.37500072 C19.8025148,9.37515417 19.8582092,9.3506365 19.8975,9.3075 C19.9367124,9.26450633 19.9563276,9.20716965 19.9516667,9.14916667 C19.8594922,8.04715336 19.5834538,6.96835044 19.135,5.9575 C19.101629,5.88193947 19.0267681,5.83323085 18.9441667,5.83333317 L15.2275,5.83333317 C15.1650788,5.83357019 15.106053,5.86178404 15.066666,5.91021059 C15.0272791,5.95863714 15.0116819,6.02217297 15.0241667,6.08333333 C15.2334167,7.10132945 15.3549732,8.13539639 15.3875,9.17416667 L15.3875,9.17416667 Z" id="Path"></path><path d="M13.9291667,9.375 C13.9860218,9.37473684 14.0403807,9.35161181 14.08,9.31083333 C14.1192095,9.2696612 14.1399693,9.21430169 14.1375,9.1575 C14.1005469,8.09051706 13.9581877,7.02980189 13.7125,5.99083333 C13.6897694,5.89802684 13.606382,5.83290192 13.5108333,5.8333312 L6.48916667,5.8333312 C6.39323303,5.83339143 6.30984597,5.89920518 6.2875,5.9925 C6.04181226,7.03146855 5.89945312,8.09218373 5.8625,9.15916667 C5.86023658,9.21592603 5.88115548,9.27116491 5.92044856,9.31218689 C5.95974163,9.35320886 6.01402915,9.37648547 6.07083333,9.37666667 L13.9291667,9.375 Z" id="Path"></path><path d="M7.02083333,15.4166655 C6.95145482,15.4164339 6.88655036,15.4508904 6.84787289,15.508488 C6.80919542,15.5660857 6.80186308,15.6392025 6.82833333,15.7033333 C7.41156661,17.3048499 8.48236672,18.6831334 9.89,19.6441667 C9.95749886,19.6865897 10.0433345,19.6865897 10.1108333,19.6441667 C11.5186222,18.6832989 12.5894656,17.3049598 13.1725,15.7033333 C13.198581,15.6390591 13.1909621,15.5660199 13.1521777,15.508512 C13.1133933,15.451004 13.0485308,15.4165709 12.9791667,15.4166655 L7.02083333,15.4166655 Z" id="Path"></path><path d="M6.07083333,10.625 C6.01417937,10.6251893 5.96002544,10.648352 5.92075787,10.6891903 C5.8814903,10.7300285 5.86046826,10.7850488 5.8625,10.8416667 C5.89945855,11.9086491 6.04181762,12.9693638 6.2875,14.0083333 C6.31017324,14.1012971 6.39347788,14.1666667 6.48916667,14.1666667 L13.5108333,14.1666667 C13.6068689,14.1663899 13.6903769,14.1007518 13.7133333,14.0075 C13.9583027,12.9684226 14.1003768,11.9077512 14.1375,10.8408333 C14.1397634,10.784074 14.1188445,10.7288351 14.0795514,10.6878131 C14.0402584,10.6467911 13.9859709,10.6235145 13.9291667,10.6233333 L6.07083333,10.625 Z" id="Path"></path><path d="M0.0483333333,9.14916667 C0.0434379184,9.20723937 0.0630906705,9.26470767 0.102521174,9.307622 C0.141951678,9.35053632 0.197554666,9.37500231 0.255833333,9.37500231 L4.40416667,9.37500231 C4.51622243,9.37552321 4.60845097,9.28698381 4.6125,9.175 C4.64497925,8.1359507 4.76653602,7.10160294 4.97583333,6.08333333 C4.98937721,6.02196009 4.97401966,5.95776553 4.93416667,5.90916667 C4.89454249,5.86071077 4.83509225,5.83282432 4.7725,5.83332648 L1.05583333,5.83332648 C0.973231856,5.83323085 0.898370959,5.88193947 0.865,5.9575 C0.416546152,6.96835044 0.140507807,8.04715336 0.0483333333,9.14916667 L0.0483333333,9.14916667 Z" id="Path"></path><path d="M4.6125,10.8258333 C4.60846108,10.7137131 4.51635958,10.6249273 4.40416667,10.6249993 L0.255833333,10.6249993 C0.197485246,10.6248458 0.141790783,10.6493635 0.1025,10.6925 C0.0632875714,10.7354937 0.0436723889,10.7928304 0.0483333333,10.8508333 C0.140693876,11.9528153 0.41672442,13.0315877 0.865,14.0425 C0.898370959,14.1180605 0.973231856,14.1667691 1.05583333,14.1666668 L4.7725,14.1666668 C4.83492118,14.1664298 4.89394705,14.138216 4.93333397,14.0897894 C4.9727209,14.0413629 4.98831811,13.977827 4.97583333,13.9166667 C4.76658331,12.8986705 4.64502678,11.8646036 4.6125,10.8258333 L4.6125,10.8258333 Z" id="Path"></path><path d="M5.43333333,15.5566667 C5.4040396,15.4730614 5.32525484,15.4169773 5.23666667,15.4166667 L2,15.4166667 C1.9228553,15.4180048 1.8527673,15.4618694 1.8178435,15.5306693 C1.78291971,15.5994692 1.7888797,15.6819368 1.83333333,15.745 C3.17507993,17.6532711 5.14050023,19.0336923 7.39083333,19.6483333 C7.48011013,19.6726339 7.57471724,19.6351417 7.62311247,19.5562826 C7.6715077,19.4774234 7.66209401,19.3760945 7.6,19.3075 C6.63050712,18.217367 5.89329094,16.9411324 5.43333333,15.5566667 Z" id="Path"></path><path d="M14.7633333,15.4166667 C14.6747452,15.4169773 14.5959604,15.4730614 14.5666667,15.5566667 C14.1080971,16.9404261 13.3726049,18.2163378 12.405,19.3066667 C12.342906,19.3752611 12.3334923,19.4765901 12.3818875,19.5554492 C12.4302828,19.6343084 12.5248899,19.6718006 12.6141667,19.6475 C14.8644998,19.032859 16.8299201,17.6524378 18.1716667,15.7441667 C18.2161203,15.6811035 18.2220803,15.5986358 18.1871565,15.529836 C18.1522327,15.4610361 18.0821447,15.4171715 18.005,15.4158333 L14.7633333,15.4166667 Z" id="Path"></path><path d="M5.23666667,4.58333333 C5.32525484,4.58302265 5.4040396,4.52693858 5.43333333,4.44333333 C5.89180043,3.05927841 6.62729773,1.78307435 7.595,0.6925 C7.65709401,0.623905545 7.6665077,0.522576607 7.61811247,0.443717447 C7.56971724,0.364858287 7.47511013,0.327366076 7.38583333,0.351666667 C5.13550023,0.966307701 3.17007993,2.34672886 1.82833333,4.255 C1.7838797,4.31806322 1.77791971,4.40053083 1.8128435,4.46933071 C1.8477673,4.53813059 1.9178553,4.58199516 1.995,4.58333333 L5.23666667,4.58333333 Z" id="Path"></path><path d="M19.9516667,10.8508333 C19.9565621,10.7927606 19.9369093,10.7352923 19.8974788,10.692378 C19.8580483,10.6494637 19.8024453,10.625 19.7441667,10.625 L15.5958333,10.625 C15.4836404,10.6249273 15.3915389,10.7137131 15.3875,10.8258333 C15.3548782,11.8640455 15.2333221,12.8975508 15.0241667,13.915 C15.0116819,13.9761604 15.0272791,14.0396962 15.066666,14.0881227 C15.106053,14.1365493 15.1650788,14.1647631 15.2275,14.1650002 L18.9441667,14.1650002 C19.0267681,14.1651025 19.101629,14.1163939 19.135,14.0408333 C19.5830961,13.0304427 19.8591229,11.9522484 19.9516667,10.8508333 Z" id="Path"></path><path d="M14.5666667,4.44333333 C14.5959604,4.52693858 14.6747452,4.58302265 14.7633333,4.58333333 L18,4.58333333 C18.0771447,4.58199516 18.1472327,4.53813059 18.1821565,4.46933071 C18.2170803,4.40053083 18.2111203,4.31806322 18.1666667,4.255 C16.8261729,2.34767376 14.8626653,0.967354127 12.6141667,0.351666667 C12.5248899,0.327366076 12.4302828,0.364858287 12.3818875,0.443717447 C12.3334923,0.522576607 12.342906,0.623905545 12.405,0.6925 C13.3727023,1.78307435 14.1081996,3.05927841 14.5666667,4.44333333 Z" id="Path"></path></g></g></svg> </a>
                </div>
                <div class="row d-flex justify-content-center">
                    <span>Social Network</span>
                </div>
         
			</div>
			<div class="col-sm-7"></div>
		</div>
	</div>



	<div class="col-lg-6">
		<h1 class="mb-3">Search for jobs</h1>
		<div class="mb-3">
		<span><a href="#" style="color: #000;"><b>Browse all</b></a></span>
		<span class="ml-3"><a href="#" style="color: #000;"><b>Saved</b></a></span>
		<span class="ml-3"><a href="#" style="color: #000;"><b>Hidden</b></a></span>
		</div>
		<div class="slct">
			<div class="main-area" style="display: flex; flex-direction: row;">
				<p class="savedsearch">Saved Search 1 &nbsp; <i class="fas fa-pen"></i></p>
				<p class="plus1"> <a href="#"><i class="fas fa-plus" style="color: #00bfff;"></i></a>
				</p>
			</div>
			<!-- search area -->
			<section class="d-flex">
                                <select class="form-control col-6 search-input ml-2	">
                                <option selected> <i class="fas fa-user"> </i>Add a Job title</option>
                                <option>Engineering</option>
                                <option>Software Engineer</option>
                                <option>Mobile Developer</option>
                                <option>iOS Developer</option>
                                <option>Android Developer</option>
                                <option>Frontend Engineer</option>
                                <option>Backend Engineer</option>
                                </select>
                              <span class="add-loc ml-1 col-6">
                            <input type="text" class="form-control"  placeholder="&#xf041; &nbsp; Add a Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" id="location" class="form-control col-sm-12" onkeyup="filterjobs();" style=" color: #7b91b1; font-family:Arial, FontAwesome">
                          </span>
			</section>
			<hr>
			<p class="text-center" style="border-bottom:1px solid #e4e7f0; border-right:1px solid #e4e7f0;">
				<a href="#" data-toggle="modal" data-target="#exampleModalLong"> <svg  style="color:#0f6fff;" height="12px" version="1.1" viewBox="0 0 18 12" width="18px" class="styles_filtersIcon__200x3"><g fill="none" fill-rule="evenodd" id="-↳-Filters-Workspace" stroke="none" stroke-width="1"><g fill="currentColor" id="all-filters" transform="translate(-3.000000, -6.000000)"><path d="M10,18 L14,18 L14,16 L10,16 L10,18 Z M3,6 L3,8 L21,8 L21,6 L3,6 Z M6,13 L18,13 L18,11 L6,11 L6,13 Z" id="Shape"></path></g></g></svg></a><span class="ml-2">Filters</span>
			</p>
      <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Model body starts here -->
      <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
                <select class="form-control search-input mb-3">
                                <option selected> <i class="fas fa-user"> </i>Add a Job title</option>
                                <option>Engineering</option>
                                <option>Software Engineer</option>
                                <option>Mobile Developer</option>
                                <option>iOS Developer</option>
                                <option>Android Developer</option>
                                <option>Frontend Engineer</option>
                                <option>Backend Engineer</option>
                                </select>
              <span class="mt">No Filters Selected</span>
            </div>
            <div class="col-lg-6">
               <span class="add-loc">
                <input type="text" class="form-control"  placeholder="&#xf041; &nbsp; Add a Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" id="location" class="form-control col-sm-12" onkeyup="filterjobs();" style=" color: #7b91b1; font-family:Arial, FontAwesome">
              </span>
            </div>
          </div>
          <hr>
          <!-- Second row start -->
          <div class="row">
            <div class="col-lg-1">
          <svg height="24px" version="1.1" viewBox="0 0 24 24" width="24px"><g fill="none" fill-rule="evenodd" id="icn_comp" stroke="none" stroke-width="1"><g fill="currentColor" fill-rule="nonzero" transform="translate(2.000000, 2.000000)"><path d="M11.8816667,17.1200035 L18.3266667,17.1200035 C19.2471412,17.1200035 19.9933314,16.3738079 19.9933314,15.4533333 L19.9933314,3.71583333 C19.9933314,3.27355321 19.8177865,2.84935871 19.505,2.53666667 L17.4933314,0.525 C17.1808454,0.212417709 16.7569914,0.0366666667 16.315,0.0366666667 L6.66,0.0366666667 C5.73952542,0.0366666667 4.99333137,0.78285875 4.99333137,1.70333333 L4.99333137,7.76583333 C4.99284674,7.87883153 5.08286688,7.97144484 5.19583333,7.97416667 C5.5,7.98 6.06,8.0025 6.4325,8.0425 C6.49144477,8.04931005 6.55043615,8.03013944 6.59411674,7.9899789 C6.63779733,7.94981836 6.66184524,7.89264149 6.66,7.83333333 L6.66,2.12 C6.66,1.88988135 6.84654802,1.70333333 7.07666667,1.70333333 L16.1425,1.70333333 C16.2530824,1.70313584 16.3592077,1.74690504 16.4375,1.825 L18.205,3.59333333 C18.2828908,3.67142128 18.3266432,3.77720629 18.3266667,3.8875 L18.3266667,15.0366667 C18.3266667,15.2667853 18.1401186,15.4533333 17.91,15.4533333 L12.195,15.4533333 C12.0939797,15.4539468 12.0085965,15.5283471 11.9941667,15.6283333 C11.9321125,16.0420957 11.8305368,16.4489566 11.6908333,16.8433333 C11.6665722,16.9060721 11.6749091,16.9767492 11.7131023,17.0321209 C11.7512955,17.0874927 11.8144015,17.1203923 11.8816667,17.1200035 L11.8816667,17.1200035 Z" id="Path"></path><path d="M11.8833333,8.1175 L13.14,8.8675 C13.4673327,9.06383042 13.8862067,9.01267286 14.1566667,8.74333333 C14.18852,8.71072787 14.2180375,8.67591954 14.245,8.63916667 L16.4841667,5.5275 C16.6784623,5.28696735 16.7236047,4.95862851 16.6014315,4.67458544 C16.4792582,4.39054238 16.2098564,4.197496 15.9016157,4.17311547 C15.5933749,4.14873495 15.2969746,4.2970288 15.1316667,4.55833333 L13.4516667,6.89166667 C13.3878109,6.97900455 13.2680503,7.00353383 13.175,6.94833333 L11.9166667,6.19333333 C11.5430388,5.96881689 11.0595128,6.07017207 10.8075,6.42583333 L9.1025,8.83333333 C9.07067188,8.87806928 9.05845909,8.93384826 9.06868151,8.98779116 C9.07890392,9.04173406 9.11067779,9.08917738 9.15666667,9.11916667 C9.49272316,9.34956521 9.80732925,9.60978461 10.0966667,9.89666667 C10.1387717,9.93996861 10.1979479,9.96231119 10.258165,9.95764195 C10.318382,9.95297272 10.3734067,9.92177498 10.4083333,9.8725 L11.6066667,8.18083333 C11.668022,8.09045233 11.7887693,8.06281137 11.8833333,8.1175 L11.8833333,8.1175 Z" id="Path"></path><path d="M0.00666666667,14.5475 C0.00666666667,17.5390424 2.43179094,19.9641667 5.42333333,19.9641667 C8.41487573,19.9641667 10.84,17.5390424 10.84,14.5475 C10.84,11.5559576 8.41487573,9.13083333 5.42333333,9.13083333 C2.43331377,9.13450658 0.0103399135,11.5574804 0.00666666667,14.5475 Z M4.66666667,11.4666667 L4.66166667,11.46 C4.74396321,11.4488259 4.80383524,11.3762537 4.79916667,11.2933333 L4.79916667,11.0016667 C4.79916668,10.6564887 5.07898871,10.3766667 5.42416667,10.3766667 C5.76934463,10.3766667 6.04916666,10.6564887 6.04916667,11.0016667 L6.04916667,11.2808333 C6.05141021,11.3571194 6.11368203,11.4179174 6.19,11.4183333 L6.67416667,11.4183333 C7.01934464,11.4183333 7.29916667,11.6981554 7.29916667,12.0433333 C7.29916667,12.3885113 7.01934464,12.6683333 6.67416667,12.6683333 L4.97833333,12.6683333 C4.74251215,12.6693247 4.54036927,12.837075 4.49591747,13.0686708 C4.45146568,13.3002667 4.57713704,13.5309366 4.79583333,13.6191667 L6.51416667,14.3075 C7.24305462,14.5896483 7.69259319,15.3250859 7.6113304,16.1024415 C7.53006761,16.879797 6.9381486,17.5063632 6.16666667,17.6316667 C6.09221943,17.6507587 6.04340773,17.7220167 6.0525,17.7983333 L6.0525,18.0925 C6.0525,18.437678 5.77267797,18.7175 5.4275,18.7175 C5.08232203,18.7175 4.8025,18.437678 4.8025,18.0925 L4.8025,17.8141667 C4.80078012,17.7391335 4.74084012,17.6784625 4.66583333,17.6758333 L4.17333333,17.6758333 C3.82815536,17.6758333 3.54833333,17.3960113 3.54833333,17.0508333 C3.54833333,16.7056554 3.82815536,16.4258333 4.17333333,16.4258333 L5.8675,16.4258333 C6.10347657,16.4252366 6.30598685,16.257612 6.35066353,16.0259025 C6.39534021,15.794193 6.26967117,15.563291 6.05083333,15.475 L4.33333333,14.7833333 C3.61297075,14.4983807 3.1693257,13.7698407 3.24679216,12.9990495 C3.32425862,12.2282582 3.90400682,11.6025718 4.66666667,11.4666667 L4.66666667,11.4666667 Z" id="Shape"></path></g></g></svg>
          </div>
          <div class="col-lg-1">
          <h6>Compensation</h6>
           </div>
           <div class="col-lg-10"></div>
          </div>


          <!-- row 3 starts -->
           <div class="row mt-3">
            <div class="col-sm col-6 box1">
              <span>Salry</span>
         <p>
         <input type = "text" id = "price" 
            style = "border:0; color:#b9cd6d; font-weight:bold;">
          </p>
        <div id = "slider-3" class="mb-2"></div>
              <select class="form-control">
                <option selected="All Currencies">All Currencies</option>
                <option>Canadian  Dollars ($)</option>
                <option>Chinise Renminbi Yuan (¥)</option>
              </select>
            </div>
             <div class="col-sm col-6 box1 ml-1">
               <span>Equity</span>
            <p>
            <input type = "text" id = "equity" 
            style = "border:0; color:#b9cd6d; font-weight:bold;">
          </p>
        <div id = "slider-4" class="mb-2"></div>
             </div>
           </div>
           <hr>
           <!-- next row start -->
           <div class="row">
             <div class="col-lg-1">
           <svg  height="24px" version="1.1" viewBox="0 0 24 24" width="24px"><g fill="none" fill-rule="evenodd" id="icn_interest" stroke="none" stroke-width="1"><g fill="currentColor" id="cursor-target" transform="translate(2.000000, 2.000000)"><path d="M19.1666667,9.16666667 L17.4508333,9.16666667 C17.0575068,5.68737657 14.3124746,2.94130739 10.8333333,2.54666667 L10.8333333,0.833333333 C10.8333333,0.373096042 10.4602373,0 10,0 C9.53976271,0 9.16666667,0.373096042 9.16666667,0.833333333 L9.16666667,2.54666667 C5.68752538,2.94130739 2.94249323,5.68737657 2.54916667,9.16666667 L0.833333333,9.16666667 C0.373096042,9.16666667 0,9.53976271 0,10 C0,10.4602373 0.373096042,10.8333333 0.833333333,10.8333333 L2.54916667,10.8333333 C2.94400668,14.3111428 5.68875783,17.0552027 9.16666667,17.4491667 L9.16666667,19.1666667 C9.16666667,19.626904 9.53976271,20 10,20 C10.4602373,20 10.8333333,19.626904 10.8333333,19.1666667 L10.8333333,17.4491667 C14.3112422,17.0552027 17.0559933,14.3111428 17.4508333,10.8333333 L19.1666667,10.8333333 C19.626904,10.8333333 20,10.4602373 20,10 C20,9.53976271 19.626904,9.16666667 19.1666667,9.16666667 Z M15.7258333,8.91666667 C15.7380553,8.97806861 15.7221305,9.04171676 15.682433,9.09012836 C15.6427354,9.13853996 15.5834398,9.16666735 15.5208333,9.16666735 L13.8116667,9.16666735 C13.7177326,9.16690561 13.6353541,9.10401082 13.6108333,9.01333333 C13.2596917,7.73727853 12.2627215,6.7403083 10.9866667,6.38916667 C10.8957303,6.36397987 10.8329173,6.28102567 10.8333313,6.18666667 L10.8333313,4.4775 C10.8333313,4.4148935 10.86146,4.35559788 10.9098716,4.31590037 C10.9582832,4.27620286 11.0219314,4.260278 11.0833333,4.2725 C13.4370483,4.72154625 15.277632,6.56279072 15.7258333,8.91666667 L15.7258333,8.91666667 Z M10,12.0833333 C8.84940677,12.0833333 7.91666667,11.1505932 7.91666667,10 C7.91666667,8.84940677 8.84940677,7.91666667 10,7.91666667 C11.1505932,7.91666667 12.0833333,8.84940677 12.0833333,10 C12.0833333,11.1505932 11.1505932,12.0833333 10,12.0833333 L10,12.0833333 Z M8.91666667,4.2725 C8.97806861,4.260278 9.04171676,4.27620286 9.09012836,4.31590037 C9.13853996,4.35559788 9.16666735,4.4148935 9.16666735,4.4775 L9.16666735,6.18666667 C9.16690561,6.28060077 9.10401082,6.36297927 9.01333333,6.3875 C7.73727853,6.73864163 6.7403083,7.73561186 6.38916667,9.01166667 C6.36477012,9.10266734 6.28254598,9.16612663 6.18833333,9.16666667 L4.47916667,9.16666667 C4.41656017,9.16666667 4.35726455,9.13853996 4.31756704,9.09012836 C4.27786953,9.04171676 4.26194466,8.97806861 4.27416667,8.91666667 C4.72236805,6.56279072 6.56295175,4.72154625 8.91666667,4.2725 L8.91666667,4.2725 Z M4.27416667,11.0783333 C4.2616234,11.0168869 4.27742758,10.9530593 4.31719298,10.9045649 C4.35695838,10.8560705 4.41645364,10.8280696 4.47916667,10.8283315 L6.18833333,10.8283315 C6.28226743,10.8280944 6.36464594,10.8909892 6.38916667,10.9816667 C6.7403083,12.2577215 7.73727853,13.2546917 9.01333333,13.6058333 C9.10384116,13.6306063 9.16661762,13.7128298 9.16666709,13.8066667 L9.16666709,15.5158333 C9.16679165,15.5778693 9.13893073,15.6366528 9.09083333,15.6758333 C9.04312586,15.715568 8.98023159,15.7320549 8.91916667,15.7208333 C6.5649677,15.2729381 4.72332919,13.4322908 4.27416667,11.0783333 Z M11.0833333,15.7241667 C11.0222684,15.7353882 10.9593741,15.7189013 10.9116667,15.6791667 C10.8626329,15.6404802 10.8338171,15.5816224 10.8333327,15.5191667 L10.8333327,13.81 C10.8330944,13.7160659 10.8959892,13.6336874 10.9866667,13.6091667 C12.2627215,13.258025 13.2596917,12.2610548 13.6108333,10.985 C13.6359809,10.8949839 13.7182049,10.8328894 13.8116667,10.8333246 L15.5208333,10.8333246 C15.5836537,10.8327578 15.6433525,10.8606741 15.6831873,10.9092531 C15.7230221,10.9578321 15.7387033,11.0218427 15.7258333,11.0833333 C15.2764078,13.4359172 13.4360784,15.2755859 11.0833333,15.7241667 Z" id="Shape"></path></g></g></svg> 
         </div>
           <div class="col-lg-3">
            <span>Areas of Interest</span>
          </div>
          <div class="col-lg-7"></div>
          </div>


          <!-- row 5 starts -->
           <div class="row mt-3">
            <div class="col-sm col-6 box1">
              <span class="mr-2">Skills</span>
              <svg viewBox="0 0 27 32" width="16" height="16"><path d="M18.272 24.576v-2.848q0-.256-.16-.416t-.384-.16H16V12q0-.256-.16-.416t-.416-.16H9.728q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h1.696v5.728H9.728q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h8q.224 0 .384-.16t.16-.416zM16 8.576V5.728q0-.256-.16-.416t-.416-.16H12q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h3.424q.256 0 .416-.16t.16-.416zM27.424 16q0 3.744-1.824 6.88t-4.992 4.992-6.88 1.856-6.912-1.856-4.96-4.992T0 16t1.856-6.88 4.96-4.992 6.912-1.856 6.88 1.856T25.6 9.12 27.424 16z" fill="currentColor"></path></svg><br>
              <input type="search" name="search" class="form-control mt-2" placeholder="Type to search">
              <p class="popular mt-3">POPULAR</p>
              <div class="d-flex justify-content-between mt-2">
                <span>Python</span>
                <span> <a href="#"><svg height="14" width="14"><g fill="none" fill-rule="evenodd"><path d="M12.44 8.35a.675.675 0 0 0 .675-.675v-1.35a.675.675 0 0 0-.675-.676H8.463a.113.113 0 0 1-.113-.112V1.56a.675.675 0 0 0-.675-.676h-1.35a.675.675 0 0 0-.676.676v3.977c0 .062-.05.112-.113.112H1.56a.675.675 0 0 0-.675.676v1.35a.675.675 0 0 0 .676.676h3.976c.063 0 .113.05.113.112v3.977a.675.675 0 0 0 .675.676h1.351a.675.675 0 0 0 .675-.676V8.463c0-.062.051-.112.113-.112h3.977z" fill="currentColor"></path></g></svg></a></span>
              </div>
                 <div class="d-flex justify-content-between mt-2">
                <span>React.js</span>
                <span> <a href="#"><svg height="14" width="14"><g fill="none" fill-rule="evenodd"><path d="M12.44 8.35a.675.675 0 0 0 .675-.675v-1.35a.675.675 0 0 0-.675-.676H8.463a.113.113 0 0 1-.113-.112V1.56a.675.675 0 0 0-.675-.676h-1.35a.675.675 0 0 0-.676.676v3.977c0 .062-.05.112-.113.112H1.56a.675.675 0 0 0-.675.676v1.35a.675.675 0 0 0 .676.676h3.976c.063 0 .113.05.113.112v3.977a.675.675 0 0 0 .675.676h1.351a.675.675 0 0 0 .675-.676V8.463c0-.062.051-.112.113-.112h3.977z" fill="currentColor"></path></g></svg></a></span>
              </div>
                 <div class="d-flex justify-content-between mt-2">
                <span>Node.js</span>
                <span> <a href="#"><svg height="14" width="14"><g fill="none" fill-rule="evenodd"><path d="M12.44 8.35a.675.675 0 0 0 .675-.675v-1.35a.675.675 0 0 0-.675-.676H8.463a.113.113 0 0 1-.113-.112V1.56a.675.675 0 0 0-.675-.676h-1.35a.675.675 0 0 0-.676.676v3.977c0 .062-.05.112-.113.112H1.56a.675.675 0 0 0-.675.676v1.35a.675.675 0 0 0 .676.676h3.976c.063 0 .113.05.113.112v3.977a.675.675 0 0 0 .675.676h1.351a.675.675 0 0 0 .675-.676V8.463c0-.062.051-.112.113-.112h3.977z" fill="currentColor"></path></g></svg></a></span>
              </div>
                 <div class="d-flex justify-content-between mt-2">
                <span>Java</span>
                <span> <a href="#"><svg height="14" width="14"><g fill="none" fill-rule="evenodd"><path d="M12.44 8.35a.675.675 0 0 0 .675-.675v-1.35a.675.675 0 0 0-.675-.676H8.463a.113.113 0 0 1-.113-.112V1.56a.675.675 0 0 0-.675-.676h-1.35a.675.675 0 0 0-.676.676v3.977c0 .062-.05.112-.113.112H1.56a.675.675 0 0 0-.675.676v1.35a.675.675 0 0 0 .676.676h3.976c.063 0 .113.05.113.112v3.977a.675.675 0 0 0 .675.676h1.351a.675.675 0 0 0 .675-.676V8.463c0-.062.051-.112.113-.112h3.977z" fill="currentColor"></path></g></svg></a></span>
              </div>
                 <div class="d-flex justify-content-between mt-2">
                <span>Ruby on Rails</span>
                <span> <a href="#"><svg height="14" width="14"><g fill="none" fill-rule="evenodd"><path d="M12.44 8.35a.675.675 0 0 0 .675-.675v-1.35a.675.675 0 0 0-.675-.676H8.463a.113.113 0 0 1-.113-.112V1.56a.675.675 0 0 0-.675-.676h-1.35a.675.675 0 0 0-.676.676v3.977c0 .062-.05.112-.113.112H1.56a.675.675 0 0 0-.675.676v1.35a.675.675 0 0 0 .676.676h3.976c.063 0 .113.05.113.112v3.977a.675.675 0 0 0 .675.676h1.351a.675.675 0 0 0 .675-.676V8.463c0-.062.051-.112.113-.112h3.977z" fill="currentColor"></path></g></svg></a></span>
              </div>
            </div>
             <div class="col-sm col-6 box1 ml-1">
               <span class="mr-2">Markets</span>
              <svg viewBox="0 0 27 32" width="16" height="16"><path d="M18.272 24.576v-2.848q0-.256-.16-.416t-.384-.16H16V12q0-.256-.16-.416t-.416-.16H9.728q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h1.696v5.728H9.728q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h8q.224 0 .384-.16t.16-.416zM16 8.576V5.728q0-.256-.16-.416t-.416-.16H12q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h3.424q.256 0 .416-.16t.16-.416zM27.424 16q0 3.744-1.824 6.88t-4.992 4.992-6.88 1.856-6.912-1.856-4.96-4.992T0 16t1.856-6.88 4.96-4.992 6.912-1.856 6.88 1.856T25.6 9.12 27.424 16z" fill="currentColor"></path></svg><br>
              <input type="search" name="search" class="form-control mt-2" placeholder="Type to search">
              <p class="popular mt-3">POPULAR</p>
              <div class="d-flex justify-content-between mt-2">
                <span>Healthcare</span>
                <span> <a href="#"><svg height="14" width="14"><g fill="none" fill-rule="evenodd"><path d="M12.44 8.35a.675.675 0 0 0 .675-.675v-1.35a.675.675 0 0 0-.675-.676H8.463a.113.113 0 0 1-.113-.112V1.56a.675.675 0 0 0-.675-.676h-1.35a.675.675 0 0 0-.676.676v3.977c0 .062-.05.112-.113.112H1.56a.675.675 0 0 0-.675.676v1.35a.675.675 0 0 0 .676.676h3.976c.063 0 .113.05.113.112v3.977a.675.675 0 0 0 .675.676h1.351a.675.675 0 0 0 .675-.676V8.463c0-.062.051-.112.113-.112h3.977z" fill="currentColor"></path></g></svg></a></span>
              </div>
                 <div class="d-flex justify-content-between mt-2">
                <span>E-Commerce</span>
                <span> <a href="#"><svg height="14" width="14"><g fill="none" fill-rule="evenodd"><path d="M12.44 8.35a.675.675 0 0 0 .675-.675v-1.35a.675.675 0 0 0-.675-.676H8.463a.113.113 0 0 1-.113-.112V1.56a.675.675 0 0 0-.675-.676h-1.35a.675.675 0 0 0-.676.676v3.977c0 .062-.05.112-.113.112H1.56a.675.675 0 0 0-.675.676v1.35a.675.675 0 0 0 .676.676h3.976c.063 0 .113.05.113.112v3.977a.675.675 0 0 0 .675.676h1.351a.675.675 0 0 0 .675-.676V8.463c0-.062.051-.112.113-.112h3.977z" fill="currentColor"></path></g></svg></a></span>
              </div>
                 <div class="d-flex justify-content-between mt-2">
                <span>Education</span>
                <span> <a href="#"><svg height="14" width="14"><g fill="none" fill-rule="evenodd"><path d="M12.44 8.35a.675.675 0 0 0 .675-.675v-1.35a.675.675 0 0 0-.675-.676H8.463a.113.113 0 0 1-.113-.112V1.56a.675.675 0 0 0-.675-.676h-1.35a.675.675 0 0 0-.676.676v3.977c0 .062-.05.112-.113.112H1.56a.675.675 0 0 0-.675.676v1.35a.675.675 0 0 0 .676.676h3.976c.063 0 .113.05.113.112v3.977a.675.675 0 0 0 .675.676h1.351a.675.675 0 0 0 .675-.676V8.463c0-.062.051-.112.113-.112h3.977z" fill="currentColor"></path></g></svg></a></span>
              </div>
                 <div class="d-flex justify-content-between mt-2">
                <span>Enterprise Software</span>
                <span> <a href="#"><svg height="14" width="14"><g fill="none" fill-rule="evenodd"><path d="M12.44 8.35a.675.675 0 0 0 .675-.675v-1.35a.675.675 0 0 0-.675-.676H8.463a.113.113 0 0 1-.113-.112V1.56a.675.675 0 0 0-.675-.676h-1.35a.675.675 0 0 0-.676.676v3.977c0 .062-.05.112-.113.112H1.56a.675.675 0 0 0-.675.676v1.35a.675.675 0 0 0 .676.676h3.976c.063 0 .113.05.113.112v3.977a.675.675 0 0 0 .675.676h1.351a.675.675 0 0 0 .675-.676V8.463c0-.062.051-.112.113-.112h3.977z" fill="currentColor"></path></g></svg></a></span>
              </div>
                 <div class="d-flex justify-content-between mt-2">
                <span>Marketplaces</span>
                <span> <a href="#"><svg height="14" width="14"><g fill="none" fill-rule="evenodd"><path d="M12.44 8.35a.675.675 0 0 0 .675-.675v-1.35a.675.675 0 0 0-.675-.676H8.463a.113.113 0 0 1-.113-.112V1.56a.675.675 0 0 0-.675-.676h-1.35a.675.675 0 0 0-.676.676v3.977c0 .062-.05.112-.113.112H1.56a.675.675 0 0 0-.675.676v1.35a.675.675 0 0 0 .676.676h3.976c.063 0 .113.05.113.112v3.977a.675.675 0 0 0 .675.676h1.351a.675.675 0 0 0 .675-.676V8.463c0-.062.051-.112.113-.112h3.977z" fill="currentColor"></path></g></svg></a></span>
              </div>
            </div>
             </div>
           <hr>
           <!-- row 5 ends -->



           <!-- Row 6 starts here --> 
           <div class="row">
           <div class="col-lg-1">
              <svg height="24px" version="1.1" viewBox="0 0 24 24" width="24px"><g fill="none" fill-rule="evenodd" id="icn_job" stroke="none" stroke-width="1"><g fill="currentColor" id="settings-slider-desktop-horizontal-alternate" transform="translate(2.000000, 2.000000)"><path d="M18.75,0 L1.25,0 C0.559644063,0 0,0.559644063 0,1.25 L0,14.5833333 C0,15.2736893 0.559644063,15.8333333 1.25,15.8333333 L18.75,15.8333333 C19.4403559,15.8333333 20,15.2736893 20,14.5833333 L20,1.25 C20,0.559644063 19.4403559,0 18.75,0 Z M18.3333333,12.0833333 C18.3333333,12.313452 18.1467853,12.5 17.9166667,12.5 L2.08333333,12.5 C1.85321469,12.5 1.66666667,12.313452 1.66666667,12.0833333 L1.66666667,2.08333333 C1.66666667,1.85321469 1.85321469,1.66666667 2.08333333,1.66666667 L17.9166667,1.66666667 C18.1467853,1.66666667 18.3333333,1.85321469 18.3333333,2.08333333 L18.3333333,12.0833333 Z" id="Shape"></path><path d="M11.9583333,17.235 C11.8791786,17.1394639 11.761567,17.0841667 11.6375,17.0841667 L8.3625,17.0841667 C8.23843297,17.0841667 8.12082143,17.1394639 8.04166667,17.235 L6.29166667,19.345 C6.20288525,19.4723134 6.19222794,19.638422 6.26401189,19.7760371 C6.33579583,19.9136521 6.47812108,19.9999606 6.63333333,20.0000003 L13.3658333,20.0000003 C13.521333,20.0001781 13.6639929,19.9137522 13.735838,19.7758448 C13.807683,19.6379373 13.796757,19.4714984 13.7075,19.3441667 L11.9583333,17.235 Z" id="Path"></path><path d="M8.46916667,3.33833333 C7.66505998,3.37935026 7.04633932,4.06426659 7.0869847,4.86839215 C7.12763009,5.6725177 7.81226048,6.29155476 8.61640473,6.25128091 C9.42054898,6.21100706 10.0399023,5.52666277 10,4.7225 C9.98059697,4.33593023 9.80840045,3.97290756 9.52130283,3.7133163 C9.23420521,3.45372504 8.85573172,3.3188365 8.46916667,3.33833333 Z" id="Path"></path><path d="M3.98416667,5.41666667 L5.625,5.41666667 C5.97017797,5.41666667 6.25,5.13684464 6.25,4.79166667 C6.25,4.4464887 5.97017797,4.16666667 5.625,4.16666667 L3.98416667,4.16666667 C3.6389887,4.16666667 3.35916667,4.4464887 3.35916667,4.79166667 C3.35916667,5.13684464 3.6389887,5.41666667 3.98416667,5.41666667 Z" id="Path"></path><path d="M16.0416667,4.16666667 L11.4583333,4.16666667 C11.1131554,4.16666667 10.8333333,4.4464887 10.8333333,4.79166667 C10.8333333,5.13684464 11.1131554,5.41666667 11.4583333,5.41666667 L16.0416667,5.41666667 C16.3868446,5.41666667 16.6666667,5.13684464 16.6666667,4.79166667 C16.6666667,4.4464887 16.3868446,4.16666667 16.0416667,4.16666667 Z" id="Path"></path><path d="M11.4116667,7.91666667 C10.6072864,7.95677705 9.98770778,8.64134612 10.027768,9.44572893 C10.0678282,10.2501117 10.7523586,10.869733 11.5567439,10.829723 C12.3611293,10.7897129 12.9807932,10.1052211 12.9408333,9.30083333 C12.9004165,8.4965168 12.2160214,7.87701801 11.4116667,7.91666667 L11.4116667,7.91666667 Z" id="Path"></path><path d="M16.0416667,8.75 L14.4008333,8.75 C14.0556554,8.75 13.7758333,9.02982203 13.7758333,9.375 C13.7758333,9.72017797 14.0556554,10 14.4008333,10 L16.0416667,10 C16.3868446,10 16.6666667,9.72017797 16.6666667,9.375 C16.6666667,9.02982203 16.3868446,8.75 16.0416667,8.75 Z" id="Path"></path><path d="M8.5675,8.75 L3.98416667,8.75 C3.6389887,8.75 3.35916667,9.02982203 3.35916667,9.375 C3.35916667,9.72017797 3.6389887,10 3.98416667,10 L8.5675,10 C8.91267797,10 9.1925,9.72017797 9.1925,9.375 C9.1925,9.02982203 8.91267797,8.75 8.5675,8.75 Z" id="Path"></path></g></g></svg>
              </div>
              <div class="col-lg-3">
              <span>Job Details</span>
            </div>
            <div class="col-lg-8"></div>
            </div>
            <br>
             <div class="row">
            <div class="col-sm col-6 box1">
              <p class="popular mt-3">Job Types</p>
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Full Time
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Contract
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Internship
                </label>
                </div>
                  <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Cofounder
                </label>
                </div>
            </div>
             <div class="col-sm col-6 box1 ml-1">
               <span class="mr-2">Required experience</span>
               <p class="popular">Filter jobs by minimum years of experience</p><br>
                <p>
            <input type = "text" id = "exp" 
            style = "border:0; color:#b9cd6d; font-weight:bold;">
          </p>
        <div id = "slider-5" class="mb-2"></div>
            </div>
             </div>
           <hr>
           <!-- Row 6 ends here -->
           <!-- Row 7 starts here -->
           <div class="row mt-3">
            <div class="col-sm col-6 box1">

              <svg height="14" viewBox="0 0 14 14" width="14" class="styles_searchIcon__70lJG"><path d="M13.12 11.535l-2.6-2.601a5.743 5.743 0 1 0-1.585 1.584l2.602 2.6c.44.43 1.143.43 1.583 0a1.12 1.12 0 0 0 0-1.583zM5.748 1.687a4.06 4.06 0 1 1 0 8.12 4.06 4.06 0 0 1 0-8.12z" fill="currentColor" fill-rule="evenodd"></path></svg>
              <span class="ml-2">Keywords</span>
            <br>
           
              <span class="popular mt-3">Included keywords</span>
               <svg viewBox="0 0 27 32" width="16" height="16"><path d="M18.272 24.576v-2.848q0-.256-.16-.416t-.384-.16H16V12q0-.256-.16-.416t-.416-.16H9.728q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h1.696v5.728H9.728q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h8q.224 0 .384-.16t.16-.416zM16 8.576V5.728q0-.256-.16-.416t-.416-.16H12q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h3.424q.256 0 .416-.16t.16-.416zM27.424 16q0 3.744-1.824 6.88t-4.992 4.992-6.88 1.856-6.912-1.856-4.96-4.992T0 16t1.856-6.88 4.96-4.992 6.912-1.856 6.88 1.856T25.6 9.12 27.424 16z" fill="currentColor"></path></svg>
              <input type="text" name="keyword" class="form-control mt-4" placeholder="Enter a Keyword">
            </div>
             <div class="col-sm col-6 box1 ml-1">
               <span class="mr-2">Excluded keywords</span>
                <svg viewBox="0 0 27 32" width="16" height="16"><path d="M18.272 24.576v-2.848q0-.256-.16-.416t-.384-.16H16V12q0-.256-.16-.416t-.416-.16H9.728q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h1.696v5.728H9.728q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h8q.224 0 .384-.16t.16-.416zM16 8.576V5.728q0-.256-.16-.416t-.416-.16H12q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h3.424q.256 0 .416-.16t.16-.416zM27.424 16q0 3.744-1.824 6.88t-4.992 4.992-6.88 1.856-6.912-1.856-4.96-4.992T0 16t1.856-6.88 4.96-4.992 6.912-1.856 6.88 1.856T25.6 9.12 27.424 16z" fill="currentColor"></path></svg>
                <input type="text" name="keyword" class="form-control mt-5" placeholder="Enter a Keyword">
            </div>
             </div>
           <hr>
           <!-- Row 7 ends here -->

            <!-- Row 8 starts here --> 
           <div class="row">
           <div class="col-lg-1">
              <svg height="1em" version="1.1" viewBox="0 0 16 16" width="1em" class="styles_officeIcon__3SSP_"><title>6c25a598-02f2-4035-a8e1-c0db110c90ad@2.00x</title><g fill="none" fill-rule="evenodd" id="Symbols" stroke="none" stroke-width="1"><g fill="currentColor" id="icn_office"><path d="M13.6666667,3.00000121 C13.8507616,3.00000121 14,3.15316695 14,3.34210647 L14,3.34210647 L14,14.9736854 C14,15.540504 13.5522847,16.0000012 13,16.0000012 L13,16.0000012 L9.66666667,16.0000012 C9.48257175,16.0000012 9.33333333,15.8468355 9.33333333,15.6578959 L9.33333333,15.6578959 L9.33333333,14.2894749 C9.33333333,13.5337168 8.73637967,12.9210538 8,12.9210538 C7.26362033,12.9210538 6.66666667,13.5337168 6.66666667,14.2894749 L6.66666667,14.2894749 L6.66666667,15.6578959 C6.66666667,15.8468355 6.51742825,16.0000012 6.33333333,16.0000012 L6.33333333,16.0000012 L3,16.0000012 C2.44771525,16.0000012 2,15.540504 2,14.9736854 L2,14.9736854 L2,3.34210647 C2,3.15316695 2.14923842,3.00000121 2.33333333,3.00000121 L2.33333333,3.00000121 Z M4.33333333,8.47368542 C3.78104858,8.47368542 3.33333333,8.93318265 3.33333333,9.50000121 L3.33333333,9.50000121 L3.33333333,10.8684223 C3.33333333,11.0573618 3.48257175,11.2105275 3.66666667,11.2105275 L3.66666667,11.2105275 L5,11.2105275 C5.18409492,11.2105275 5.33333333,11.0573618 5.33333333,10.8684223 L5.33333333,10.8684223 L5.33333333,9.50000121 C5.33333333,8.93318265 4.88561808,8.47368542 4.33333333,8.47368542 Z M8,8.47368542 C7.44771525,8.47368542 7,8.93318265 7,9.50000121 L7,9.50000121 L7,10.8684223 C7,11.0573618 7.14923842,11.2105275 7.33333333,11.2105275 L7.33333333,11.2105275 L8.66666667,11.2105275 C8.85076158,11.2105275 9,11.0573618 9,10.8684223 L9,10.8684223 L9,9.50000121 C9,8.93318265 8.55228475,8.47368542 8,8.47368542 Z M11.6666667,8.47368542 C11.1143819,8.47368542 10.6666667,8.93318265 10.6666667,9.50000121 L10.6666667,9.50000121 L10.6666667,10.8684223 C10.6666667,11.0573618 10.8159051,11.2105275 11,11.2105275 L11,11.2105275 L12.3333333,11.2105275 C12.5174282,11.2105275 12.6666667,11.0573618 12.6666667,10.8684223 L12.6666667,10.8684223 L12.6666667,9.50000121 C12.6666667,8.93318265 12.2189514,8.47368542 11.6666667,8.47368542 Z M4.33333333,4.36842226 C3.78104858,4.36842226 3.33333333,4.82791949 3.33333333,5.39473805 L3.33333333,5.39473805 L3.33333333,6.7631591 C3.33333333,6.95209862 3.48257175,7.10526436 3.66666667,7.10526436 L3.66666667,7.10526436 L5,7.10526436 C5.18409492,7.10526436 5.33333333,6.95209862 5.33333333,6.7631591 L5.33333333,6.7631591 L5.33333333,5.39473805 C5.33333333,4.82791949 4.88561808,4.36842226 4.33333333,4.36842226 Z M8,4.36842226 C7.44771525,4.36842226 7,4.82791949 7,5.39473805 L7,5.39473805 L7,6.7631591 C7,6.95209862 7.14923842,7.10526436 7.33333333,7.10526436 L7.33333333,7.10526436 L8.66666667,7.10526436 C8.85076158,7.10526436 9,6.95209862 9,6.7631591 L9,6.7631591 L9,5.39473805 C9,4.82791949 8.55228475,4.36842226 8,4.36842226 Z M11.6666667,4.36842226 C11.1143819,4.36842226 10.6666667,4.82791949 10.6666667,5.39473805 L10.6666667,5.39473805 L10.6666667,6.7631591 C10.6666667,6.95209862 10.8159051,7.10526436 11,7.10526436 L11,7.10526436 L12.3333333,7.10526436 C12.5174282,7.10526436 12.6666667,6.95209862 12.6666667,6.7631591 L12.6666667,6.7631591 L12.6666667,5.39473805 C12.6666667,4.82791949 12.2189514,4.36842226 11.6666667,4.36842226 Z M12.0130926,1.20520679e-06 C12.3167616,-0.000435902675 12.6040299,0.118046322 12.7931105,0.3217165 L12.7931105,0.3217165 L13.9271366,1.53600145 C14.007083,1.62181261 14.0225757,1.73930323 13.9669914,1.83824387 C13.911407,1.93718452 13.7945831,2.00006439 13.666464,2.00000121 L13.666464,2.00000121 L2.33286959,2.00000121 C2.20487083,1.99984498 2.08828097,1.93688193 2.03286416,1.83798658 C1.97744735,1.73909122 1.99299217,1.621732 2.0728636,1.53600145 L2.0728636,1.53600145 L3.20622304,0.3217165 C3.39530366,0.118046322 3.68257198,-0.000435902675 3.98624101,1.20520679e-06 L3.98624101,1.20520679e-06 Z" id="Combined-Shape"></path></g></g></svg>
              </div>
              <div class="col-lg-3">
              <span>Company Details</span>
            </div>
            <div class="col-lg-4"></div>
            </div>
            <br>
             <div class="row">
            <div class="col-sm col-6 box1">
              <p class="popular mt-3">Company size</p>
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">1-10 employees
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">11-50 employees
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">51-200 employees
                </label>
                </div>
                  <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">201-500 employees
                </label>
                </div>
                  <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">501-1000 employees
                </label>
                </div>
                  <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">1001-5000 employees
                </label>
                </div>
                  <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">5000+ employees
                </label>
                </div>
            </div>
            <div class="col-sm col-6 box1 ml-1">
              <span class="popular">Investment stage</span>
                 <svg viewBox="0 0 27 32" width="16" height="16"><path d="M18.272 24.576v-2.848q0-.256-.16-.416t-.384-.16H16V12q0-.256-.16-.416t-.416-.16H9.728q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h1.696v5.728H9.728q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h8q.224 0 .384-.16t.16-.416zM16 8.576V5.728q0-.256-.16-.416t-.416-.16H12q-.256 0-.416.16t-.16.416v2.848q0 .256.16.416t.416.16h3.424q.256 0 .416-.16t.16-.416zM27.424 16q0 3.744-1.824 6.88t-4.992 4.992-6.88 1.856-6.912-1.856-4.96-4.992T0 16t1.856-6.88 4.96-4.992 6.912-1.856 6.88 1.856T25.6 9.12 27.424 16z" fill="currentColor"></path></svg>
              <div class="form-check mt-3">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Speed Stage
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Series A
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Series B
                </label>
                </div>
                  <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Growth
                </label>
                </div>
                  <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">IPO
                </label>
                </div>
                  <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Acquired
                </label>
                </div>
            </div>
             </div>
           <!-- Row 8 ends here -->

           </div>
      <!-- Modal body Ends here -->
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary btn-sm">View Resuelts</button>
      </div>
    </div>
  </div>
</div>
			<!-- search area end -->
	</div>
	<!-- next row -->
	<!-- <div class="container"> -->
		<div class="row">
			<div class="col-sm-2">
				<p>Sort by:</p>
			</div>
			<div class="col-sm-3">
				<select>
			<option>Recommended</option>
			<option>Newest</option>
			<option>Last Active</option>
		</select>
			</div>
			<div class="col-sm-2"></div>
      <div class="col-sm-2 mt-2">
        <p>
 <label class="toggleSwitch" onclick="">
                <input type="checkbox" />
                <span>
                    <span></span>
                    <span></span>
                </span>
                <a></a>
            </label>
        </p>
      </div>
      <div class="col-sm-3">Get Job Alert 
      </div>
		</div>
	<!-- </div> -->
</div>
<!-- <div class="col-lg-1"></div> -->
<div class="col-lg-3">

  <div class="row ml-5">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
      <style type="text/css">
                    .common{
                      color: #385075;
                      width: 214px;
                      height: 24px;
                    }
                  </style>
                  <div class="row d-flex justify-content-center">
                  <a href="#"> <svg class="mt-1 common" fill="none" height="16" viewBox="0 0 16 16" width="16"><path d="M2.56684 4.23096H13.1765C14.3177 4.23096 15.2433 5.15669 15.2433 6.29921V12.2062C15.2433 13.3487 14.3177 14.2744 13.1765 14.2744H2.56684C1.42562 14.2744 0.5 13.3487 0.5 12.2062V6.29921C0.5 5.15669 1.42562 4.23096 2.56684 4.23096Z" stroke="currentColor"></path><mask fill="white" id="path-2-inside-1"><path clip-rule="evenodd" d="M4.87891 3.90224C4.87891 2.4837 5.44618 1.33398 6.14522 1.33398H9.6019C10.3009 1.33398 10.8682 2.4837 10.8682 3.90224" fill-rule="evenodd"></path></mask><path d="M6.47891 3.90224C6.47891 3.38456 6.5858 2.9948 6.68491 2.79385C6.73437 2.69354 6.75182 2.70076 6.69421 2.75018C6.62637 2.80838 6.4365 2.93398 6.14522 2.93398V-0.266016C4.85136 -0.266016 4.12376 0.752284 3.81494 1.37847C3.45565 2.10701 3.27891 3.00138 3.27891 3.90224H6.47891ZM6.14522 2.93398H9.6019V-0.266016H6.14522V2.93398ZM9.6019 2.93398C9.31062 2.93398 9.12075 2.80838 9.05291 2.75018C8.9953 2.70076 9.01274 2.69354 9.06221 2.79385C9.16132 2.9948 9.26821 3.38456 9.26821 3.90224H12.4682C12.4682 3.00138 12.2915 2.10701 11.9322 1.37847C11.6234 0.752284 10.8958 -0.266016 9.6019 -0.266016V2.93398Z" fill="currentColor" mask="url(#path-2-inside-1)"></path><path d="M8.727 7.54053H7.01577C6.54323 7.54053 6.16016 7.92381 6.16016 8.39661C6.16016 8.86941 6.54323 9.2527 7.01577 9.2527H8.727C9.19954 9.2527 9.58262 8.86941 9.58262 8.39661C9.58262 7.92381 9.19954 7.54053 8.727 7.54053Z" fill="currentColor"></path><path d="M0.597656 11.1792H15.2643" stroke="currentColor"></path></svg> </a>
                  </div>
                  <div class="row d-flex justify-content-center">
                  <span>Profile Intro</span>
                  </div>
                   <br>
                   <div class="row d-flex justify-content-center">
                  <a href="#"> <svg fill="none" class="common" height="24" viewBox="0 0 24 24" width="24"><path d="M23 21.4783C23 21.732 22.8992 21.9752 22.7198 22.1546C22.5405 22.334 22.2972 22.4348 22.0435 22.4348H1.95652C1.70284 22.4348 1.45954 22.334 1.28016 22.1546C1.10078 21.9752 1 21.732 1 21.4783V15.7391H7.69565V16.6957C7.69717 17.2026 7.8992 17.6883 8.25764 18.0467C8.61608 18.4051 9.10179 18.6072 9.6087 18.6087H14.3913C14.8982 18.6072 15.3839 18.4051 15.7424 18.0467C16.1008 17.6883 16.3028 17.2026 16.3043 16.6957V15.7391H23V21.4783Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M1 15.7391L4.07139 10.4783C4.1551 10.3333 4.27539 10.2128 4.42025 10.1289C4.56511 10.0449 4.72946 10.0005 4.89687 10H19.1031C19.2705 10.0005 19.4349 10.0449 19.5798 10.1289C19.7246 10.2128 19.8449 10.3333 19.9286 10.4783L23 15.7391" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg> </a>
              </div>
              <div class="row d-flex justify-content-center mt-1">
                  <span>About Me</span>
              </div>
                      <br>
                  <div class="row d-flex justify-content-center">
                 <a href="#"> <svg fill="none" class="common" height="24" viewBox="0 0 24 24" width="24"><path d="M20 11V22C20 22.2652 19.8946 22.5196 19.7071 22.7071C19.5196 22.8946 19.2652 23 19 23H2C1.73478 23 1.48043 22.8946 1.29289 22.7071C1.10536 22.5196 1 22.2652 1 22V3C1 2.73478 1.10536 2.48043 1.29289 2.29289C1.48043 2.10536 1.73478 2 2 2H15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M12.324 14.507L7.375 16.627L9.496 11.677L20.174 1L23.002 3.828L12.324 14.507Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M21.1669 5.66402L18.3379 2.83502" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg> </a>
              </div>
              <div class="row d-flex justify-content-center">
                  <span>My Email</span>
              </div>
                  <br>
                  <div class="row d-flex justify-content-center">
                  <a href="#"> <svg fill="none" class="common" height="24" viewBox="0 0 16 16" width="24"><path d="M8 0.557129C3.58867 0.557129 0 3.5398 0 7.20713C0.00988202 8.04845 0.196406 8.87832 0.547486 9.64296C0.898567 10.4076 1.40637 11.0899 2.038 11.6458L0.620667 14.4751C0.558582 14.5988 0.53655 14.7388 0.557626 14.8756C0.578702 15.0124 0.641842 15.1393 0.738283 15.2386C0.834724 15.3379 0.959684 15.4047 1.09582 15.4298C1.23196 15.4548 1.37252 15.4369 1.498 15.3785L5.48533 13.5225C6.30487 13.7455 7.15064 13.8577 8 13.8558C12.4113 13.8558 16 10.8725 16 7.2058C16 3.53913 12.4113 0.557129 8 0.557129ZM8 12.5238C7.19552 12.5255 6.39523 12.4078 5.62533 12.1745C5.46799 12.1265 5.29845 12.1383 5.14933 12.2078L3.10267 13.1605C3.07128 13.1751 3.03611 13.1796 3.00204 13.1733C2.96798 13.1671 2.93671 13.1504 2.91259 13.1255C2.88846 13.1006 2.87268 13.0689 2.86744 13.0347C2.8622 13.0004 2.86775 12.9654 2.88333 12.9345L3.46267 11.7778C3.53093 11.6414 3.55036 11.4857 3.51773 11.3368C3.48509 11.1878 3.40236 11.0545 3.28333 10.9591C2.69392 10.5236 2.21182 9.9592 1.87386 9.30893C1.5359 8.65867 1.35102 7.93976 1.33333 7.20713C1.33333 4.2738 4.324 1.89046 8 1.89046C11.676 1.89046 14.6667 4.27513 14.6667 7.20713C14.6667 10.1391 11.676 12.5238 8 12.5238Z" fill="currentColor"></path>
                  </svg> </a>
              </div>
              <div class="row d-flex justify-content-center">
                  <span>My CV</span>
              </div>
          
    </div>
    <div class="col-sm-7"></div>
  </div>
</div>
</div>
<!-- next single line -->
<section>
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <p>
          <i class="fas fa-eye-slash"></i> &nbsp;
          Hiding jobs that do not accept applications from your location: Hyderabad.
          <a href="#">Update location</a></p>
      </div>
      <div class="col-lg-3"></div>
    </div>
</section>
<!-- job section start -->
<section>
  <div class="row">
    <div class="col-lg-3">
            <!-- Interested jobs portion goes here -->
<!--       <div class="card ml-2" style="width: 15rem;">
  <div class="card-body">
    <h6><i class="fa fa-search"></i><span class="ml-3"> Intrested Jobs</span></h6>
    <hr>
    <h6 class="card-subtitle mb-2 text-muted">Front-End Developer</h6>
    <span class="ml-5 text-danger">12000-50000/month</span>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales leo ante, ut vulputate lacus euismod vel. Aliquam erat volutpat.<a class="ml-1" href="#">view more</a> </p>
  </div>
</div> -->
    </div>


    
    <div class="col-lg-6">
      <div class="row">
        <div class="col-sm-1">
         <img class="img1" src="public/uploads/website/img1.jpg" width="46" height="46" alt="image">
        </div>
        <div class="col-sm-8">
          <h3 class="acquia">Acquia</h3>
      <p class="empower">Empowering brands to embrace innovation and create customer moments that matter</p>
      <svg height="12px" class="man" version="1.1" viewBox="0 0 12 12" width="12px"><g fill="none" fill-rule="evenodd" id="Symbols" stroke="none" stroke-width="1"><g fill="currentColor" fill-rule="nonzero" id="icn_headcount"><g id="multiple-neutral-2" transform="translate(1.000000, 0.000000)"><path d="M6.5,7 L6.5,8.75 C6.5,8.837 6.522,9.024 6.5245,9.055 L6.751,11.771 C6.76191037,11.9004265 6.87011451,12.0000016 7,12.0000016 L9,12.0000016 C9.13026932,12.0004603 9.23905812,11.9008098 9.25,11.771 L9.4715,9.1145 C9.47692078,9.0501673 9.53044164,9.00054675 9.595,9 L10.5,9 C10.6380712,9 10.7500041,8.88807119 10.7500041,8.75 L10.7500041,7 C10.7519191,5.88126038 10.0748366,4.87324528 9.03846206,4.45192621 C8.00208748,4.03060714 6.8137235,4.28025922 6.0345,5.083 C5.99521786,5.12315163 5.98783272,5.18469444 6.0165,5.233 C6.33297432,5.76808327 6.49995545,6.3783328 6.5,7 Z" id="Path"></path><circle cx="8" cy="1.75" r="1.75"></circle><path d="M0.25,8.75 C0.25,8.88807119 0.361928813,9 0.5,9 L1.405,9 C1.46994274,9.00003025 1.52404482,9.04978677 1.5295,9.1145 L1.75,11.771 C1.76094188,11.9008098 1.86973068,12.0004603 2,12.0000016 L4,12.0000016 C4.13026932,12.0004603 4.23905812,11.9008098 4.25,11.771 L4.4715,9.1145 C4.47692078,9.0501673 4.53044164,9.00054675 4.595,9 L5.5,9 C5.63807119,9 5.75,8.88807119 5.75,8.75 L5.75,7 C5.75,5.48121694 4.51878306,4.25 3,4.25 C1.48121694,4.25 0.25,5.48121694 0.25,7 L0.25,8.75 Z" id="Path"></path><circle cx="3" cy="1.75" r="1.75"></circle><path d="M6.5,7 L6.5,8.75 C6.5,8.837 6.522,9.024 6.5245,9.055 L6.751,11.771 C6.76191037,11.9004265 6.87011451,12.0000016 7,12.0000016 L9,12.0000016 C9.13026932,12.0004603 9.23905812,11.9008098 9.25,11.771 L9.4715,9.1145 C9.47692078,9.0501673 9.53044164,9.00054675 9.595,9 L10.5,9 C10.6380712,9 10.7500041,8.88807119 10.7500041,8.75 L10.7500041,7 C10.7519191,5.88126038 10.0748366,4.87324528 9.03846206,4.45192621 C8.00208748,4.03060714 6.8137235,4.28025922 6.0345,5.083 C5.99521786,5.12315163 5.98783272,5.18469444 6.0165,5.233 C6.33297432,5.76808327 6.49995545,6.3783328 6.5,7 Z" id="Path"></path><circle cx="8" cy="1.75" r="1.75"></circle><path d="M0.25,8.75 C0.25,8.88807119 0.361928813,9 0.5,9 L1.405,9 C1.46994274,9.00003025 1.52404482,9.04978677 1.5295,9.1145 L1.75,11.771 C1.76094188,11.9008098 1.86973068,12.0004603 2,12.0000016 L4,12.0000016 C4.13026932,12.0004603 4.23905812,11.9008098 4.25,11.771 L4.4715,9.1145 C4.47692078,9.0501673 4.53044164,9.00054675 4.595,9 L5.5,9 C5.63807119,9 5.75,8.88807119 5.75,8.75 L5.75,7 C5.75,5.48121694 4.51878306,4.25 3,4.25 C1.48121694,4.25 0.25,5.48121694 0.25,7 L0.25,8.75 Z" id="Path"></path><circle cx="3" cy="1.75" id="Oval" r="1.75"></circle></g></g></g></svg> &nbsp; <span class="emp">501-1000 Employees</span>
        </div>
        <div class="col-sm-3"></div>
      </div>
    </div>
     <div class="col-lg-3"></div>
  </div>
</section>
<!-- next section -->
<section>
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 mt-3">
      <span class="bg-green">
      <svg height="8" width="12" class="styles_checkmark__3gVdV"><g fill="none" fill-rule="evenodd"><path d="M9.629 1.367a.557.557 0 0 1-.174.4L4.112 6.836a.62.62 0 0 1-.844 0L.174 3.901A.557.557 0 0 1 0 3.5c0-.147.062-.295.174-.4l.845-.802a.62.62 0 0 1 .845 0L3.69 4.036 7.765.165a.62.62 0 0 1 .845 0l.845.801a.557.557 0 0 1 .174.401z" fill="currentColor"></path></g></svg>
      <span class="active">ACTIVELY HIRING</span>
      </span>
      <span class="bg-green ml-5">
        <img src="public/uploads/website/uber.jpg" height="12" width="16" alt="">
        <span class="active">SAME INVESTOR AS UBER</span>
      </span>
      <div class="row mt-5">
        <div class="col-sm-9 bd1">
          <p>Associate Mulesoft Engineer (University) <span class="ml-5">India .pune</span></p>
          <hr>
          <p class="mt-2">Implementation Consultant (SQL Developer) <span class="ml-3">India .pune</span></p>
        </div>
        <div class="col-sm-2 bd2">
          <span class="days">7 DAYS AGO</span>
          <hr>
          <div class="days mt-4">7 DAYS AGO</div>
        </div>
        <div class="col-sm-1 bd3">
          <button class="btn btn-outline-primary btn-sm">Apply</button><hr>
          <button class="btn btn-outline-primary btn-sm">Apply</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3"></div>
  </div>
      <!-- star and report -->
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-2 mt-4">
         <a href="#"> <svg class="star" height="24" viewBox="0 0 24 24" width="24" class="styles_icon__2vfvM"><path d="M12.729 1.2l3.346 6.629 6.44.638a.805.805 0 0 1 .5 1.374l-5.3 5.253 1.965 7.138a.813.813 0 0 1-1.151.935L12 19.934l-6.52 3.229a.813.813 0 0 1-1.151-.935l1.965-7.138L.99 9.837a.805.805 0 0 1 .5-1.374l6.44-.638L11.271 1.2a.819.819 0 0 1 1.458 0z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg></a>
          <span class="ml-3 save"><a href="#">Save</a></span>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-2 mt-4">
          <svg height="15" width="16"><path d="M15.413 12.667L9.18.767a1.333 1.333 0 00-2.362 0l-6.232 11.9a1.333 1.333 0 001.182 1.952H14.23a1.334 1.334 0 001.182-1.952zm-8.08-7.718a.667.667 0 011.334 0v4a.667.667 0 01-1.334 0v-4zm.7 7.673h-.018A1.019 1.019 0 017 11.642a.984.984 0 01.965-1.02h.019c.546 0 .995.432 1.016.978a.983.983 0 01-.967 1.022z" fill="currentColor" fill-rule="nonzero"></path></svg>
          <span class="report mr-4"><a href="#">Report</a></span>

          <svg height="15px" viewBox="0 0 16 15" width="16px"><g fill="none" fill-rule="evenodd" id="-↳-Results-Workspace" stroke="none" stroke-width="1"><g fill="currentColor" fill-rule="nonzero" id="unrolled-bottom-alt"><path d="M13.7504,2.1204 C10.7495056,-0.69128159 5.88552715,-0.68993841 2.88640008,2.12340008 C-0.112726993,4.93673856 -0.11129434,9.49671833 2.8896,12.3084 C5.83726449,15.0128027 10.5255588,15.0857763 13.56736,12.4746 C14.2093574,11.911688 14.7441806,11.2501932 15.1488,10.5186 C15.5354899,9.81474639 15.7950097,9.05565085 15.9168,8.2722 C15.971697,7.92194135 15.9995029,7.56841928 16.0000286,7.2144 C16.0055719,5.30294151 15.1955684,3.4687675 13.7504,2.1204 Z M4.02688,3.1752 C6.14019983,1.23501468 9.42631399,0.977321397 11.85408,2.5614 C11.8939673,2.58868613 11.9191268,2.63096472 11.9229421,2.67711749 C11.9267574,2.72327026 11.9088467,2.76867817 11.87392,2.8014 L3.62688,10.5366 C3.59187562,10.5691509 3.54349469,10.5858101 3.49433841,10.5822386 C3.44518212,10.5786671 3.40011678,10.5552184 3.37088,10.518 C1.64583935,8.24906642 1.92328766,5.14350627 4.02688,3.1752 Z M12.63936,11.2536 C10.5380299,13.21872 7.23185819,13.477965 4.81152,11.8674 C4.77154291,11.840208 4.74625881,11.7979783 4.74232014,11.751822 C4.73838146,11.7056656 4.75618262,11.6602046 4.79104,11.6274 L13.03872,3.8916 C13.0737244,3.85904908 13.1221053,3.84238986 13.1712616,3.84596137 C13.2204179,3.84953288 13.2654832,3.87298156 13.29472,3.9102 C15.0204611,6.17896841 14.7435438,9.28489888 12.64,11.2536 L12.63936,11.2536 Z" id="Shape"></path></g></g></svg>
          <span class="hide"><a href="#">Hide</a></span>
        </div>
      </div>
</section>

</body>
</html>