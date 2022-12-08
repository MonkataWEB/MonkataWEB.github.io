<html>
<head>
	<title>SMARTREVIEW</title>
<meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="style2.css">
 <link rel="stylesheet" type="text/css" href="navbar.css">
 <link rel="stylesheet" type="text/css" href="footer.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

.echo_div
{
  background:#2d3e3f;
  width: 250px;
  height: 40px;
  position: absolute;
  display: inline-table;
  top:0;
  left:0;
  padding-top: 20px;
  text-align: center;
  font-size: 20px;
  color: white;
  border-radius: 0px 0px 30px 30px;
  z-index: +2;

}
.logout{

  top: 0;
  right: 0;
  position: absolute;
 
 font-size: 30px;
 padding-top:0;
 padding: 0;
 z-index: +2;
  
}

.logout_button{
  float: center;
  border: none;
  color: white;
  width: 110px;
  height: 35px;
  background: #2d3e3f;
  text-transform: uppercase;
  cursor: pointer;
  position:relative;
  border-radius: 20px;

  
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<body>
	<div class="mainbody">
	  <form class="logout"  method="POST">
    <input type="Submit" name="Submit1" class="logout_button" value="LOG OUT">
    </form>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<script>

let mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
    <div class="Reviews" >
     <div class="navbar">
	<ul class="menu cf">
   <li><a href="index.php">HOME</a></li>
    <li><a href="">REVIEWS</a>
    <ul class="submenu">
      <li><a href="reveiws.php">REVIEWS</a></li>
      <li><a href="addreview.php">ADD REVIEW</a></li>
    </ul>     
 	 </li>
	<li><a href="">PARTNERS</a></li>
	<li><a href="register.php">REGISTER</a></li>
    <li><a href="login.php">LOGIN</a></li>
  </ul>
  </div>
        </div>
    <div class="combox">
  		<form action="" method="POST">
  		<label for="filter">Filter:</label>
  		<select name="filter" id="filterid">
    		<option value="1">Smartphone</option>
    		<option value="2">Laptop/Tablet</option>
    		<option value="3">Accessories</option>
  		</select>
  		<input type="submit" name="search" value="search"/>
	</div>
       
<div class="container">
	<?php
include_once 'db.php';
if($con)
{
	
	mysqli_select_db($con,$db);
	mysqli_set_charset($con,"UTF8");

	@$maker = $_POST['filter'];
	$query="SELECT `id`, `name`, `model`, `desc`, `desc2`, `date`, `url_image`, `url_image1`, `url_image2`, `cat`, `assessment` FROM `review` WHERE cat ='$maker'";
	
	$query1 = "SELECT `id`, `name`, `model`, `desc`, `desc2`, `date`, `url_image`, `url_image1`, `url_image2`, `cat`, `assessment` FROM `review` ";
	$result = mysqli_query($con,$query);
	$result1 = mysqli_query($con,$query1);
	 $rows = mysqli_num_rows($result);
	 $rows1 = mysqli_num_rows($result1);
	
	
	if (isset($_POST['search'])) {
	if($rows >= 0)
	{

		
		while ($row=mysqli_fetch_array($result)) {
			
		

		echo "<hr>";
		echo "<br><br><br>";
		echo $row['date'];
		echo "<hr>";
		echo "<h1>".$row['name'].'</h1>';
		echo "<h2>".$row['model'].'</h2>';
		echo "<hr>";
		echo "<h2>Оценка: ".$row['assessment'].'</h1>';
		echo "<hr>";
		echo "<h3>Описание 1: ".$row['desc'].'</h1>';
		echo "<h3>Описание 2: ".$row['desc2'].'</h1>';
		$image = $row['url_image'];
		$image1 = $row['url_image1'];
		$image2 = $row['url_image2'];
		echo "<img  width='300px' height='200px'src='$image' alt='Картинка' />
		<img  width='300px' height='200px'src='$image1' alt='Картинка' />
		<img  width='300px' height='200px'src='$image2' alt='Картинка' />";
		echo "<br>";
		}

	}
		
		}
		elseif ($rows1 >= 0) {
			
		while ($row1=mysqli_fetch_array($result1)) {

		echo "<hr>";
		echo "<br><br><br>";
		echo $row1['date'];
		echo "<hr>";
		echo "<h1>".$row1['name'].'</h1>';
		echo "<h2>".$row1['model'].'</h2>';
		echo "<hr>";
		echo "<h2>Оценка: ".$row1['assessment'].'</h2>';
		echo "<hr>";
		echo "<h3> ".$row1['desc'].'</h3>';
		echo "<h3>".$row1['desc2'].'</h3>';
		$image = $row1['url_image'];
		$image1 = $row1['url_image1'];
		$image2 = $row1['url_image2'];
		echo "<img  width='300px' height='200px'src='$image' alt='Картинка' />
		<img  width='300px' height='200px'src='$image1' alt='Картинка' />
		<img  width='300px' height='200px'src='$image2' alt='Картинка' />";
		echo "<br>";
		}

	}
	$query = "SELECT `id`, `rank`, `fname`, `lname`, `username`, `email`, `password` FROM `users`";
		$result = mysqli_query($con,$query);
		$rows = mysqli_num_rows($result);
		if(isset($_COOKIE['fname']) || isset($_COOKIE['lname']))
		{
		$row = mysqli_fetch_assoc($result);
		
		echo "<div class='echo_div'>".$row['fname']." ".$row['lname']."</div>";
		}
		if (isset($_POST['Submit1'])) {
		$time=60*60*24*(-9);
		setcookie("id",$id,time()+$time);
		setcookie("rank",$rank,time()+$time);
		setcookie("fname",$fname,time()+$time);
		setcookie("lname",$lname,time()+$time);
		header("Location: login.php");
		
	}
}


?>
	
</div>


</body>
</html>