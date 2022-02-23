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
				<div class="col-id-10">
				<!-- content description of our Company -->
				<?php while ($row = $data->fetchArray()) {?>
						
						
						<!-- creates a 25% width column -->
						<div class="col-id-3 card">

							
								<?php if(empty($row['image'])){?>
									<i class="fa fa-book"></i>
									
								<?php }else{?>
									<img src="<?php echo IMG.'AUTHOR/'.$row['image'];?>" alt="Rachel Abbott" style="width:100%">

								<?php }?>

								<h1><?php echo $row['full_name'];
								
							
								?>	</h1>
								
						</div>
							
				<?php }?>
				
					
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
	require(FRONTEND.'include/footer.php');

?>
