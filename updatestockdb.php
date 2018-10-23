<?php

$connect = mysqli_connect("localhost", "root", "", "easy_shopping");

$tableData = stripcslashes($_POST['pTableData']);
$tableData = json_decode($tableData,TRUE);




foreach ($tableData as $tableData) {
  // code...


$pname= $tableData['pname'];
$qua=$tableData['qua'];

echo $pname + $qua;


$sql= $connect->prepare("Update product_details set stock=stock-'$qua' where product_name='$pname'");

$sql->execute();


$result = $sql->get_result();
}


return $result;


?>
