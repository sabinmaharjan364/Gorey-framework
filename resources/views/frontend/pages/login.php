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
                <?php if($data){?>
					<h1><p class="alert-danger"><?php	echo $data; ?></p></h1>
<?php
				}?>
                    <section class="col-id-12"> 

                    <form id="login_form"  action="<?php echo SITEROOT ;?>users/login"  method="post">	
                        <fieldset>
                            <legend>Login Form</legend>
                                            
                                <div class="col-id-12 ">
                                    <label for="your_full_name">Email </label><div id="error-fullname"></div>
                                    <input type="email" class="form-control" id="ÿour-name"  name="email" placeholder="please enter full name" required>

                                </div>

                                
                                <div class="col-id-12">
                                    <label for="dob">Password</label>	<div id="error-dob"></div>
                                    <input type="password" class="form-control" id="your-name"  name="password" placeholder="please enter password" required>
                                    
                                </div>
                                <br>
                                <input type="submit" name="submit" class="submit btn form-control" value="Submit" />
                        </fieldset>
                        
                    </form>
                    </section>
					
				</div>
				<div class="col-id-1"></div>
			<!-- end of section -->			
			</section>			
			<!-- end of article -->
			<br><br><br>
		</article>
	<!-- end of main -->
    </main>		
	<script type="text/javascript" src="<?php echo SITEROOT?>/public/scripts/project/login.js"></script>    
    
<?php
	require(FRONTEND.'include/footer.php');

?>
