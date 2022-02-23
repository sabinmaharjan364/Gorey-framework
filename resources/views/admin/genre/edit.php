<?php 
	require(BACKEND."include/header.php");
    include(BACKEND."include/nav.php");
?>
	<main>
		<article>
			<br>
			<br>
			
			<section class="row">
				<div class="col-id-1"></div>
				<div class="col-id-4 form_body">
					<form id="login_form"  action="<?php echo SITEROOT ;?>genres/update/<?php echo $data['single']['id'];?>"  method="post">	
                        <fieldset>
                            <legend>Edit</legend>
                                            
                                <div class="col-id-12 ">
                                    <label for="title">Title </label><div id=""></div>
                                    <input type="text" class="form-control"   name="title" placeholder="Title" value="<?php echo $data['single']['title'];?>" >

                                </div>
                                <div class="col-id-12 ">
                                    <label for="description">description </label><div id=""></div>
                                    <input type="text" class="form-control"   name="description" placeholder="description" value="<?php echo $data['single']['description'];?>" required>

                                </div>
								
                                
                                <br>
                                <input type="submit" name="submit" class="submit btn form-control" value="Update" />
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
						while ($row = $data['genres']->fetchArray()) {?>
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
					<br>
					<!--  break line-->
					<br>
				</table>					
			</section>			
			<!-- end of article -->
			<br><br><br>
		</article>
	<!-- end of main -->
	</main>		
<?php
	require(BACKEND.'include/footer.php');

?>

       
        


        
	
	
		
		

			
