<?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "training";

        //Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Change character set to utf8
        mysqli_set_charset($conn,"utf8");
    
        //Home page file name
        $url_home = 'index.php';
        
        ?>


