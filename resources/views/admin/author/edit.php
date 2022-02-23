<?php 
	require(BACKEND."include/header.php");
    require(BACKEND."include/nav.php");
?>
	<main>
		<article>
      <?php 	?>	<br>	<br>
			
			<section class="row">
                <div class="row">
              
				<div class="col-id-1"></div>
				    <div class="col-id-4 form_body">
				
                        <form id="login_form"  action="<?php echo SITEROOT ;?>books/update/<?php echo $data['single']['id'];?>"  method="post" enctype="multipart/form-data">	   <fieldset>
                            <legend>Add</legend>
                                            
                                <div class="col-id-12">
                                    <label for="full_name">Title </label><div id="err-full_name"></div>
                                    <input type="text" class="form-control" id="full_name"  name="full_name" placeholder="Titlte" value="<?php echo $data['single']['full_name'];?>" required>
                                </div>
								<div class="col-id-12">
                                    <label for="description">Description </label><div id="err-description"></div>
                                    <textarea id="description"  name="description" placeholder="Description" rows="10" cols="50" value="<?php echo $data['single']['description'];?>">
                                    </textarea>
                                </div>
                                <div class="col-id-12 ">
                                    <label for="DOB">Publication Date </label><div id="err-DOB"></div>
                                    <input type="date" class="form-control" id="DOB"  name="DOB" placeholder="Date og birth" value="<?php echo $data['single']['DOB'];?>">

                                </div>
                                
                                <div class="col-id-12 ">
                                    <label for="image">Image </label><div id=""></div>
                                    <input type="file" class="form-control" id="image"  name="image" placeholder="image">

                                </div>
                                
                                <br>
                                <input type="submit" name="submit" class="submit btn form-control" value="Submit" />
                        </fieldset>
                        
                    </form>
				</div>
				<div class="col-id-6">
				<table class="">
					<tr>
						<th>Name</th>
						<th>DOB</th>
						<th>Action</th>
					</tr>
                    <?php 
                    $controllers="authors";
					while ($row = $data['authors']->fetchArray()) {?>
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

       
        


        
	
	
		
		

			
