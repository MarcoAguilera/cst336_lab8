<?php   
-    include 'dbConnection.php';
     
     $conn = connectDB();
     
     $username = $_GET['username'];
     $sql = "SELECT *FROM lab8_user WHERE username = '$username' ";
     
     $stmt = $conn->prepare($sql);
     $stmt->execute(array(":username"=> $username));
     $record = $stmt->fetch(PDO::FETCH_ASSOC);
     
     echo json_encode($record);
 ?>