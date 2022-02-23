<?php 
	require(BACKEND."include/header.php");
    include(BACKEND."include/nav.php");
?>
	<main>
		<article>
      	
			<section class="row">
			<div class="col-id-1"></div>
				<div class="col-id-4 form_body">
					<?php echo $data['single']['title'];?><br>
					<?php echo $data['single']['description'];?>
				</div>
				<div class="col-id-6">
				
					<table class="">
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
						<?php 
						while ($row = $data['publishers']->fetchArray()) {?>
						<tr>
							<td><?php echo $row['title'];?></td>
							<td><?php echo $row['description'];?></td>
		
							<td>
								<?php 
									$controllers="genres";
									include(BACKEND."include/action_button.php");
								?>
							</td>
						</tr>

						<?php
						}
						
						?>
					</table>
					<br>
					<br>
					<!--  break line-->
					<br>

				</div>
			</section>			
			<!-- end of article -->
			<br><br><br>
		</article>
	<!-- end of main -->
	</main>		
<?php
	require(BACKEND.'include/footer.php');

?>

       
        


        
	
	
		
		

			
