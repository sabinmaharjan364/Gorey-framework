<?php 
	require('include/header.php');
    include("include/nav.php");
   
?>
	<main>
		<article>
			
            <section class="row" >
				<?php 	
				if (($_GET['page']=="home"))
				{
				?>
					<!-- make container which contain fixed background with some hardcoded text-->
					<div class="row" id="home">
						<div id="slider">
							
							<br>
							<!-- simple text in a container -->
							<p>No tears in the writer,</p> <p>No tears in the reader. </p><p>No surprise in the writer, </p><p>No surprise in the reader</p>
						</div>
					<!-- end of section -->

					</div>
						
				<?php	 }else{
				?>
                <div id="slider-background">

                    <h1><?php echo ucwords($_GET['page']) ?></h1>
                    <br>
                    <hr>
                    <!--  breadcrumb (tells us in which page we are in currently)-->
                    <span><a href="index.php">
                    Home</a> | <?php echo $_GET['page']?></span>
                </div>
				<?php	 }
				?>
			</section> 
			
			<section class="row">
				<div class="col-id-1"></div>
				<div class="col-id-10">
				<!-- content description of our Company -->
					<?php 
					 if (isset($_GET['page']))
					 {
					   $pagename = $_GET['page'].'.php';
					   include($pagename); 
					 }
					?>
				</div>
				<div class="col-id-1"></div>
			<!-- end of section -->
				
			</section>
			
			<!-- end of article -->

		
			
			<br>
			<br>
			<br>


		</article>
	<!-- end of main -->
	</main>
		

	
 
<?php
	require('include/footer.php');

?>


		
	

	
	