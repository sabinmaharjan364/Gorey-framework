<?php 
	require(BACKEND."include/header.php");
    require(BACKEND."include/nav.php");
?>
	<main>
		<article>
      <?php 	?>	<br>	<br>
			
			<section class="row">
				<div class="col-id-1"></div>
				<div class="col-id-4 form_body">
				
                <?php echo $data['single']['title'];?>
                <?php echo $data['single']['description'];?>
				</div>
				<div class="col-id-6">
				<table class="">
					<tr>
						<th>Title</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
                    <?php 
                    $controllers="books";
					while ($row = $data['books']->fetchArray()) {?>
					<tr>
						<td><?php echo $row['title'];?></td>
						<td><?php echo $row['price'];?></td>
						<td><?php 
						
						include(BACKEND."include/action_button.php"); ?></td>
					</tr>
					
					<?php
					}
					
					?>
					
					
				</table>
			
		  		
					<br>
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
	require(BACKEND.'include/footer.php');

?>

       
        


        
	
	
		
		

			
