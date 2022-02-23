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

                    <form id="register_form"  action="<?php echo SITEROOT ;?>users/register"  method="post">	
                        <fieldset>
                            <legend>Register Form</legend>
                                            
                                <div class="col-id-12 ">
                                    <label for="your_full_name">Name </label><div id="error-fullname"></div>
                                    <input type="text" class="form-control" id="ÿour-name"  name="full_name" placeholder="please enter full name" maxlength="50" required>

                                </div>
                                <div class="col-id-12 ">
                                    <label for="your_email">Email </label><div id="error-email"></div>
                                    <input type="email" class="form-control" id="your-email"  name="email" placeholder="please enter your email id" required>

                                </div>
                                <div class="col-id-12 ">
                                    <label for="dob">Date of birth </label><div id="error-dob"></div>
                                    <input type="date" class="form-control" id="ÿour-dob"  name="dob" placeholder="please enter date of birth" required>

                                </div>

                                
                                
                                <div class="col-id-12">
                                    <label for="password">Password</label>	<div id="error-password"></div>
                                    <input type="password" class="form-control" id="your-password"  name="password" placeholder="please enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                    
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
	<script type="text/javascript" src="<?php echo SITEROOT?>/public/scripts/project/checkUser.js"></script>    

<?php
	require(FRONTEND.'include/footer.php');

?>
