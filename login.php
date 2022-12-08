<html>
<head>
	<title>SMARTREVIEW</title>
<link rel="stylesheet" type="text/css" href="12.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
</head>
<style >
	.footer1{
display: flex;
position:absolute;
background: #2d3e3f;
width: 100%;
height:10%;
bottom: 0;
}
</style>
<body>
	<div class="mainbody">
	  <form class="logout"  method="POST">
    <input type="Submit" name="Submit1" class="logout_button" value="LOG OUT">
    </form>


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

<?php
include_once 'db.php';
if($con)
{
	if(isset($_POST['Submit']))
	{
		if(isset($_POST['Username']))
		{
		$username = $_POST['Username'];
		}
		
		if(isset($_POST['password']))
		{
		$password = $_POST['password'];
		$password = md5($password);
		}

		
		$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($con,$query);
		if($result)
		{
			$row = mysqli_fetch_assoc($result);
			$id = $row['id'];
			$rank = $row['rank'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$time = 60*60*24*7;
			setcookie("id",$id,time()+$time);
			setcookie("rank",$rank,time()+$time);
			setcookie("fname",$fname,time()+$time);
			setcookie("lname",$lname,time()+$time);
			header("Location: index.php");
		
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

       <!--  <p id="succ">Успешно се вписахте.</p>   -->
          
        <div class="container2">
        	<div class="Login1">
        	<label for="login"> LOGIN </label>
        </div>
        <form method="post" autocomplete="on">
  
        <!---Username------>
        <div class="box">
          <label for="phone" class="fl fontLabel"> Username: </label>
          <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true" style="font-size:35px"></i></div>
          <div class="fr">
              <input type="text" required name="Username" placeholder="Username" class="textBox">
          </div>
          <div class="clr"></div>
        </div>
        <!---Username---->

        <!---Password------>
        <div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
          <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true" style="font-size:35px"></i></div>
          <div class="fr">
              <input type="Password" required name="password" placeholder="Password" class="textBox">
          </div>
          <div class="clr"></div>
        </div>
        <!---Password---->



        <!---Submit Button------>
        <div class="box" style="background: #2d3e3f">
            <input type="Submit" name="Submit" class="submit" value="LGOIN">
        </div>
        <!---Submit Button----->

        <a href="register.php"> <br> <p>Don't have acount?</p></a>
    
      </form>
  </div>
  <!--Body of Form ends--->

<div class="footer1">
	<table border="0" width="100%" class="tablefot">
		<tr>
			<td>	
				<li style="list-style: none;">Contact us:</li>
				<li class="fa fa-phone">  0000000000</li>
				<li class="fa fa-envelope">  @gmail.com</li>
			</td>
			<td>
				<ul class="socialul">
                <li class="socialli"><a href="#" class="fa fa-facebook "> </a></li>
                <li class="socialli"><a href="#" class="fa fa-twitter "> </a></li>
                <li class="socialli"><a href="#" class="fa fa-behance "> </a></li>
                <li class="socialli"><a href="#" class="fa fa-dribbble "> </a></li>
                <li class="socialli"><a href="#" class="fa fa-google-plus "> </a></li>
            </ul>
			</td>

		</tr>
	</table>
</div>
</body>
</html>