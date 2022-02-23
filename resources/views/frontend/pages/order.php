<?php 
	require(FRONTEND.'include/header.php');
    require(FRONTEND."include/nav.php");
   
?>
	<main>
		<article>
	  <?php 	
	//   require(FRONTEND.'include/slider.php');?>
			
			<section class="row">
				<div class="col-id-2"></div>
				
				<div class="col-id-10">
			
				<!-- content description of our Company -->
					<?php 
					
					 while ($row = $data->fetchArray()) {?>
						
						
							<!-- creates a 25% width column -->
							<div class="col-id-3 card">

								
									

									<h1><?php echo $row['title'];
									// echo $row['user_id'];
									
									?>	</h1>
									<p class="price">$ <?php echo $row['price']; ?></p>
									<p class="quantity"><?php echo $row['quantity']; ?> Piece</p>
									
							</div>
								
					<?php }?>
					
				</div>
				<div class="col-id-2"></div>
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
