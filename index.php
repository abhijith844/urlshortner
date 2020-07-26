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
    <li class="nav-item active">
      <a class="nav-link" href="index.php">URL</a>
    </li>
    <li class="nav-item  ">
      <a class="nav-link" href="register.php">Register</a>
    </li>
   

  </ul>
</nav>
<div class="col-md-4 col-md-offset-4 " id = "frm">
	<form method="POST" action="index.php">
		<br><input class="tb5 bg-dark text-light" type="text" name="urlshort" placeholder="enter here"> <br><br>
		<input class="tb5 bg-dark text-light" type="submit" value="Create" name="submit">
	</form>
	<form method="POST" action="myurl.php">
		<br><input class="tb5 bg-dark bg-dark text-light" type="submit" value="My URL" name="myurls">
		<h4>You must login to View created Urls</h4>	
	</form>
</div>

</body>
</html>
<?php
session_start();
if (isset($_POST["submit"])) {
	
  $conn = mysqli_connect('localhost','root','','url');
	$longurl = $_POST["urlshort"];
	$unm = $_SESSION['data'];

  if (filter_var($longurl, FILTER_VALIDATE_URL))
 {
	$shorturl = substr(md5(microtime()),rand(0,26),5);
	$query = "INSERT INTO shorturl (shorturl,longurl,usern) VALUES ('$shorturl','$longurl','$unm') ";
	$result = mysqli_query($conn,$query);
	if ($result)
	{
		echo "http://localhost/url/$shorturl";
	}else
  {
		echo "error";
	}
}
else
{
  $longurlre = "http://$longurl";
  $shorturl = substr(md5(microtime()),rand(0,26),5);
  $query = "INSERT INTO shorturl (shorturl,longurl,usern) VALUES ('$shorturl','$longurlre','$unm') ";
  $result = mysqli_query($conn,$query);
  if ($result)
  {
    echo "http://localhost/url/$shorturl";
  }else
  {
    echo "error";
  }
}
}
if (isset($_GET["link"]))
 {
	$conn = mysqli_connect('localhost','root','','url');
	$link = $_GET["link"];
	$fetchquery = "SELECT * FROM shorturl WHERE shorturl='$link'";
	$fetchresult = mysqli_query($conn,$fetchquery);
	while ($row = mysqli_fetch_assoc($fetchresult)) {
	$visitlongurl = $row["longurl"];
	header("Location: $visitlongurl");
	exit();
}



}
?>
