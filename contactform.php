<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$phonenumber=$_POST['phonenum'];
$subject=$_POST['subject'];

$database="pharmastore";
$password="";
$username="root";

if($fname && $lname && $phonenumber && $subject)
{
   $conn = new mysqli("localhost" , $username , $password , $database) or die("Unable to log into db");
}
   $sql = "INSERT INTO contact (ID, firstname, lastname, phone, feedback)
   VALUES ('', '$fname', '$lname', '$phonenumber', '$subject')";
   
   if ($conn->query($sql) === TRUE) {
       header("location:index.html");
       echo '<script>alert("Feedback submitted successfully.")</script>';
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
   
   $conn->close();
?>
