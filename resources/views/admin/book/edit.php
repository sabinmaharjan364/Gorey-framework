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
				
				    <form id="login_form"  action="<?php echo SITEROOT ;?>books/update/<?php echo $data['single']['id'];?>"  method="post" enctype="multipart/form-data">	
                        <fieldset>
                            <legend>Edit</legend>
                                            
                                <div class="col-id-12 ">
                                    <label for="title">Title </label><div id=""></div>
                                    <input type="text" class="form-control" id="title"  name="title" placeholder="Titlte" value="<?php echo $data['single']['title'];?>" required>

                                </div>
								                <div class="col-id-12 ">
                                    <label for="description">Description </label><div id=""></div>
                                    <textarea id="description"  name="description" placeholder="Description" rows="10" cols="50" value="<?php echo $data['single']['description'];?>" > 
                                    </textarea>
                                </div>
                                <div class="col-id-12 ">
                                    <label for="publication_date">Publication Date </label><div id=""></div>
                                    <input type="date" class="form-control" id="publication_date"  name="publication_date" placeholder="Publication date" value="<?php echo $data['single']['publication_date'];?>"> 

                                </div>
                                <div class="col-id-12 ">
                                    <label for="price">Price </label><div id=""></div>
                                    <input type="text" class="form-control" id="price"  name="price" placeholder="price" value="<?php echo $data['single']['price'];?>">

                                </div>
                                <div class="col-id-12 ">
                                    <label for="language">Language </label><div id=""></div>
                                    <input type="text" class="form-control" id="language"  name="language" placeholder="Language" value="<?php echo $data['single']['language'];?>">

                                </div>
                                <div class="col-id-12 ">
                                    <label for="image">Image </label><div id=""></div>
                                    <input type="file" class="form-control" id="image"  name="image" placeholder="image" value="<?php echo $data['single']['image'];?>">

                                </div>
                                <div class="col-id-12 ">
                                    <label for="Genre">Genre </label><div id=""></div>
                                    <select name="genre_id" class="form-control">
                                      <?php while( $genre=$data['genres']->fetchArray()){ ?>
                                      <option value="<?php echo $genre['id'] ?>"><?php echo $genre['title'] ?></option>
                                      <?php } ?>
                                    </select>

                                </div>
                                <div class="col-id-12 ">
                                    <label for="author">Author </label><div id=""></div>
                                    <select name="author_id" class="form-control">
                                      <?php while( $author=$data['authors']->fetchArray()){ ?>
                                      <option value="<?php echo $author['id'] ?>"><?php echo $author['full_name'] ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                                <div class="col-id-12 ">
                                    <label for="publication">Publication </label><div id=""></div>
                                    <select name="publisher_id" class="form-control">
                                      <?php while( $genre=$data['publishers']->fetchArray()){ ?>
                                      <option value="<?php echo $genre['id'] ?>"><?php echo $genre['title'] ?></option>
                                      <?php } ?>
                                    </select>
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

       
        


        
	
	
		
		

			
