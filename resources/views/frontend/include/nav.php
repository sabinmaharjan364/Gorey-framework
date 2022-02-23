<!-- Header section of website which contains logo and menu-->
	
<header class="row">
    <div class="col-id-1"></div>

    <div class="col-id-2">
        <a href="<?php echo SITEROOT?>pages/index"><img src="<?php echo SITEROOT?>/public/images/pages/logo.png" alt="Black Rose" height="95"></a>
    </div>
    
    <!-- search container -->
    <div class="col-id-6 search-container">
        <form class="example" action="<?php echo SITEROOT ;?>pages/search" method="GET"> 
            <input type="text" placeholder="Search.." name="search" pattern="[^'\x22]+" title="Cannot contain Quotes " required>
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
            <i class="fa fa-sign-in">
                My Account</i>
        </a>
        <?php }?>
             
    </div>
    <div class="col-id-2"></div>
   
        
</header>
<!-- menu html code -->
<!-- define 1 100% width block -->

<nav class="navigation" id="navigation">
    <div class="col-id-1"></div>
        <div class="col-id-10">
            <!-- menu list order -->
            <ul>			

                <li>
                    <a href="<?php echo SITEROOT?>pages/index" 
                        class="<?php 
                        
                            if(isset($_GET['url'])){
                                if($_GET['url']=="pages/index")
                                    {echo 'active';
                                    }
                            }else{
                                echo 'active';
                            }
                        
                        ?>">
                        <i class="fa fa-home"></i>Home
                    </a>
                </li>
                <li>
                    <a href="
                        <?php echo SITEROOT?>pages/about"  
                            class="<?php 
                                if(isset($_GET['url'])){
                                    if($_GET['url']=="pages/about")
                                        {echo 'active';
                                        }
                                }
                            ?>"><i class="fa fa-phone">About</i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo SITEROOT?>pages/trending"
                        class="<?php 
                            if(isset($_GET['url'])){
                                if($_GET['url']=="pages/trending")
                                    {echo 'active';
                                }
                            }
                        ?>">
                        <i class="fa fa-info-circle">Book </i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo SITEROOT?>pages/author"
                        class="<?php 
                            if(isset($_GET['url'])){
                                if($_GET['url']=="pages/author")
                                    {echo 'active';
                                    }
                            }
                        ?>";>
                        <i class="fa fa-user">Author </i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo SITEROOT?>pages/report"
                        class="<?php 
                            if(isset($_GET['url'])){
                                if($_GET['url']=="pages/report")
                                    {echo 'active';
                                }
                            }
                        ?>";>
                        <i class="fa fa-file-text-o">Report</i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo SITEROOT?>pages/cart"
                        class="cart notification <?php 
                            if(isset($_GET['url'])){
                                if($_GET['url']=="pages/cart")
                                    {echo 'active';
                                }
                            }
                        ?>";>
                        <i class="fa fa-shopping-cart">Cart</i>

                        
                        <?php 
                            if(isset($_SESSION['cart_item']))
                        {?>                          
                            <span class="badge">
                            </span>
                            <?php
                        }
                        ?>
                        
                    </a>
                </li>
                <?php if(authCheck()){?>

                <li><a href="<?php echo SITEROOT?>users/myProfile">
                <i class="fa fa-sign-in">Profile</i>
                </a></li>
                <li><a href="<?php echo SITEROOT?>pages/order">
                <i class="fa fa-sign-in">Order</i>
                </a></li>
                
                <?php
                    }else{?>
                <li><a href="<?php echo SITEROOT?>pages/register"><i class="fa fa-plus-square-o">Register</i></a></li>
                <?php }?>
            </ul>
        </div>
    <div class="col-id-1"></div>

    <!-- end of nav -->

</nav>
<!-- The actual snackbar -->
<div id="snackbar"></div>
