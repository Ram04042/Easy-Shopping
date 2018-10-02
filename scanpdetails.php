<?php


$connect = mysqli_connect("localhost", "root", "", "easy_shopping");
if(isset($_POST["query"]))
{
     $output = '';
     $query = "SELECT * FROM product_details WHERE upc ='".$_POST["query"]."'";

     $result = mysqli_query($connect, $query);

     while($row = mysqli_fetch_array($result))
     {

         $var['product_name'] = $row['product_name'];
         $var['price'] = $row['price'];

          echo json_encode($var);
          exit();


     }

}



?>
