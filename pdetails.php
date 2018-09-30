<?php


$connect = mysqli_connect("localhost", "root", "", "easy_shopping");
if(isset($_POST["query"]))
{
     $output = '';
     $query = "SELECT * FROM product_details WHERE product_name ='".$_POST["query"]."'";

     $result = mysqli_query($connect, $query);

     while($row = mysqli_fetch_array($result))
     {

          $output = $row['price'];

            $var['message'] = $output;
          echo json_encode( $var );
          exit();


     }

}



?>
