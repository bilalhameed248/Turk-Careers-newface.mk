<?php include('timeline/include/header.php'); ?>
<section>
		<div class="page-header">
			<div class="header-inner">
				<h2>Price Plans</h2>
				<p>
					Welcome to Pitnik Social Network. Here you’ll find all the typography, content sources, & ready made elemets as you want. you can use to show on your custom pages.
				</p>
			</div>
			<figure><img src="images/resources/baner-badges.png" alt=""></figure>
		</div>
	</section><!-- sub header -->
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="offset-lg-1 col-lg-10">
						<div class="sec-heading style9 text-center">
							<span><i class="fa fa-trophy"></i> this is an optional</span>
							<h2>Our Price <span>Plans</span></h2>
						</div>
					</div>
					<?php foreach($subscriptions as $subs){  ?>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="price-box">
							<span class="bg-blue"><?php echo $subs->name;  ?></span>
							<div class="pricings">
								<h2><?php echo $subs->name; ?></h2>
								<h1><?php echo $subs->price; ?> <span>Per Month</span></h1>
								<p>
									<?php echo $subs->desc;  ?>
								</p>
								<ul class="price-features">
									<?php   if(isset($_SESSION['logged_in'])){  ?>
									<li><i class="ti-check"></i> Max jobs application:<?php echo $subs->apply_limit; ?></li> <?php } elseif(isset($_SESSION['owner_logged_in'])){ ?>
									<li><i class="ti-check"></i> Max jobs posting:<?php echo $subs->post_limit; ?></li><?php } ?>
									<li><i class="ti-check"></i> Price:<?php echo $subs->price; ?></li>
									
								</ul>
								<?php  if ($user->subscription_id==$subs->id) {  ?>
									<a class="btn btn-success" style="width:100%;border-radius: 30px;" href="#" title="" data-ripple="">Active</a>
									<?php } else {  ?>
                                    <?php

                                    $clientId = "180000467";			//Merchant Id defined by bank to user
                                    $amount = $subs->price;					//Transaction amount
                                    $currencyVal = $subs->currency_code;			//Currency code, 949 for TL, ISO_4217 standard
                                    $oid = "";							//Order Id. Must be unique. If left blank, system will generate a unique one.

                                    $okUrl = "https://www.newface.mk/home/callback";	 //URL which client be redirected if authentication is successful
                                    $failUrl = "https://www.newface.mk/home/failurl";	//URL which client be redirected if authentication is not successful

                                    $rnd = microtime();				//A random number, such as date/time

                                    $storekey = "SKEY0467";			//Store key value, defined by bank.
                                    $storetype = "3D_PAY_HOSTING";	//3D authentication model
                                    $lang = "en";					//Language parameter, "tr" for Turkish (default), "en" for English
                                    $instalment = "";				//Instalment count, if there's no instalment should left blank
                                    $transactionType = "Auth";		//transaction type

                                    $hashstr = $clientId . $oid . $amount . $okUrl . $failUrl .$transactionType. $instalment .$rnd . $storekey;

                                    $hash = base64_encode(pack('H*',sha1($hashstr)));


                                    $_SESSION['halk_amount']=$amount;
                                    $_SESSION['halk_currency_code']=$currencyVal;
                                    $_SESSION['subscription_id']=$subs->id;

                                    ?>
                                    <form method="post" action="https://epay.halkbank.mk/fim/est3Dgate">
                                        <center>
                                            <input type="hidden" name="clientid" value="<?php echo $clientId; ?>" />
                                            <input type="hidden" name="amount" value="<?php echo $amount; ?>" />
                                            <input type="hidden" name="islemtipi" value="<?php echo $transactionType; ?>" />
                                            <input type="hidden" name="taksit" value="<?php echo $instalment; ?>" />
                                            <input type="hidden" name="oid" value="<?php echo $oid; ?>" />
                                            <input type="hidden" name="okUrl" value="<?php echo $okUrl; ?>" />
                                            <input type="hidden" name="failUrl" value="<?php echo $failUrl; ?>" />
                                            <input type="hidden" name="rnd" value="<?php echo $rnd; ?>" />
                                            <input type="hidden" name="hash" value="<?php echo $hash; ?>" />
                                            <input type="hidden" name="storetype" value="<?php echo $storetype; ?>" />
                                            <input type="hidden" name="lang" value="<?php echo $lang; ?>" />
                                            <input type="hidden" name="currency" value="<?php echo $currencyVal; ?>" />
                                            <input type="hidden" name="refreshtime" value="10" />
                                        </center>
                                        <?php



                                        ?>
                                    <button type="submit" class="btn btn-success main-btn" style="color: #fff; background-color: #dc3545;border-color: #28a745;width: 100%;
    border-radius: 30px;">Buy Now</button>
                                    </form>
								 <?php }  ?>
							</div>	
						</div>
					</div>
					<?php  }  ?>
					
				</div>
			</div>
		</div>
	</section><!-- price plans -->
    <?php 
 include('timeline/include/footer.php'); ?>