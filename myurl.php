<!DOCTYPE html>
<html>
<head>  
     <title>mini url</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <style>
    .li-nav
    {
      font-family: bold;
      font-size: 18px;
      
    }
    .tb5 {
      border:2px solid #456879;
     border-radius:10px;
     height: 30px;
     width: 230px;

   }
    .h1
    {
      color: white;
    }
    img {
     width: 100%;
    height: auto;   
  }
  body  {
  background-image: url("1.png");
  background-size: cover;
  background-repeat:no-repeat;

}
</style>
</head>  
<body> 
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item ">
      <a class="nav-link" href="log.php">LOGIN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">URL</a>
    </li>
    <li class="nav-item  ">
      <a class="nav-link" href="register.php">Register</a>
    </li>
   

  </ul>
</nav>
</body>
</html>
<?php
session_start();
include('connection.php'); 
$uname = $_SESSION['data'];
$sql = " select shorturl from shorturl where usern ='$uname'";
$result = mysqli_query( $con,$sql );
while($row = mysqli_fetch_assoc($result)) {
      echo "http://localhost/url/{$row['shorturl']}  <br> ";
         
   }
?>