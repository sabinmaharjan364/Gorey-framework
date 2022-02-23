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
				<div class="col-id-2 cat_body">
					<div >
						<h1>Browse categories</h1>

						<ul>
							<?php while ($row = $data['categories']->fetchArray()) {?>
							<li class="cat-item">
								<a href="<?php echo SITEROOT?>pages/book_by_category/<?php echo $row['id'];?>"><?php echo $row['title'];?></a>
								
							</li>
							<?php }?>
							
						</ul>
					</div>
				</div>
				<div class="col-id-8">
			
				<!-- content description of our Company -->
					<?php while ($row = $data['books']->fetchArray()) {?>
						
						
							<!-- creates a 25% width column -->
							<div class="col-id-3 card">

								
									<?php if(empty($row['image'])){?>
										<i class="fa fa-book"></i>
										
									<?php }else{?>
									<img src="<?php echo IMG.'books/'.$row['image']?>" alt="Rachel Abbott" style="width:100%">
									<?php }?>

									<h1><?php echo $row['title'];
									
									$id=$row['id'];
									?>	</h1>
									<p class="price">$ <?php echo $row['price']; ?></p>
									<p class="description"><?php echo $row['description']; ?></p>
									<p>							
										<i class="fa fa-shopping-cart" onclick="addToCart('<?php echo $id?>')"> </i>
										<a href="<?php echo SITEROOT?>pages/bookDetail/<?php echo $id?>"><i class="fa fa-eye"> </i></a>
									</p>
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
	<script type="text/javascript" src="<?php echo SITEROOT?>/public/scripts/project/add-to-cart.js"></script>    

<?php
	require(FRONTEND.'include/footer.php');

?>
