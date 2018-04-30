<?php   
    function connectDB($dbName){
        $host = "us-cdbr-iron-east-05.cleardb.net";
        $username = "b61f62434be134";
        $password = "f86a6a18";
        $dbname = "lab8"; 
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       return $dbConn; 
    }
    
?>