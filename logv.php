<?php   
	
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    session_start();
    $_SESSION['data'] = "$username";
          
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where username = '$username' and pass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
            
            header("Location: index.php?");  
        }  
        else{  
            $message = "Username and/or Password incorrect.\\nTry again.";
  			echo "<script type='text/javascript'>alert('$message');</script>"; 
  			
        }     
?> 
