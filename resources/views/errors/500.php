<html>
    <head>
        <!-- Specify character set of website( for all kinds of language and special symbols) -->
        <meta charset="UTF-8">

        <!-- For responsiveness of website for different size of devices like desktop mobile and tablet -->

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <LINK href="<?php echo SITEROOT?>/public/style/custom.css" rel="stylesheet" type="text/css"/>
    </head>


    <body class="full">
        <main class="row">
           
                <article class='container'>
                    <span class="error">5</span>
                    <div class='eye'></div>
                    <div class='eye'></div>
                    <?php if(isset($_GET['msg'])){
                        echo '<p>'.$_GET['msg'].'</p>';
                    }else{ ?>
                    <p>Something went wrong. We're looking to see what happened.</p>
                     <?php }?>
                    <a href="<?php echo SITEROOT?>pages/index">Go to Home</a>

                </article>
           
        </main>
        <script src="<?php echo SITEROOT?>/public/scripts/jquery3.3.1.min.js"></script>

        <script src="<?php echo SITEROOT?>/public/scripts/custom.js"></script>
    </body>
</html>
