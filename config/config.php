<?php

    /**
     * Configuration for: Error reporting
     * Useful to show every little problem during development, but only show hard errors in production
     */
    define('ENVIRONMENT', 'development');

    if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }
    // TITLE of web application
    define('APP_TITLE','Black Rose bookstore');

    // NAME of the web application
    define('APP_NAME','Black Rose');


    // SQLITE database and test database file 
    define('DB','bookstores.db');
    define('DB_test','test_bookstores.db');


    // Upload format and max upload size
   


    define('ABOUT','Welcome to Black Rose Book Store');
    define('ABOUT_MSG','Black Rose Book Store is a new independent book store established in 2010 AD.
    This Book store has got variety of genre of books. Users can search, view, do booking and check availability of the books online.It is located inside of University Of Southern Queensland Toowoomba.');

    
    // dashboard users
    define("LIMIT",4);
   
    if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1')
    {
        // App Root
        define("SITEROOT","http://localhost/bookstore/");
        define("SITE","http://localhost/bookstore/resources/views/frontend/");
        define("ERROR","http://localhost/bookstore/resources/views/errors/");
        define("BACKEND",dirname(dirname(__FILE__))."/resources/views/admin/");
        define("FRONTEND",dirname(dirname(__FILE__))."/resources/views/frontend/");
        define("IMG","http://localhost/bookstore/public/images/uploads/");
        define("FILE","http://localhost/bookstore/public/images/uploads/");
        define("THUMB_IMG","http://localhost/bookstore/public/images/thumbnail/");

    }elseif( $_SERVER['HTTP_HOST'] == '10.0.0.20')
    {
                  // App Root
        

        define("SITEROOT","http://10.0.0.20/bookstore/");
        define("SITE","http://10.0.0.20/bookstore/resources/views/frontend/");
        define("ERROR","http://10.0.0.20/bookstore/resources/views/errors/");
        define("BACKEND",dirname(dirname(__FILE__))."/resources/views/admin/");
        define("FRONTEND",dirname(dirname(__FILE__))."/resources/views/frontend/");
        define("IMG","http://10.0.0.20/bookstore/public/images/uploads/");
        define("FILE","http://10.0.0.20/bookstore/public/images/uploads/");
        define("THUMB_IMG","http://10.0.0.20/bookstore/public/images/thumbnail/");

    }
    else{
        define("BACKEND",dirname(dirname(__FILE__))."/resources/views/admin/");
        define("FRONTEND",dirname(dirname(__FILE__))."/resources/views/frontend/");
        define("ERROR","http://bookstore.sabin.info.np/resources/views/errors/");

        define("SITEROOT","http://bookstore.sabin.info.np/");
        define("SITE","http://bookstore.sabin.info.np/resources/views/frontend/");
        define("IMG","http://bookstore.sabin.info.np/public/images/uploads/");
        
        define("FILE","http://bookstore.sabin.info.np/public/images/uploads/");
        define("THUMB_IMG","http://bookstore.sabin.info.np/public/images/thumbnail/");
    }

    
?>