<html>
<head>
  <title>SMARTREVIEW</title>
	<link rel="stylesheet" type="text/css" href="12.css">
   <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
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
</head>
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
	
	
	mysqli_select_db($con,$db);
	mysqli_set_charset($con,"UTF8");
	
	if(isset($_POST['Submit']))
	{
		$error = 0;
		$fname=$_POST['firstName'];
		$lname=$_POST['lastName'];
		$username = $_POST['Username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		if($password == $password2)
		{
			$password = md5($_POST['password']);
		}
		else
		{
			$error = 1;
			echo '<script>alert("Паролите на съвпадат")</script>';
		}
		if(strlen($password) > 8  && strlen($password) < 20)
		{
			$error = 1;
			echo '<script>alert("Паролите не отговарят на изискванията")</script>';
		}
		
		
		$query = "INSERT INTO `users`(`fname`, `lname`, `username`, `email`, `password`) VALUES
     ('$fname','$lname','$username','$email','$password')";
		if($error == 0)
		{
			mysqli_query($con,$query);
      echo '<script>alert("Регистрацията е успешна")</script>';
      header("Location: login.php");
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
	
$query = "SELECT `id`, `rank`, `fname`, `lname`, `username`, `email`, `password` FROM `users`";
    $result = mysqli_query($con,$query);
    $rows = mysqli_num_rows($result);
    if(isset($_COOKIE['fname']) || isset($_COOKIE['lname']))
    {
    $row = mysqli_fetch_assoc($result);
    
    echo "<div class='echo_div'>".$row['fname']." ".$row['lname']."</div>";
    }
	
}


?>


<div class="spacereg">
    <div class="container">
      <div class="Register1">
          <label for="Register"> REGISTER </label>
        </div>
      <form method="post" autocomplete="on">
        <!--First name-->
        
        <div class="box">
          <label for="firstName" class="fl fontLabel"> First Name: </label>
          <div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true" style="font-size:35px"></i>
          </div>
          <div class="fr">
              <input type="text" name="firstName" placeholder="First Name"
              class="textBox" autofocus="on" required> 
          </div>
          <div class="clr"></div>
        </div>
        <!--First name-->


        <!--Last name-->
        <div class="box">
          <label for="lastName" class="fl fontLabel"> Last Name: </label>
          <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true" style="font-size:35px"></i></div>
          <div class="fr">
              <input type="text" required name="lastName"
              placeholder="Last Name" class="textBox">
          </div>
          <div class="clr"></div>
        </div>
        <!--Last name-->


        <!---Username------>
        <div class="box">
          <label for="phone" class="fl fontLabel"> Username: </label>
          <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true" style="font-size:35px"></i></div>
          <div class="fr">
              <input type="text" required name="Username" placeholder="Username" class="textBox">
          </div>
          <div class="clr"></div>
        </div>
        <!---Phone No.---->


        <!---Email ID---->
        <div class="box">
          <label for="email" class="fl fontLabel"> Email: </label>
          <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true" style="font-size:35px"></i></div>
          <div class="fr">
              <input type="email" required name="email" placeholder="Email" class="textBox">
          </div>
          <div class="clr"></div>
        </div>
        <!--Email ID----->


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

        <!---password conf----->
       <div class="box">
          <label for="password" class="fl fontLabel">Conf. Password </label>
          <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true" style="font-size:35px"></i></div>
          <div class="fr">
              <input type="Password" required name="password2" placeholder="Password" class="textBox">
          </div>
          <div class="clr"></div>
        </div>

        <!---password conf--->


        <!--Terms and Conditions------>
        <div class="box terms">
            <input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
        </div>
        <!--Terms and Conditions------>



        <!---Submit Button------>
        <div class="box" style="background: #2d3e3f">
            <input type="Submit" name="Submit" class="submit" value="Register">
        </div>
        <!---Submit Button----->
         
        <a href="login.php">  <br><p>Already have account?</p></a>
    
      </form>
  </div>
  <!--Body of Form ends--->
</div>
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