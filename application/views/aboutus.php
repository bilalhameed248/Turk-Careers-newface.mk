<?php include('include/header_new.php'); ?>
  <link rel="stylesheet" href="<?php echo base_url();?>public/css/aboutus.css" type="text/css" media="all">
<style type="text/css">
	.common-btn.scrolled{
  display: none;
}
</style>
<body>
	<section id="section_01" style="display: none;">
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-12 mt-5">
				<!-- <h3 id="h3" class="text-center mt-5">Vision:</h3>
				<h5 class="mb-5 text-center"><span class="line2" style="text-decoration: none;">Change the fundamental dynamics of the labor market&nbsp;to enable a <br> meritocratic talent ecosystem</span></h5>
				<h3 id="h4" class="text-center mt-5">Mission:</h3>
				<h5 class=" text-center"><span class="line2">Empower companies to hire and manage talent based on abilities and potential</span></h5> -->
			</div>
			</div>
		</div>
	</section>
	<!-- section 02 -->
	<section id="section_02">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mt-5" id="main">
					<h6 id="h6">About Us</h6>
					<hr>
					<p>
					<span id="line1">Want to know more about why we started New Face? &nbsp;</span>
				</p>
				<p><span>Here’s the scoop. The Scouted Scoop.</span>
				</p>
				<p>
					<span>We were heading into work on Monday. We’d probably tell you it was created to fuse the power of AI data analytics with insightful, real human coaching to revolutionize the way people build careers. But, ask us on Friday afternoon and we’ll tell you we wanted to build a job dating service, except instead of a person, you’re falling in love with your job. &nbsp;</span>
				</p>
				<p>
					<span>Here’s the problem we’re trying to fix, no matter when you talk to us: <strong>Our country’s hiring system is stuck in the 1980s</strong>.&nbsp;</span>
				</p>
				<p><span>Finding a job can feel like a series of terrible, sit-com-worthy blind dates. The old process places too much value on past experience, pedigree, and connections, overlooking important assets like grit, emotional intelligence, how you think, your potential, and culture fit.&nbsp;</span></p>
				<p><span>We saw way too much talent get overlooked for opportunities because they didn’t attend the *right* school or didn’t have the *right* former title and we realized how much both candidates and companies were missing out.&nbsp;</span></p>

				<p>
					<span>And no matter where you go to school, it’s way too easy to end up on a recruitment conveyor belt that dumps you into a job that has </span>
					<i>
						<span>nothing </span>
					</i>
					<span>to do with your values and aspirations. Try to move out of that job track later in life, and suddenly you’re on your own, with no support network or resources for making a career change.&nbsp;</span>
				</p>

				<p><span>Before we founded New Face, we had the privilege of starting our own careers at outsourcing company, building and scaling the talent management program as the company grew. &nbsp;</span></p>
				<p><span>While logging countless hours on the road visiting campus recruiting events and reviewing hundreds of thousands of applications, we learned a few things:</span></p>
				<ul>
				<li style=" list-style-type: disc;"><span class="d-flex">Knowing your company culture is non-negotiable if you want to attract and retain the right talent.&nbsp;</span></li>
				<li style=" list-style-type: disc;"><span class="d-flex">It’s more effective to grow future stars than to hire them when they are more seasoned.</span></li>
				<li style=" list-style-type: disc;"><span class="d-flex">It’s better to find hungry, less-experienced hires with great potential than to insist on hiring only those with the “requisite experience.”&nbsp;</span></li>
				<li style=" list-style-type: disc;"><span class="d-flex">More than anything, we learned how a great job can change a person’s life trajectory.&nbsp;</span></li>
				</ul>
				<p><span>That’s what happened to us: <strong>a great job changed our lives</strong>.&nbsp;</span></p>

				<p><span>But even in those unique circumstances, with all our expertise in the talent space, we still had times when we struggled to see the paths forward in our own careers, to figure out if a new opportunity aligned with our strengths and ambitions. We were searching for a tool to help us get at the heart of what matters in hiring by treating the people involved like, well, people: complex, changing, full of potential. When we couldn’t find that tool, we decided to build it ourselves.&nbsp;</span></p>

				<p><span>Our people-driven analytics cut back on waste and creates a more competent and efficient hiring process. We work with companies from well-known IT sector to brand-new start-ups, to hone in on the qualities they want in prospective employees. We work with our candidates to better understand and advocate for their passions, skills, and potential. It’s all about matching empowered talent with enlightened companies.&nbsp;</span></p>
				<p><span>We’ve always believed that </span><b>candidates are more than their resume</b><span>. Scouted de-emphasizes traditional metrics like major, GPA, and past titles to help candidates get past the resume screen and land jobs based on who they are, not just how they look on paper. Our vision is to change the fundamental dynamics of the labor market to be based on true merit and potential.&nbsp;</span></p>

				<p><span>That’s a big goal, and we’re passionate about achieving it. But what energizes us is the knowledge that every day we get to connect individuals to fulfilling careers that allow them to thrive.&nbsp;</span></p>

				</div>
			</div>
		</div>
	</section>
	<!-- <section class="last_section">
		<div class="row">
			<div class="col-lg-12 mt-5">
				<img src="<?php //echo base_url();?>public/img/team-pic.jpg" width="100%">
			</div>
		</div>
	</section> -->
	<script>
  $(document).ready(function(){
    $(".test1").css("display","none");
      $(document).scroll(function () {
    var $nav = $(".common-btn");
    $(".test1").hide();
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    if($(this).scrollTop() > $nav.height())
    {
     $(".test1").show();
    }
    else
    {
      $(".test1").hide();
    }
  });
  });
</script>
</body>
<?php include('include/footer_new.php'); ?>