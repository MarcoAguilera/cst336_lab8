<?php   
    include './dbConnection.php';
    
    $conn = connectDB("heroku_03f28d949defc53");
    
    $username = $_GET['username'];
    $sql = "SELECT *FROM lab8_user WHERE username = '$username' ";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":username"=> $username));
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // print_r($record);
    echo json_encode($record);
?>