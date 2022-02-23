Project: Black Rose Bookstore (And Publicaion House)
Student Number: u1125009
Student Name: Sabin Maharjan


Project structure
    About Project
        * This project is made in core php and sqlite 3 which has implementation of MVC pattern.
        * This project has used Html5, css3, javascript, jquery.
        * Other report of this page can be seen in http://localhost/bookstore/pages/report. Moreover,
            we can see other detail of project in http://localhost/bookstore/project.txt.
        * In this project we need to modify the php.ini and httpd.conf as per requirement.
            -> Clean Url are implemented.
            -> Need to enable multiview and allowoverride.
            -> SQLITE3 function should be enabled and change other setting as per required for running this project.
            -> PHP path should be maintained properly.
            -> In Windows, project should be  placed inside htdocs to run this project.

    MVC pattern
        * Here I have used Model View Controller. 
        * Model Sql queries are written and executed in Model file.
        * Design is done in View file used Html5, css3, javascript and jquery technology.
        * Controller acts as a mediator which interacts with Model and view.

    Folder structure
        * app
            -> Controller
            -> Model
            -> Libraries

        * config
            -> config file
            -> helper file
            -> session file

        * database
            -> database file after migration

        * migration
            -> need to execute at first step to create database and table.

        * public
            -> css file for styling and designing.
            -> images file for image upload and retrieving image for project purpose.
            -> javascript file.

        * resources
            -> view files html5 files with proper folder structure.

    Core Function comment
        *libcommon.php
            ->contains a function which is called and used by other Model or controller.
                .get()
                    get all the data from database table
                .getArray()
                    get all the data from database table in array
                .paginate()
                    get exactly the number data from database table
                .findByID('parameter')
                    get the data of database table whose id is equal to parameter
                .findByEmail('email')
                    get the data of database table whose email is equal to email
                .create()
                    insert the data into database table
                .update()
                    update the data from database table
                .delete()
                    delete the data from database

        * *.controller  
            ->It uses the libcommon function for CRUD operation and other operation.
            -> created a readable and understandable function name so I donot need to comment what this code actually tries to do.

        * *.Model
            ->It holds the actual table of database so that we don't need to define our table always.
            ->It contains some custom function for required operation
