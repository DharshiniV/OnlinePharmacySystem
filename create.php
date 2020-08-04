<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$passwd=$_POST['password'];
$repeatpw=$_POST['confirmpassword'];

$database="pharmastore";
$password="";
$username="root";

if($fname && $lname && $email && $passwd && $repeatpw)
{
   $conn = new mysqli("localhost" , $username , $password , $database) or die("Unable to log into db");
}
   $sql = "INSERT INTO users (ID, fname, lname, email, pasword)
   VALUES ('', '$fname', '$lname', '$email', '$passwd')";
   
   if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       header("location:index.html");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
   
   $conn->close();
?>
