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
					<article>
						<div class="row">
							<form action="<?php echo SITEROOT ;?>pages/advanceSearch" method="post">
								<div class="col-id-2">
								<label for="author">Book Title </label><div id=""></div>

									<input type="text" name="title" class="form-control" placeholder="Book title"/>

								</div>
								<div class="col-id-2">
									<label for="author">Genre </label><div id=""></div>

									<select name="genre_id" class="form-control">
									<option selected disabled>Please select one option</option>
										<?php while( $genre=$data['genres']->fetchArray()){ ?>
										<option value="<?php echo $genre['id'] ?>"><?php echo $genre['title'] ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-id-2">
									<label for="author">Author </label><div id=""></div>
									<select name="author_id" class="form-control">
									<option selected disabled>Please select one option</option>
										<?php while( $author=$data['author']->fetchArray()){ ?>
										<option value="<?php echo $author['id'] ?>"><?php echo $author['full_name'] ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-id-2">
									<label for="publication">Publication </label><div id=""></div>
									<select name="publisher_id" class="form-control">
									<option selected disabled>Please select one option</option>
										<?php while( $genre=$data['publishers']->fetchArray()){ ?>
										<option value="<?php echo $genre['id'] ?>"><?php echo $genre['title'] ?></option>
										<?php } ?>
									</select>
									
								</div>
								<div class="col-id-2">
								<label for="publication">Price Range </label><div id=""></div>
								<input type = "text" id = "price" name="price" class="range-slider"
												>
												<div id = "slider-3"></div>
								</div>
								<div class="col-id-2">
								<label for="submit">Advance search </label><div id=""></div>

											
									<input type="submit" name="advance_search" class="btn form-control" value="Search" />

								</div>
							</form>
                        
						</div>
						
			
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
							

					</div>
					</article>
					
				</div>
				<div class="col-id-1"></div>
			<!-- end of section -->			
			</section>			
			<!-- end of article -->
			<br><br><br>
		</article>
	<!-- end of main -->
	<script type="text/javascript" src="<?php echo SITEROOT?>/public/scripts/jquery-ui.js"></script>    
	<script type="text/javascript" src="<?php echo SITEROOT?>/public/scripts/slider.js"></script>    
	<script type="text/javascript" src="<?php echo SITEROOT?>/public/scripts/project/add-to-cart.js"></script>    


	</main>		
<?php
	require(FRONTEND.'include/footer.php');

?>
