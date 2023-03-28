<?php
$username = $_POST['username'];
$password = $_POST['password'];
//Database Connection
$conn =new mysqli('localhost','root','','registrationform');
//connection
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into waqas(username, password)values(?,?)");
    $stmt->bind_param("ss",$username, $password);
    $stmt->execute();
    echo"Login Successfully...";
    $stmt->close();
    $conn->close();
}
?>