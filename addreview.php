<!DOCTYPE html>
<html>
<head>
  <title>SMARTREVIEW</title>
   <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="12.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
if(isset($_COOKIE['rank']) &&  ($_COOKIE['rank'] > 1))
{

include_once 'db.php';
if($con)
{
	
	mysqli_select_db($con,$db);
	mysqli_set_charset($con,"UTF8");
	
	if(isset($_POST['Submit']))
	{

		$name = $_POST['name'];
		
		$model = $_POST['model'];
		
		$desc = $_POST['desc'];
    $desc2 = $_POST['desc2'];
    $date= $_POST['date'];
    $url_image= $_POST['url_image'];
    $url_image2= $_POST['url_image2'];
    $url_image3= $_POST['url_image3'];
    $cat= $_POST['cat'];
    $assessment= $_POST['assessment'];

		$query = "INSERT INTO `review`(`name`, `model`, `desc`, `desc2`, `date`, `url_image`, `url_image1`, `url_image2`, `cat`, `assessment`) VALUES ('$name','$model','$desc','$desc2','$date','$url_image','$url_image2','$url_image3','$cat','$assessment')";

			mysqli_query($con,$query);
      echo '<script>alert("Данните са добавени успешно")</script>';
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
}
else
{
header("Location: login.php");
}
?>

 
    <div class="container3">
      <form method="post" autocomplete="on">
        <div class="add1" >
          <label for="add"> ADD REVIEW </label>
        </div>
        <!--name-->
        
        <div class="box">
          <label for="name" class="fl fontLabel">Name: </label>
          <div class="fr">
              <input type="text" name="name" placeholder="name"
              class="textBox" autofocus="on" required> 
          </div>
          <div class="clr"></div>
        </div>
        <!--name-->


        <!--Model-->
        <div class="box">
          <label for="model" class="fl fontLabel"> Model: </label>
          <div class="fr">
              <input type="text" required name="model"
              placeholder="model" class="textBox">
          </div>
          <div class="clr"></div>
        </div>
        <!--Model-->
        <!--Category-->
        
        <div class="box">
          <label for="cat" class="fl fontLabel">Category: </label>
          <div class="fr">
              <input type="number" name="cat" placeholder="1-S/2-L,T/3-A"
              class="textBox" autofocus="on" required max="3" min="1">  
          </div>
          <div class="clr"></div>
        </div>
        <!--Category-->


        <!--Assessment-->
        <div class="box">
          <label for="model" class="fl fontLabel"> Assessment: </label>
          <div class="fr">
              <input type="number" required name="assessment"
              placeholder="1-10" class="textBox" max="10" min="1">
          </div>
          <div class="clr"></div>
        </div>
        <!--Assessment-->

        

        <!---Date------>
        <div class="box">
          <label for="date" class="fl fontLabel"> Date: </label>
          <div class="fr">
             <input type="date" required name="date" placeholder="date" class="textBox">
          </div>
          <div class="clr"></div>
        </div>
        <!---Date---->

        <!---url image----->
       <div class="box">
          <label for="url_image" class="fl fontLabel">Web image:</label>
          <div class="fr">
              <input type="text" required name="url_image" placeholder="Web image" class="textBox">
          </div>
          <div class="clr"></div>
        </div>

        <!---url image--->

           <!---url image 2----->
       <div class="box">
          <label for="url_image 2" class="fl fontLabel">Web image 2:</label>
          <div class="fr">
              <input type="text" required name="url_image2" placeholder="Web image 2 " class="textBox">
          </div>
          <div class="clr"></div>
        </div>

        <!---url image 2--->


   <!---url image 3----->
       <div class="box">
          <label for="url_image3" class="fl fontLabel">Web image 3:</label>
          <div class="fr">
              <input type="text" required name="url_image3" placeholder="Web image 3" class="textBox">
          </div>
          <div class="clr"></div>
        </div>

        <!---url image 3--->
        <!---desc------>
        <div class="box">
          <label for="desc" class="fl fontLabel"> Description: </label>
      <div class="fr">
        <textarea required name="desc" placeholder="Description" class="textBox1" ></textarea>
            <!-- <input type="textarea" required name="desc" placeholder="Description" class="textBox1"> -->
          </div>
          <div class="clr"></div>
        </div>
        <!---desc---->


        <!---desc 2------>
        <div class="box">
          <label for="desc2" class="fl fontLabel"> Description 2: </label>
      <div class="fr">
        <textarea required name="desc2" placeholder="Description 2" class="textBox1"></textarea>
            <!-- <input type="textarea" required name="desc2" placeholder="Description 2" class="textBox1"> -->
          </div>
          <div class="clr"></div>
        </div>
        <!---desc 2---->



        <!---Submit Button------>
        <div class="box3" style="background: #2d3e3f">
            <input type="Submit" name="Submit" class="submit" value="ADD">
        </div>
        <!---Submit Button----->
    
      </form>
  </div>
<<div class="footer1">
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