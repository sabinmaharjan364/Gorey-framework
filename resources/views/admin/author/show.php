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
				
                <?php echo $data['single']['full_name'];?>
                <?php echo $data['single']['description'];?>
                <?php echo $data['single']['DOB'];?>
				</div>
				<div class="col-id-6">
				<table class="">
					<tr>
						<th>Title</th>
						<th>DOB</th>
						<th>Action</th>
					</tr>
                    <?php 
                    $controllers="books";
					while ($row = $data['author']->fetchArray()) {?>
					<tr>
						<td><?php echo $row['full_name'];?></td>
						<td><?php echo $row['DOB'];?></td>
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

       
        


        
	
	
		
		

			
