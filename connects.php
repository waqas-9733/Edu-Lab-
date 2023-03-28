<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
//Database Connection
$conn =new mysqli('localhost','root','','signup');
//connection
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into signup (username, password, email)values(?,?,?)");
    $stmt->bind_param("sss",$username,$email, $password,);
    $stmt->execute();
    echo"Signup Successfully...";
    $stmt->close();
    $conn->close();
}
?>