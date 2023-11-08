<?php  
    require_once ("simplecms-config.php");
    require_once ("Functions/database.php");

    // Create database connection
    $databaseConnection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($databaseConnection->connect_error)
    {
        die("Database selection failed: " . $databaseConnection->connect_error);
    }

    // Create tables if needed.
    prep_DB_content();
?>