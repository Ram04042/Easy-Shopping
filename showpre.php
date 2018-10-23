<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "easy_shopping");
if(isset($_POST["query"]))
{
    $Customer_ID=$_SESSION['email'];
     $output = '';
     $query = "SELECT * FROM preplan WHERE Customer_ID ='".$Customer_ID."'";

     $result = mysqli_query($connect, $query);

     $myArray = array();


     while($row = mysqli_fetch_array($result))
     {

         $var['Product_ID'] = $row['Product_ID'];
         $var['Quantity'] = $row['Quantity'];


         $myArray[] = array("Product_ID" => $var['Product_ID'], "Quantity" => $var['Quantity']);
    }
        echo json_encode($myArray);
          exit();




}



 ?>
