<?php 
	require(BACKEND."include/header.php");
    require(BACKEND."include/nav.php");
?>
	<main>
		<article>
      <?php 	?>	<br>	<br>
			
			<section class="row">
				<div class="col-id-1"></div>
		<div class="col-id-10">
			<table class="">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>DOB</th>
					<th>Hire Date</th>
				</tr>
				<?php 
				$controllers="genres";
				while ($row = $data->fetchArray()) {?>
				<tr>
					<td><?php echo $row['full_name'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['DOB'];?></td>
					<td><?php echo $row['hire_date'];?></td>
					

				</tr>
				
				<?php
				}
				
				?>
				
				
			</table>
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
	require(BACKEND.'include/footer.php');

?>

       
        


        
	
	
		
		

			
