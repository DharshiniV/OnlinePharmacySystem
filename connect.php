<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "pharmastore";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    $username = $_POST['mail'];  
    $password = $_POST['passwd'];  
       
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select email,pasword from users where email = '$username' and pasword = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header("location:index.html");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            header("location:checkout.html");
        }     
?>  
           