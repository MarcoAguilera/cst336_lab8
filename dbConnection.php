 <?php   
     function connectDB(){

         $username = "b61f62434be134";
         $password = "f86a6a18";
         $host = "us-cdbr-iron-east-05.cleardb.net";
         $username = "b61f62434be134";
         $password = "f86a6a18";
         $dbname = "heroku_03f28d949defc53"; 
         $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
         $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
        return $dbConn; 
     }
     
 ?>