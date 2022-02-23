<?php
    require('../config/config.php');
    
    
    $db_name = DB;//"bookstores.db";
    $db = new SQLite3('../database/'.$db_name);
    // $db = new SQLite3('../app/Libraries/'.$db_name);
    function init($db) {
        try{
            
            $query = "DROP TABLE IF EXISTS tbl_users";
            $db->exec($query);
            $query = "CREATE TABLE tbl_users (
  				id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  				full_name TEXT,
  				DOB TEXT,
                email TEXT,
                security_password TEXT,
                user_role TEXT,
                hire_date TEXT,
                user_discount REAL,
                timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
          
                )";
            $db->exec($query);
            $query = "INSERT INTO tbl_users(full_name,DOB,email,security_password,user_role,hire_date,user_discount)
                        VALUES('Super Admin','03/01/1994','superadmin@gmail.com','".md5('foo123')."','superadmin','03/01/2020',0);".
                    "INSERT INTO tbl_users(full_name,DOB,email,security_password,user_role,hire_date,user_discount)
                    VALUES('Admin','03/01/1994','admin@gmail.com','".md5('foo123')."','admin','03/01/2020',0);".
                    "INSERT INTO tbl_users(full_name,DOB,email,security_password,user_role,hire_date,user_discount)
                    VALUES('Guest','03/01/1994','guest@gmail.com','".md5('foo123')."','user','03/01/2020',0);".
                    "INSERT INTO tbl_users(full_name,DOB,email,security_password,user_role,hire_date,user_discount)
                    VALUES('Sabin Maharjan','03/01/1994','sabin@gmail.com','".md5('foo123')."','admin','03/01/2020',0);";

            $db->exec($query);

            // table for card details
            $query = "DROP TABLE IF EXISTS tbl_cards";
            $db->exec($query);
            $query = "CREATE TABLE tbl_cards (
  				id INTEGER PRIMARY KEY,
  				first_name TEXT,
  				last_name TEXT,
  				dob TEXT,
                cvv INTEGER,
                user_id INTEGER  NOT NULL,
                
               
                timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY(user_id) REFERENCES tbl_users(id)
          
                )";
            $db->exec($query);
            $query = "INSERT INTO tbl_cards(first_name,last_name,dob,cvv,user_id)
                        VALUES('Super', 'Admin','03/01/1994','111',1);".
                        "INSERT INTO tbl_cards(first_name,last_name,dob,cvv,user_id)
                        VALUES('admin', 'foo','03/01/1994','111',1);";

    
            $db->exec($query);

            // table for address details
            $query = "DROP TABLE IF EXISTS tbl_address";
            $db->exec($query);
            $query = "CREATE TABLE tbl_address (
  				id INTEGER PRIMARY KEY,
  				street TEXT,
  				suburb TEXT,
  				street_number INTEGER,
                country TEXT,
                address_type TEXT,
                address_same INTEGER,
                contact_home TEXT,
                contact_mobile TEXT,
                user_id INTEGER  NOT NULL,                
                timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY(user_id) REFERENCES tbl_users(id)
          
                )";
            $db->exec($query);
            $query = "INSERT INTO tbl_address(country,street_number,street,suburb,address_type,address_same,contact_home,contact_mobile,user_id)
                        VALUES('Australia', '1','kearnerys street','kearneys spring','mail address',1,'','',1);";
                        

    
            $db->exec($query);


            // table for genre details
            $query = "DROP TABLE IF EXISTS tbl_genre";
            $db->exec($query);
            $query = "CREATE TABLE tbl_genre (
  				id INTEGER PRIMARY KEY,
  				title TEXT,
  				description TEXT,
  				timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
          
                )";
            $db->exec($query);
            $query = "INSERT INTO tbl_genre(title,description)
                        VALUES('Romantic', 'Romantic');".
                        "INSERT INTO tbl_genre(title,description)
                        VALUES('Horror', 'Horror');".
                        "INSERT INTO tbl_genre(title,description)
                        VALUES('Thriller', 'Thriller');".
                        "INSERT INTO tbl_genre(title,description)
                        VALUES('Crime', 'Crime');";

    
            $db->exec($query);
           

            // table for publishers details
            $query = "DROP TABLE IF EXISTS tbl_publishers";
            $db->exec($query);
            $query = "CREATE TABLE tbl_publishers (
  				id INTEGER PRIMARY KEY,
  				title TEXT,
  				description TEXT,
                suburb TEXT,
                state TEXT,
                street TEXT,
                country TEXT,
                contact_number TEXT,
  				timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
          
                )";
            $db->exec($query);
            $query = "INSERT INTO tbl_publishers(title,description,country,state,suburb,street,contact_number)
                        VALUES('Black Rose Publication', 'publisher house','Australia','QLD','Kearneys spring','kearneys street','+61 4501020120210');".
                        
                        "INSERT INTO tbl_publishers(title,description,country,state,suburb,street,contact_number)
                        VALUES('Ekta Publication', 'Romantic publisher house','Nepal','ktm','ktm','jawlakhel','+977 9812345678');";
    
            $db->exec($query);

            // table for Authors details
            $query = "DROP TABLE IF EXISTS tbl_author";
            $db->exec($query);
            $query = "CREATE TABLE tbl_author (
  				id INTEGER PRIMARY KEY,
  				full_name TEXT,
  				description TEXT,
                image TEXT,
                DOB TEXT,                
  				timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
          
                )";
            $db->exec($query);
            $query = "INSERT INTO tbl_author(full_name,description,image,DOB)
                        VALUES('Cyril Alington', 'Sabin is a romantic book writer','Cyril-Alington-1908.jpg','1908');".
                        "INSERT INTO tbl_author(full_name,description,image,DOB)
                        VALUES('David Whitelaw', 'Jones is a horror book writer','Davidwhitelaw.jpg','1998');".
                        "INSERT INTO tbl_author(full_name,description,image,DOB)
                        VALUES('Peter Lovesey', 'Rock is a crime book writer','PeterLovesey.jpg','1908');".
                        "INSERT INTO tbl_author(full_name,description,image,DOB)
                        VALUES('Rachel Abbott', 'Ekta is a horror book writer','Rachel_Abbott_2013.jpg','2013');";
    
            $db->exec($query);


            // table for books 
            $query = "DROP TABLE IF EXISTS tbl_books";
            $db->exec($query);
            $query = "CREATE TABLE tbl_books (
  				id INTEGER PRIMARY KEY,
  				title TEXT,
  				description TEXT,
                publication_date TEXT,                
                price  REAL,
                image TEXT,
                language TEXT,             
                author_id INTEGER NOT NULL,
                genre_id INTEGER NOT NULL,
                publisher_id INTEGER NOT NULL,
                timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY(author_id) REFERENCES tbl_authors(id),
                FOREIGN KEY(genre_id) REFERENCES tbl_genre(id),
                FOREIGN KEY(publisher_id) REFERENCES tbl_publishers(id)
 
          
                )";
            $db->exec($query);  
            $query = "INSERT INTO tbl_books(title,description,publication_date,price,image,language,author_id,genre_id,publisher_id)
                        VALUES('A Case Of Spirits', 'Black Rose is a romantic story','1998',100,'A Case Of Spirits.jpg','English',1,1,1);". 
                        
                        "INSERT INTO tbl_books(title,description,publication_date,price,image,language,author_id,genre_id,publisher_id)
                        VALUES('mad hatters holiday', 'Red Rose is a love story','1998',1000,'mad hatters holiday.jpg','English',1,2,1);".
                        "INSERT INTO tbl_books(title,description,publication_date,price,image,language,author_id,genre_id,publisher_id)
                        VALUES('the detective wore silk', 'White Rose is a peace story','1998',300,'the detective wore silk.jpg','English',1,3,1);".
                        "INSERT INTO tbl_books(title,description,publication_date,price,image,language,author_id,genre_id,publisher_id)
                        VALUES('waxwork', 'Yellow Rose is a friends story','1998',199,'waxwork.jpg','English',1,4,1);"
                        ;
            $db->exec($query);

         

             // table for store details
             $query = "DROP TABLE IF EXISTS tbl_stores";
             $db->exec($query);
             $query = "CREATE TABLE tbl_stores (
                id INTEGER PRIMARY KEY,
                title TEXT,
                description TEXT,
                suburb TEXT,
                state TEXT,
                street TEXT,
                country TEXT,
                contact_number TEXT,
                lat TEXT,
                long TEXT,
                timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
           
                 )";
             $db->exec($query);
             $query = "INSERT INTO tbl_stores(title,description,country,state,suburb,street,contact_number,lat,long)
                         VALUES('Black Rose store', 'Book store house','Australia','QLD','Kearneys spring','kearneys street','+61 4501020120210','.909','.123');";
                         
                        
     
             $db->exec($query);


              
            // table for dynamic page details
            $query = "DROP TABLE IF EXISTS tbl_pages";
            $db->exec($query);
            $query = "CREATE TABLE tbl_pages (
  				id INTEGER PRIMARY KEY,
  				title TEXT,
  				description TEXT,
  				timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
          
                )";
            $db->exec($query);
            $query = "INSERT INTO tbl_pages(title,description)
                        VALUES('About', 'Romantic');".
                        "INSERT INTO tbl_pages(title,description)
                        VALUES('Treding', 'Horror');".
                        "INSERT INTO tbl_pages(title,description)
                        VALUES('Reports', 'Thriller');";
                        

    
            $db->exec($query);

             
            
            
             // table for dynamic Review details
             $query = "DROP TABLE IF EXISTS tbl_review";
             $db->exec($query);
             $query = "CREATE TABLE tbl_review (
                   id INTEGER PRIMARY KEY,
                   book_id INTEGER NOT NULL,
                   user_id INTEGER NOT NULL,
                   comment TEXT,
                   rating INTEGER,
                   timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
                   FOREIGN KEY(book_id) REFERENCES tbl_books(id),
                   FOREIGN KEY(user_id) REFERENCES tbl_users(id)
           
                 )";
             $db->exec($query);
             $query = "INSERT INTO tbl_review(book_id,user_id,comment,rating)
                         VALUES(1,1,'Romantic',5);".
                         "INSERT INTO tbl_review(book_id,user_id,comment,rating)
                         VALUES(1,2,'Romantic',4);";
     
            $db->exec($query);
             // table for dynamic Review details
             $query = "DROP TABLE IF EXISTS tbl_orders";
             $db->exec($query);
             $query = "CREATE TABLE tbl_orders (
                   id INTEGER PRIMARY KEY,
                   book_id INTEGER NOT NULL,
                   user_id INTEGER NOT NULL,
                   ip TEXT,
                   quantity TEXT,
                   price TEXT,
                   status TEXT,                 
                   timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
                   FOREIGN KEY(book_id) REFERENCES tbl_books(id),
                   FOREIGN KEY(user_id) REFERENCES tbl_users(id)
                 )";
             $db->exec($query);
             $query = "INSERT INTO tbl_orders(book_id,user_id)
                         VALUES(1,1);".
                         "INSERT INTO tbl_orders(book_id,user_id)
                         VALUES(1,2);";
     
            $db->exec($query);
           
            
            header('Location:../pages/home&msg=Database is successfully imported');          

        }catch(Exception $error){
            throw $error;
        
          }

    }
    init($db);

    ?>


