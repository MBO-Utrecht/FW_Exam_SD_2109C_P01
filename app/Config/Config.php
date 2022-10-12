<?php
    // Stap_03
    // Database parameters of mysql
    define('DB_HOST', 'localhost');   // Add your website host name.
    define('DB_NAME', '');            // Add your database name.
    define('DB_USER', 'root');        // Add your database user name default is root.
    define('DB_PASS', '');            // Add your database password.  
    
    // Database parameters of SqlServer
    // define('db_host', '5cg04629g7;');
    // define('db_name', 'hrm');
    // define('db_user', null);
    // define('db_pass', null);

    //APPROOT
    define('APPROOT', dirname(dirname(__FILE__)));

    // Stap_04
    //URLROOT (Dynamic links)
    define('URLROOT', 'http://');

    //Sitename
    define('SITENAME', 'Accountancy App');

    define('SQLROOT', '../app/Sqlscripts/');

    
