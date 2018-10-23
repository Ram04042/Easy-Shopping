<?php 
$servername="localhost";
$uname="root";
$pword="";
$dbname="easy_shopping";

$conn = new mysqli($servername,$uname,$pword,$dbname);
if($conn->connect_error){
die("connnection failed: ".$conn->connect_error);
}
?>