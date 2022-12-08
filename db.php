<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "smartrev";

$con = mysqli_connect($host,$user,$pass,$db);
if($con)
{

}
else
{
	echo "Not connected!!!";
}

?>
</body>
</html>