<?php 

	require(FRONTEND."include/header.php");
    require(FRONTEND."include/nav.php");
?>
	<main>
		<article>
      <?php 	require(FRONTEND.'include/slider.php');?>
			
			<section class="row">
				<div class="col-id-1"></div>
				<div class="col-id-10 center">
				<?php if(isset($_GET['msg'])){?>
					<h1><p class="success"><?php	echo $_GET['msg']; ?></p></h1>
<?php
				}?>

					<section class="row center" >
						<!-- title of welcome message-->
						<h1><?php echo ABOUT;?></h1>
						<div class="line"></div>
						<!-- column with 16.66% width -->
						

						<!-- column with 66.66% width -->
						<div class="col-id-12">
							<!-- content  -->
							<br>

							<?php echo ABOUT_MSG;?>
						</div>
						<!-- column with 16.66% width -->
						

					<!-- end of section -->
					</section>
					<hr>

					<section class="row center" >
						<!-- title of block with center -->
						<h1>Best Selling</h1>
						<div class="line"></div>
					<!-- end of section -->
						
					</section>

					<section class="row slide-box">

						<?php while ($row = $data['books']->fetchArray()) {?>

							<!-- creates a 25% width column -->
							<div class="col-id-3">
								<div class="content">
									<!-- Best selling books list with image and clicked this link will navigate to amazon website which contains detail information of author  -->
										<!-- image of book -->
										<!--float and align center --><i class="fa fa-book"></i>
											<?php echo $row['title'];?>				      
									</div>
								
							</div>
						<?php }?>
						
					<!-- end of section -->

					</section>
					<br>
					<br>
					<!--  break line-->
					<br>
					<section class="row center">
						<h1>Best Author</h1>
						<div class="line"></div>
					<!-- end of section -->

					</section>
					<section class="row slide-box">
						<?php while ($row = $data['author']->fetchArray()) {?>
							<!-- creates a 25% width column -->
							<div class="col-id-3">
								<div class="content">
									<!-- Best selling books list with image and clicked this link will navigate to amazon website which contains detail information of author  -->
										<!-- image of book -->
										<!--float and align center --><i class="fa fa-book"></i>
											<?php echo $row['full_name'];?>				      
									</div>
								
							</div>
						<?php }?>
					<!-- end of section -->
					</section>
					<!-- end of article -->



					<br>
					<br>
					<br>

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
	require(FRONTEND."include/footer.php");

?>
