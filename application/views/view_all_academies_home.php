

<?php include('include/header_new.php'); ?>
<div class="page-title-area">
<div class="d-table">
<div class="d-table-cell">

</div>
</div>
</div>


<section class="companies-area companies-area-two pt-100">
<div class="container mb-5">
<div class="page-title-text">
<div class="row">
  <div class="col-lg-6">
  <div class="form-group">
    <input type="text" name="searchbyname" class="form-control" placeholder="Search by Name" id="acc_title">
  </div>
</div>
<div class="col-lg-6">
  <div class="form-group">
    <input type="text" name="searchbyname" class="form-control" placeholder="Search by Owner Name" id="acc_field">
  </div>
</div>
</div>
</div>
<div class="row" id="loadaccs">


</div>
</div>
</section>





<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url().'/public' ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url().'/public' ?>/assets/js/popper.min.js"></script>
<script src="<?php echo base_url().'/public' ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url().'/public' ?>/assets/js/jquery.meanmenu.js"></script>

<script src="<?php echo base_url().'/public' ?>/assets/js/jquery.nice-select.min.js"></script>

<script src="<?php echo base_url().'/public' ?>/assets/js/jquery.mixitup.min.js"></script>

<script src="<?php echo base_url().'/public' ?>/assets/js/owl.carousel.min.js"></script>

<script src="<?php echo base_url().'/public' ?>/assets/js/jquery.ajaxchimp.min.js"></script>

<script src="<?php echo base_url().'/public' ?>/assets/js/form-validator.min.js"></script>

<script src="<?php echo base_url().'/public' ?>/assets/js/contact-form-script.js"></script>

<script src="<?php echo base_url().'/public' ?>/assets/js/wow.min.js"></script>

<script src="<?php echo base_url().'/public' ?>/assets/js/odometer.min.js"></script>
<script src="<?php echo base_url().'/public' ?>/assets/js/jquery.appear.min.js"></script>

<script src="<?php echo base_url().'/public' ?>/assets/js/custom.js"></script>
<?php 
include('include/footer_new.php');  ?>
  <!-- code for search accademy-->
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
  	
  $("#acc_title").keyup(function(){
    filterjobs();
  });
	function filterjobs()
	{
		var title=$("#acc_title").val();
    
		var field2=$("#acc_field").val();
    
		var url="<?php echo base_url();?>home/filter_acc";
		$.post(url , {title:title}).done(function(data) {
		  
		  //data.forEach(loaddata);
		  console.log(data);
		  $("#loadaccs").html(data);	 
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


