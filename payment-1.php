<?php
$card_holder = $_POST['card_holder'];
$card_number = $_POST['card_number'];
$expiry_date = $_POST['expiry_date'];
$cvc = $_POST['cvc'];
//Database Connection
$conn =new mysqli('localhost','root','','payment');
//connection
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into payment(card_holder,card_number,expiry_date,cvc)values(?,?,?,?)");
    $stmt->bind_param("siii",$card_holder,$card_number,$expiry_date,$cvc,);
    $stmt->execute();
    echo"Payment Successfully...";
    $stmt->close();
    $conn->close();
}
?>