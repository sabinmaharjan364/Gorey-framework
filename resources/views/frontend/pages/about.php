<?php 
	require(FRONTEND.'include/header.php');
    require(FRONTEND."include/nav.php");
   
?>
	<main>
		<article>
	  <?php 	
	//   require(FRONTEND.'include/slider.php');?>
			
			<section class="row">
				<div class="col-id-1"></div>
				<div class="col-id-10 center">
				<!-- content description of our Company -->
					
					<h1><?php echo ABOUT;?></h1>
					<div class="line"></div>

					
					
				</div>
				<div class="col-id-1"></div>
			<!-- end of section -->			
			</section>			
			<section class="row ">
				<div class="col-id-2"></div>
				<div class="col-id-8 ">
				<!-- content description of our Company -->

					<p>
					<?php echo ABOUT_MSG;?>
					</p>
				</div>
				<div class="col-id-2"></div>
			<!-- end of section -->
				
			</section>
			<section class="row center">
				<h1>Contact Detail</h1>
				

				<div class="line"></div>
			<!-- end of section -->

			</section>
			<section class="row">
				<div class="col-id-2"></div>
				<div class="col-id-8 center">
				<!-- content description of our Company -->

					<p> Email : admin@blackrose.org.au</p>
					<p> phone: +61 4511111111</p>
					<p> Location: USQ</p>
					
				</div>
				<div class="col-id-2"></div>

			</section>
		

			<section class="row center">
				<h1>Our Location</h1>
				

				<div class="line"></div>
			<!-- end of section -->

			</section>
			<section class="row">
				<!-- location of our Company in google map iframe-->

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14143.208411709607!2d151.93061652730714!3d-27.599664401682563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b965ba0ae2dc443%3A0x369fad567da34942!2sUniversity%20of%20Southern%20Queensland!5e0!3m2!1sen!2sau!4v1566902651289!5m2!1sen!2sau" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			<!-- end of section -->

			</section>
			<!-- end of article -->
			<br><br><br>
		</article>
	<!-- end of main -->
	</main>		
<?php
	require(FRONTEND.'include/footer.php');

?>
