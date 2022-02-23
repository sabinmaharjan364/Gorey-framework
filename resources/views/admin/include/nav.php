<!-- Header section of website which contains logo and menu-->
	
<header class="row">
    <div class="col-id-1"></div>

    <div class="col-id-2">
        <a href="<?php echo SITEROOT?>dashboard/index"><img src="<?php echo SITEROOT?>/public/images/pages/logo.png" alt="Black Rose" height="95"></a>
    </div>
    
    <!-- search container -->
    <div class="col-id-6">
        <form class="example" method="POST"> 
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="col-id-1">
   
    <?php 
        if(authCheck()){?>

            <a href="<?php echo SITEROOT?>users/logout">
            <i class="fa fa-sign-in">Logout</i>
        </a>
        <?php
        }else{
            
    ?>
        <a href="<?php echo SITEROOT?>pages/login"
            class="<?php if(isset($_GET['url'])){
                    if($_GET['url']=="pages/login")
                        {echo 'active';
                    }
                }?>";>
            <i class="fa fa-sign-in">Login</i>
        </a>
        <?php }?>
             
    </div>
    <div class="col-id-2"></div>
   
        
</header>
<!-- menu html code -->
<!-- define 1 100% width block -->

<nav class="navigation row" id="navigation">
    
        <div class="col-id-1"></div>
        <div class="col-id-10">
            <!-- menu list order -->
            <ul>			
            <li>
                    <a href="<?php echo SITEROOT?>dashboard/index" 
                        class="<?php 
                        
                            if(isset($_GET['url'])){
                                if($_GET['url']=="dashboard/index")
                                    {echo 'active';
                                    }
                            }else{
                                echo 'active';
                            }
                        
                        ?>">
                        <i class="fa fa-home"></i>Dashboard
                    </a>
                </li>
               
                <li>
                    <a href="<?php echo SITEROOT?>genres/index" 
                        class="<?php 
                        
                            if(isset($_GET['url'])){
                                if($_GET['url']=="genres/index")
                                    {echo 'active';
                                    }
                            }else{
                                echo 'active';
                            }
                        
                        ?>">
                        <i class="fa fa-home"></i>Genre
                    </a>
                </li>
               
                <li>
                    <a href="<?php echo SITEROOT?>books/index"
                        class="<?php 
                            if(isset($_GET['url'])){
                                if($_GET['url']=="books/index")
                                    {echo 'active';
                                }
                            }
                        ?>">
                        <i class="fa fa-info-circle">Books </i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo SITEROOT?>authors/index"
                        class="<?php 
                            if(isset($_GET['url'])){
                                if($_GET['url']=="authors/index")
                                    {echo 'active';
                                    }
                            }
                        ?>";>
                        <i class="fa fa-user">Author </i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo SITEROOT?>publishers/index"
                        class="<?php 
                            if(isset($_GET['url'])){
                                if($_GET['url']=="publications/index")
                                    {echo 'active';
                                }
                            }
                        ?>";>
                        <i class="fa fa-file-text-o">Publication</i>
                    </a>
                </li>
                <!-- <li>
                    <a href="#"
                        class="<?php 
                            if(isset($_GET['url'])){
                                if($_GET['url']=="carts/index")
                                    {echo 'active';
                                }
                            }
                        ?>";>
                        <i class="fa fa-shopping-cart">Cart</i>
                    </a>
                </li> -->
                <li>
                    <a href="<?php echo SITEROOT?>users/show"
                        class="<?php 
                            if(isset($_GET['url'])){
                                if($_GET['url']=="users/show")
                                    {echo 'active';
                                }
                            }
                        ?>";>
                        <i class="fa fa-user">Customer</i>
                    </a>
                </li>

                

            </ul>
        </div>
        <div class="col-id-1"></div>
    
        
            <!-- end of nav -->
    
    

</nav>
