<section class="row" >
	<?php 	
	if(isset($_GET['url'])){?>
		<?php if($_GET['url']=="pages/home" || $_GET['url']=="pages/index")
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

		<h1><?php 
		
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			if(isset($url[1])){
				echo ucwords($url[1]);
			}else{
			
			echo ucwords($url[0]);
			}
		
		 ?></h1>
		<br>
		<hr>
		<!--  breadcrumb (tells us in which page we are in currently)-->
		<span><a href="<?php echo SITEROOT?>/pages/home">
		Home</a> | <?php
		if(isset($url[1])){
			echo ucwords($url[1]);
		}else{
		
		echo ucwords($url[0]);
		}
		?></span>
	</div>
	<?php	 }
	

	}else{
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
<?php 
	}
	?>
	
</section> 