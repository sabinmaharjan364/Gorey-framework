<?php 
	require(BACKEND.'include/header.php');
    require(BACKEND."include/nav.php");
   
?>
	<main>
		<article>
      <?php 	require(BACKEND.'include/slider.php');?>
			
			<section class="row">
				<div class="col-id-1"></div>
				<div class="col-id-10">
				<!-- content description of our Company -->
					<article>
						<?php echo $data;?>
					</article>
					
				</div>
				<div class="col-id-1"></div>
			<!-- end of section -->			
			</section>			
			<!-- end of article -->
			<br><br><br>
		</article>
	<!-- end of main -->
	</main>		
<?php
	require(BACKEND.'include/footer.php');

?>
