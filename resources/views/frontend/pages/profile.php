<?php 
	require(FRONTEND."include/header.php");
    require(FRONTEND."include/nav.php");
?>
	<main>
		<article>
      <?php 	?>	<br>	<br>
			
			<section class="row">
				<div class="col-id-1"></div>
		<div class="col-id-10">
		Name:
			<?php echo $data['full_name'];?></br>
			Email: <?php echo $data['email'];?></br>
			DOB: <?php echo $data['DOB'];?></br>
			Hire Date: <?php echo $data['hire_date'];?></br>
						

					
		</div>

				
				<div class="col-id-1"></div>
			
		  		
									<br>
					<!--  break line-->
					<br><br>
					<br>
					<!--  break line-->
					<br>

					
			</section>			
			<!-- end of article -->
			<br><br><br>
		</article>
	<!-- end of main -->
	</main>		
<?php
	require(FRONTEND.'include/footer.php');

?>

       
        


        
	
	
		
		

			
