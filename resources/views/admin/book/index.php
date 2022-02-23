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
				
				    <form id="login_form"  action="<?php echo SITEROOT ;?>books/create"  method="post" enctype="multipart/form-data">	
                        <fieldset>
                            <legend>Add</legend>
                                            
                                <div class="col-id-12">
                                    <label for="title">Title </label><div id="err-title"></div>
                                    <input type="text" class="form-control" id="title"  name="title" placeholder="Titlte" required>
                                </div>
								<div class="col-id-12">
                                    <label for="description">Description </label><div id="err-description"></div>
                                    <textarea id="description"  name="description" placeholder="Description" rows="10" cols="50">
                                    </textarea>
                                </div>
                                <div class="col-id-12 ">
                                    <label for="publication_date">Publication Date </label><div id="err-publication_date"></div>
                                    <input type="date" class="form-control" id="publication_date"  name="publication_date" placeholder="Publication date">

                                </div>
                                <div class="col-id-12 ">
                                    <label for="price">Price </label><div id="err-price"></div>
                                    <input type="text" class="form-control" id="price"  name="price" placeholder="price" required>

                                </div>
                                <div class="col-id-12 ">
                                    <label for="language">Language </label><div id="err-language"></div>
                                    <input type="text" class="form-control" id="language"  name="language" placeholder="Language">

                                </div>
                                <div class="col-id-12 ">
                                    <label for="image">Image </label><div id=""></div>
                                    <input type="file" class="form-control" id="image"  name="image" placeholder="image">

                                </div>
                                <div class="col-id-12 ">
                                    <label for="description">Genre </label><div id="err-genre_id"></div>
                                    <select name="genre_id" class="form-control">
                                      <?php while( $genre=$data['genres']->fetchArray()){ ?>
                                      <option value="<?php echo $genre['id'] ?>"><?php echo $genre['title'] ?></option>
                                      <?php } ?>
                                    </select>

                                </div>
                                <div class="col-id-12 ">
                                    <label for="author">Author </label><div id="err-author"></div>
                                    <select name="author_id" class="form-control">
                                      <?php while( $author=$data['authors']->fetchArray()){ ?>
                                      <option value="<?php echo $author['id'] ?>"><?php echo $author['full_name'] ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                                <div class="col-id-12 ">
                                    <label for="publication">Publication </label><div id="err-publishers"></div>
                                    <select name="publisher_id" class="form-control">
                                      <?php while( $genre=$data['publishers']->fetchArray()){ ?>
                                      <option value="<?php echo $genre['id'] ?>"><?php echo $genre['title'] ?></option>
                                      <?php } ?>
                                    </select>
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

       
        


        
	
	
		
		

			
