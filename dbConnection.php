<?php   
    function connectDB($dbName){
        $host = "us-cdbr-iron-east-05.cleardb.net";
        $username = "b61f62434be134";
        $password = "f86a6a18";
        $dbname = $dbName; 
        $charset = 'utf8mb4';
    
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);
        return $pdo; 
        }
    
?>