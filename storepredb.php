<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "easy_shopping");

$tableData = stripcslashes($_POST['pTableData']);
$tableData = json_decode($tableData,TRUE);




foreach ($tableData as $tableData) {
  // code...


$pname= $tableData['pname'];
$qua=$tableData['qua'];

echo $pname + $qua;

$Customer_ID=$_SESSION['email'];
$sql= $connect->prepare("Insert into preplan (Customer_ID, Product_ID, Quantity) values(?,?,?)");
$sql->bind_param('sss',$Customer_ID,$pname,$qua);
$sql->execute();


$result = $sql->get_result();
}


return $result;


?>
