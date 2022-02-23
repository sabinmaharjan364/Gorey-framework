<?php 
	require(FRONTEND.'include/header.php');
   	require(FRONTEND."include/nav.php");
?>
	<main>
		<article>
	  <?php 	
	//   require(FRONTEND.'include/slider.php');?>
			
			<section class="row">
				<div class="col-id-1"></div>
				<div class="col-id-10">
				<!-- content description of our Company -->
				
						
					<div class="row">

                        
						<!-- creates a 25% width column -->
						<div class="col-id-3 card">

							
								<?php if(empty($data['image'])){?>
									<i class="fa fa-book"></i>
									
								<?php }else{?>
									<img src="<?php echo IMG.'books/'.$data['image'];?>" alt="Rachel Abbott" style="width:100%">

								<?php }?>

								
								
                        </div>
                        <div class="col-id-1">
                                    
                        </div>
                        <div class="col-id-8">
                            <h1><?php echo $data['title'];	?>	</h1>
                             <p>
                                Author: <?php echo$data['full_name'];?>
                                <h5>Genre: <?php echo$data['category'];?></h5>
                             </p>
                             <p>
                                 <?php echo$data['description'];?>
                             </p>
                             <p>
                             <!-- <input type="number" name="quantity" value="<?php echo $data['quantity'];?>" class="form-control cart-quantity" > -->
                            
                                       
											<button type="button" onclick="addToCart('<?php echo $data['id']?>')">  Add to cart
											</button>
                                        </p>
                                       
							
                             </p>
                        </div>
                    </div>
		
				
					
				</div>
				<div class="col-id-1"></div>
			<!-- end of section -->			
            </section>			
            <sectiondiv class="row">
				<div class="col-id-1"></div>
				<div class="col-id-10">

                    <div data-tabs class="tabs">    
                        <div class="tab">
                            <input type="radio" name="tabgroup" id="tab-1" checked>
                            <label for="tab-1">Description</label>
                            <div class="tab__content">
                                <h4><?php echo$data['title'];?></h4>
                                <p> <?php echo$data['description'];?></p>
                            </div> 
                        </div>
                        <div class="tab">
                            <input type="radio" name="tabgroup" id="tab-2">
                            <label for="tab-2">Product Detail</label>
                            <div class="tab__content">
                                <div class="row">
                               
                                    <div class="col-id-2">
                                        <li>Author</li>
                                        <hr>
                                        <li>Language</li>
                                        <hr>
                                        <li>publication date</li>
                                        <hr>
                                        <li>Category</li>
                                        <hr>
                                                            
                                    </div>
                                    <div class="col-id-8">

                                        <li>
                                            <?php echo$data['full_name'];?>

                                        </li>
                                        <hr>
                                        <li>
                                            <?php echo$data['language'];?>
                                        </li>
                                        <hr>
                                        <li>
                                            <?php echo$data['publication_date'];?>
                                        </li>
                                        <hr>
                                        <li>
                                            <?php echo$data['category'];?>
                                        </li>
                                        <hr>
                                    </div>
                                    <div class="col-id-2"></div>
                                </div>
                               
                            </div> 
                        </div>
                        <div class="tab">
                            <input type="radio" name="tabgroup" id="tab-3">
                            <label for="tab-3">Review</label>
                            <div class="tab__content">
                                <h4> Customer Review </h4>
                                <div class="row">
                                    
                                        <div class="review">
                                            4.6
                                        </div>

                                  
                                    <div class="col-id-2">
                                        <div class="review-total">
                                            688778 review

                                        </div>
                                        
                                    </div>
                                
                                </div>
                                <div class="row">
                                    <br>
                                    <a href="<?php echo SITEROOT?>pages/review">See all Review</a> &nbsp;&nbsp;&nbsp;
                                    <a href="<?php echo SITEROOT?>pages/create_review">Write a Review</a>
                                </div>  <br>  <br>
                                
                                                
                             
                               
                            </div> 
                        </div>
                        
                    </div>
                </div>
				<div class="col-id-1"></div>

            </section>
			<!-- end of article -->
			<br><br><br>
        </article>
        <br><br><br>
    <!-- end of main -->
	<script type="text/javascript" src="<?php echo SITEROOT?>/public/scripts/project/add-to-cart.js"></script>    
    
	</main>		
<?php
	require(FRONTEND.'include/footer.php');

?>
