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
                    <span class="error">4</span>
                    <div class='eye'></div>
                    <span class="error">4</span>

                    <?php if(isset($_GET['msg'])){
                        echo "<p class='center'>".$_GET['msg'].'</p>';
                    }elseif(isset($route)){
                        echo "<p class='center'>URL not found. Please check your url</p>";
                    }else{?>
                    <p class="center">Page not found</p> <?php }?>
                    <br>
                    <p class="center"><a href="<?php echo SITEROOT?>pages/index">Go to Home</a></p>
                </article>
           
        </main>
        <script src="<?php echo SITEROOT?>/public/scripts/jquery3.3.1.min.js"></script>

        <script src="<?php echo SITEROOT?>/public/scripts/custom.js"></script>
    </body>
</html>
