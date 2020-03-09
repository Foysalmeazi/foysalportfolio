<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$textarea=$_POST['textarea'];

$conn= new mysqli("localhost","root","","responsiveportfolio");
if($conn->connect_error)
{
    die("Connection Failed".$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registrationform(name,email,phone,subject,message,textarea) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$name,$email,$phone,$subject,$message,$textarea);
    $stmt->execute();
    echo "You have successfully registered.";
    $stmt->close();
    $conn->close();
}

?>