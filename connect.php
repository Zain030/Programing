<?php
$mail =$_POST['mail'];
$user_password =$_POST['password'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "info";

$con =new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    die("connection Failed:".$con->connect_error);
}
$sql ="insert into user_info(mail,password)
values('$mail','$user_password')";
if($con->query($sql)===true){
    echo "New Record Created Successfully";
}
else{
    echo "Error".$sql."<br>".$con->error;
}

$con->close();

?>