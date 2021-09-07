<?php
session_start();
$user=$_POST['user'];
$pass=$_POST['password'];



$connect=mysqli_connect('localhost','root','');
if($connect)
$selectdb=mysqli_select_db($connect,"student");

$result1 = mysqli_query($connect,"SELECT * FROM user");

$count=0;

while($row = mysqli_fetch_array($result1))

  {

  if(($user==$row['user_id'])&&($pass==$row['password']))

  {

  $username = $row['user'];
	$user_type=$row['user_type'];
   }

  }


switch($user_type)
{

	case "Faculty":
		$_SESSION["faculty"]=strtoupper($username);
    header('Location: http://localhost/ERP_Portal/Sessionals.php');
		break;
	case "Student":
		$_SESSION["student"]=strtoupper($username);
		header('Location: http://localhost/ERP_Portal/Home.php');
		break;
	case "Admin":
		$_SESSION["admin"]=strtoupper($username);
		header('Location: http://localhost/ERP_Portal/Admin.php');
    break;
	default:
    $_SESSION["error"] = "AUTHENTICATION FAILED";
    header('Location: http://localhost/ERP_Portal/index.php');
    break;

}

?>
