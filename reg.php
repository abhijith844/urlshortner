<?php   
	
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    
          
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $query = "INSERT INTO users (username,pass) VALUES ('$username','$password') "; 
        $result=mysqli_query($con,$query);
        header("Location: log.php?");
          
         
             
?> 