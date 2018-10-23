<?php

$connect = mysqli_connect("localhost", "root", "", "easy_shopping");

if(!empty($_POST['username']) && !empty($_POST['password'])):
$id=$_POST["username"];
$password=$_POST["password"];
/*
$sql= "SELECT * from mango WHERE username='".$username."'AND password='".$password."'";

*/
$sql= $connect->prepare("SELECT * from staffdetails WHERE id=? AND password= ?");
$sql->bind_param('ss', $id,$password);
$sql->execute();
$result = $sql->get_result();
$message = '';

if($result->num_rows>0)
{
	session_start();

	$row=$result->fetch_assoc();
	$_SESSION['user_id'] = $row['id'];

	header("Location:staff/staff.html");

}
else										//redirect to home page
{
$message = 'Incorrect username and password';
echo "<script type='text/javascript'> alert('$message');</script>";
include "eslogin.php";
}

 endif;


?>
