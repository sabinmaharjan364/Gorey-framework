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
				
				<form id="login_form"  action="<?php echo SITEROOT ;?>genres/create"  method="post">	
                        <fieldset>
                            <legend>Add</legend>
                                            
                                <div class="col-id-12 ">
                                    <label for="title">Title </label><div id=""></div>
                                    <input type="text" class="form-control" id="title"  name="title" placeholder="Titlte" required>

                                </div>
								<div class="col-id-12 ">
                                    <label for="description">Description </label><div id=""></div>
                                    <input type="text" class="form-control" id="description"  name="description" placeholder="Description">

                                </div>
                                
                                <br>
                                <input type="submit" name="submit" class="submit btn form-control" value="Submit" />
                        </fieldset>
                        
                    </form>
				</div>
				<div class="col-id-6">

				<table class="">
					<tr>
						<th>Title</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
					<?php 
					$controllers="genres";
					while ($row = $data->fetchArray()) {?>
					<tr>
						<td><?php echo $row['title'];?></td>
						<td><?php echo $row['description'];?></td>
						

						<td><?php 
						
						include(BACKEND."include/action_button.php"); ?></td>
					</tr>
					
					<?php
					}
					
					?>
					
					
				</table>
			
		  		
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

       
        


        
	
	
		
		

			
