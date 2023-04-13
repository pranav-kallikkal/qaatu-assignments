<?php
$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['message'];

$dbo=new PDO("mysql:host=localhost;dbname=contactform",'root','');

if($dbo) {
    $dbo->query ("insert into userdata(name,email,message) values('$name','$email','$message')");   
}
else{
    echo "Connection Not Established";
}
header('location:index.html');
?>