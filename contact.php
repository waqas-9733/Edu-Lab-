<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
//Database Connection
$conn =new mysqli('localhost','root','','contact_form');
//connection
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into contact_form(name,email,phone,message)values(?,?,?,?)");
    $stmt->bind_param("ssis",$name,$email,$phone,$message);
    $stmt->execute();
    echo"Send Message Successfully...";
    $stmt->close();
    $conn->close();
}
?>